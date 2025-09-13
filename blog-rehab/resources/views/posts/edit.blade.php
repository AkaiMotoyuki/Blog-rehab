@extends('layouts.app')

@section('content')
    <h1>記事を編集</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title"
                   value="{{ old('title', $post->title) }}">
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="body">本文</label>
            <textarea name="body" id="body">{{ old('body', $post->body) }}</textarea>
            @error('body')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">更新する</button>
    </form>
@endsection