@extends('layouts.app')

@section('content')
    <h2>投稿一覧</h2>
    <div id="test"></div>
<div id="app" data-posts='@json($posts)'></div>
@endsection