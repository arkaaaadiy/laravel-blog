@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

<label for="">Имя</label>
<input class="form-control" type="text" name="name" placeholder="Имя" value="@if(old('name')){{old('name')}}@else{{$user->name ?? ""}}@endif" required>

<label for="">Email</label>
<input class="form-control" type="text" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{$user->email ?? ""}}@endif" required>

<label for="">Пароль</label>
<input class="form-control" type="password" name="password">

<label for="">Подтвердите пароль</label>
<input class="form-control" type="password" name="password_confirmation">


<hr>

<input type="submit" class="btn btn-primary" value="Сохранить">