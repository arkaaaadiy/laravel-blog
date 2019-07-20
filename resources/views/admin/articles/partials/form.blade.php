<label for="">Статус</label>
<select name="published" class="form-control">
    @if (isset($article->id))
    <option value="0" @if ($article->published == 0 ) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($article->published == 1 ) selected="" @endif>Опубликовано</option>
    @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input class="form-control" type="text" name="title" placeholder="Заголовок категории" value="{{$article->title ?? ""}}" required>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug ?? ""}}" readonly="">

<label for="">Родительская категория</label>
<select name="categories[]" multiple="" id="" class="form-control">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Краткое описание</label>
<textarea name="description_short" class="form-control" id="description_short">{{$article->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea name="description" class="form-control" id="description">{{$article->description ?? ""}}</textarea>

<label for="">Мета заголовок</label>
<input class="form-control" type="text" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title ?? ""}}" required>

<label for="">Мета описание</label>
<input class="form-control" type="text" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description ?? ""}}" required>

<label for="">Ключевые слова</label>
<input class="form-control" type="text" name="meta_keyword" placeholder="Ключевые слова" value="{{$article->meta_keyword ?? ""}}" required>
<hr>

<input type="submit" class="btn btn-primary" value="Сохранить">