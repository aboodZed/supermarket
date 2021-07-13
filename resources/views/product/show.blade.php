@extends('product.layout')

@section('content')

<div class="container" style="padding-top:4%">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Show Product</h5>
        </div>
    </div>
</div>



<div class="container" style="padding-top: 2%">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{ $product->name }}" name="name" placeholder="name" disabled>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" value="{{ $product->price }}" name="price" placeholder="price" disabled>
        </div>
        <div class="form-group">
            <label for="details">Details</label>
            <textarea class="form-control" name="details" rows="3" disabled>{!! $product->details !!}</textarea>
        </div>

</div>

@endsection
