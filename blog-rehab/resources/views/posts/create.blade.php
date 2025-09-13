@extends('layouts.app')

@section('content')
    <h2>新規投稿</h2>

    {{-- バリデーションエラー発生時の表示 --}}
    @if ( $errors->any() )
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="/posts" method="post">
        @csrf
        <label>タイトル: </label><br>
        <input type="text" name="title" value="{{ old('title') }}"<br><br>

        <label>本文:</label>
        <textarea name="body">{{ old('body') }}</textarea><br><br>

        <button type="submit">投稿する</button>
    </form>
@endsection
