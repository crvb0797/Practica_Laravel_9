@extends('template')

@section('content')
    <h1>Página de inicio</h1>

    @foreach ($posts as $post)
        <p>
            <strong>{{ $post->id }}</strong>
            <a href="{{route('post', $post->slug)}}">
                {{ $post->title }}
            </a>
            <br>
            <span>
            <strong>Autor:</strong> {{$post->user->name}}
            </span>
        </p>
    @endforeach

    {{$posts->links()}}
@endsection
