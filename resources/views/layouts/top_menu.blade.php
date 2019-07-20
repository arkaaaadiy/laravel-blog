@foreach ($categories as $category)

@if ($category->children->where('published', 1)->count())
<li class="nav-item dropdown">
    <a href="{{url("/>blog/category/$category->slug")}}" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
        {{$category->title}}
    </a>
    <ul class="dropdown-menu" role="menu">
        @include('layouts.top_menu', ['categories'=> $category->children->where('published',1)])
    </ul>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
</li>
@endif


@endforeach