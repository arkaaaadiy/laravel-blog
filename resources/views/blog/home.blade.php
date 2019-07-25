@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-columns">
        @foreach ($articles as $article)

        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="{{route('article', $article->slug)}}">{{$article->title}}</a></h5>
                <p class="card-text">{!! $article->description_short !!}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$article->created_at}}</small>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection