@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="badge badge-primary">Категорий {{$count_categories}}</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="badge badge-primary">Материалов {{$count_articles}}</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="badge badge-primary">Посетителей 0</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="badge badge-primary">Сегодня 0</span></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <a href="{{route('admin.category.create')}}" class="btn btn-block btn-secondary">Создать категорию</a>
            @foreach ($categories as $category)
            <a href="{{route('admin.category.edit', $category)}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h4 class="mb-1">{{$category->title}}</h4>
                    <h4 class="mb-1">
                        {{$category->articles()->count()}} новости
                    </h4>
                </div>
            </a>
            @endforeach

        </div>
        <div class="col-sm-6">
            <a href="{{route('admin.article.create')}}" class="btn btn-block btn-secondary">Создать новость</a>
            @foreach ($articles as $article)
            <a href="{{route('admin.article.edit', $article)}}" class="list-group-item list-group-item-action">
                <div class="">
                    <h4 class="mb-1">{{$article->title}}</h4>
                    <p class="mb-1">
                        {{$article->categories()->pluck('title')->implode(', ')}}
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection