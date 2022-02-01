@extends('layouts.app')

@section('content')
    <div>
        <h1>Post</h1>
        <h3>{{ $post->title }}</h3>
        <span>{{ $post->content }}</span>
    </div>
@endsection