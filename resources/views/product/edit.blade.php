@extends('product.layout')

@section('content')

<div class="container" style="padding-top:4%">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit product</h5>
            <p class="card-text">Product name: " {{ $product->name }} "</p>
        </div>
    </div>
</div>



<div class="container" style="padding-top: 2%">

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{ $product->name }}" name="name" placeholder="name">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" value="{{ $product->price }}" name="price" placeholder="price">
        </div>
        <div class="form-group">
            <label for="details">Details</label>
            <textarea class="form-control" name="details" rows="3">{!! $product->details !!}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">update</button>
        </div>
    </form>

</div>

@endsection
