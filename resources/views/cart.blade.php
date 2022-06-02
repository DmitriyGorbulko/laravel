@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container products">
 <div class="row">
    @if(session('products'))
        <h1>Корзина</h1>
        <table class="table">
            <thead>
                <tr>
                <th>#</th>
                <th>Название телефона</th>
                <th>Количество</th>
                <th>Стоимость</th>
                <th></th>
                </tr>
            </thead>
            <?php $totalCount = 0 ?>
        @foreach(session('products') as $id => $phone)
            <?php $totalCount += $phone['price'] * $phone['count'] ?>
            <tbody>
                <tr>
                <th scope="row">{{$id}}</th>
                <td>{{$phone['name']}}</td>
                <td>{{$phone['count']}}</td>
                <td>{{$phone['price'] * $phone['count']}}</td>
                <td>
                    <a href="{{ url('/delete-from-cart/'.$id) }}">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </a>
                </td>
                </tr>
            </tbody>
        @endforeach
        </table>
        <h5>Общая сумма: {{ $totalCount }}</h5>
    @else
        <h1>Корзина пуста</h1>
    @endif

 </div>
</div>

@endsection
