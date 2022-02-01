@extends('layouts.app')

@section('content')

    <a href="/posts/create">Criar Post</a>

    @foreach ($posts as $post)
        <div class="card" style="width: 300px">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>

            <div>
                <a href="/posts/edit/{{ $post->id }}">Editar</a>
                <a href="/posts/delete/{{ $post->id }}">Deletar</a>
            </div>
        </div>       
    @endforeach
@endsection