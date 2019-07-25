@extends('layouts.app')

@section('title', $article->title . " - laravel-blog")
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)

<!-- @section('title')
{{$article->title}} - test
@endsection -->

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <small class="text-muted">Опубликованно {{$article->created_at->format('H:i d.m.Y')}}</small>
            <h1>{{$article->title}}</h1>
            @foreach ($article->downloads as $download)
            <img src="{{asset('/storage/'.$download->path)}}" class=" w-50 p-3 img-fluid shadow-sm p-3 mb-5 bg-white rounded" alt="...">
            @endforeach
            <p>{!! $article->description !!}</p>
        </div>
    </div>
</div>

@endsection