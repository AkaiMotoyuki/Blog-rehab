<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //　バリデーションチェック
        $validated = $request->validate([
            'title' => 'required|min:1|max:255',
            'body'  => 'required|min:10'
        ]);

        // 保存処理
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts');
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        // compact('post') = ['post' => $post]
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post) {
        // ルートモデルバインディングで {post} が自動解決される
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        //入力内容のバリデーション
        $validated = $request->validate([
            'title' => 'required|min:1|max:255',
            'body'  => 'required|min:10'
        ]);

        try{
            //更新
            $post->update($validated);

            //詳細ページにリダイレクト
            return redirect()->route('posts.show', $post)
                             ->with('status', '更新しました。');
        } catch (\Exeption $e) {
            return redirect()->back()
                             ->with('error', '更新に失敗しました');
        }
    }
    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('status', '削除しました');
    }
}