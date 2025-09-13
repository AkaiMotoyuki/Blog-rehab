@extends('layouts.app')

@section('content')
    <h2>投稿一覧</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>本文</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>
                    {{-- 詳細 --}}
                    <a href ="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                    </td>
                
                    <td>
                        {{-- 本文 --}}
                        {{ Str::limit($post->body, 50)}}
                    </td>
                    <td>
                        {{-- 編集ボタン --}}
                        <a href="{{ route('posts.edit', $post) }}"
                            style="display:inline;"
                            class="btn btn-primary btn-sm"
                        >
                            編集
                        </a>
                        {{-- 削除ボタン --}}
                        <form action="{{ route('posts.destroy', $post) }}"
                            method="POST"
                            style="display:inline";
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm">
                                削除
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection