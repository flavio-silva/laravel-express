@extends('template')
@section('content')
<div class="blog-header"">

    <h1 class="blog-title">Blog sobre Laravel</h1>
    <p class="lead blog-description">Conteúdo diverso sobre o framework PHP mais popular do planeta</p>
</div>
<div class="row">
    <div class="col-sm-8 blog-main">

    @foreach($posts as $post)

        <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->updated_at}}</p>
            <p>{{$post->content}}</p>
        </div>

    @endforeach

    </div>
</div>

@stop

