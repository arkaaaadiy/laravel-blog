@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title') Список Новостей @endslot
    @slot('parent') Главная @endslot
    @slot('active') Новости @endslot
    @endcomponent

    <hr>

    <a href="{{route('admin.article.create')}}" class="btn btn-primary float-right"><i class="fa fa-plus-square"></i> Создать новость</a>
    <table class="table table-striped">
        <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
        </thead>

        <tbody>
            @forelse ($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->published}}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true} else {return false}" method="post" action="{{route('admin.article.destroy', $article)}}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field()}}

                        <a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="fa fa-edit"></i></a>

                        <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">
                    <h2 class="text-center">Данные отсутсвуют</h2>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>   
</div>

@endsection