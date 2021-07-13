@extends('product.layout')

@section('content')

<div class="container" style="padding-top:4%">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Product</h5>
            <p class="card-text">here where you can add a new product to your list</p>
        </div>
    </div>
</div>



<div class="container" style="padding-top: 2%">

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="name">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" placeholder="price">
        </div>
        <div class="form-group">
            <label for="details">Details</label>
            <textarea class="form-control" name="details" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

</div>

@endsection
