@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container products">
    <h1>Форма добавления телефона</h1>
 <div class="row">
    <form method="post" action="{{ url('/add-phone') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Название</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Название">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Описание</label>
        <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Описание">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Адрес изображения</label>
        <input type="text" class="form-control" id="photo" name="photo" aria-describedby="emailHelp" placeholder="Адрес изображения">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Стоимость</label>
        <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Стоимость">
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
    </form>
 </div>
</div>

@endsection