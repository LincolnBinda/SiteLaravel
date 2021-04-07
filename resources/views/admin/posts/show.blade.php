<h1>Detalhes do Post {{ $post->title }}</h1>

<ul>
    <li>{{ $post->title }}</li>
    <li>{{ $post->content }}</li>
</ul>
<a href="{{ route('posts.index') }}">Voltar</a>
<form action="{{route('posts.delete', $post->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o post {{ $post->title }}</button>
</form>
