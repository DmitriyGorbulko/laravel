@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container products">
 <div class="row">
   @foreach($products as $product)
   <div class="col-xs-18 col-sm-6 col-md-3">
     <div class="thumbnail">
       <img src="{{ $product->photo }}" width="240" height="300">
       <div class="caption">
         <h4>{{ $product->name }}</h4>
         <p>{{ strtolower($product->description) }}</p>
         <p><strong>Price: </strong> {{ $product->price }} руб.</p>
         <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
         <form action="{{ url('delete-phone',$product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
       </div>
     </div>
   </div>
   @endforeach
 </div>
</div>

@endsection
