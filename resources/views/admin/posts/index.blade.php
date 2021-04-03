<h1>Posts</h1>

@foreach ($posts as $post)
    {{ $post->title }}
    {{ $post->content }}
    <br>
@endforeach
<br>
<a href="{{ route('posts.create') }}" class="btn">Criar novo Post</a>
