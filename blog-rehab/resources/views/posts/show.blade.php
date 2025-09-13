@extends('layouts.app')
@section('content')
    <h2> {{ $post->title }} </h2>
    <p> {{ $post->body }}</p>
    <p><small>投稿日時: {{ $post->created_at }}</small></p>

    <a href="/posts">←一覧に戻る</a> 
@endsection