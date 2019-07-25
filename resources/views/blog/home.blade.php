@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-sm-3">
            <div class="card">
                @foreach ($article->downloads as $download)
                <img src="{{asset('/storage/'.$download->path)}}" class="card-img-top" alt="...">
                @endforeach
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->disciption_short}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{$article->created_at}}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection