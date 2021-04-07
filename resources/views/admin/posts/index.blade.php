@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')

@section('content')
<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar">
    <button type="submit">Pesquisar</button>
</form>

<h1>Posts</h1>
@if (session('message'))
    <div style="color: red;">
        {{session('message')}}
    </div>
@endif
@if (session('update'))
    <div style="color: blue;">
        {{session('update')}}
    </div>
@endif

@foreach ($posts as $post)
    {{ $post->title }}
    {{ $post->content }}
    [ <a href="{{ route('posts.show', $post->id) }}">Ver</a> ] /
    [ <a href="{{ route('posts.editar', $post->id) }}"> Editar Post</a> ]
    <br>
@endforeach
<br>
<a href="{{ route('posts.create') }}">Criar novo Post</a>

<hr>
@if (isset($filters))
    {{ $posts->appends($filters)->links() }}
@else
    {{ $posts->links() }}
@endif

@endsection
