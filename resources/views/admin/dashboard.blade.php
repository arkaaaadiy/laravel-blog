@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Категория 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Материалов 0</span></p>
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
            <a href="#" class="btn btn-block btn-default">Создать категорию</a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Категория первая</h4>
                <p class="list-group-item-text">
                    Кол-во материалов
                </p>
            </a>
            </div>
            <div class="col-sm-6">
            <a href="#" class="btn btn-block btn-default">Создать категорию</a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Метариал первый</h4>
                <p class="list-group-item-text">
                    Категория
                </p>
            </a>
            </div>
        </div>
    </div>
@endsection