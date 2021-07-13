@extends('product.layout')

@section('content')

<div class="container">
    <div class="jumbotron">
        <p>Trashed products</p>
        <a class="btn btn-primary btn-lg" href="{{ route('product.index') }}" role="button">home</a>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Details</th>
                <th scope="col" style="width: 350px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td scope="row">{{ $item->name }}</td>
                <td scope="row">{{ $item->price }}</td>
                <td scope="row">{{ $item->details }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm">
                            <a class="btn btn-primary" href="{{ route('product.back.from.trash',$item->id) }}"> back</a>
                        </div>
                        <div class="col-sm">
                            <a class="btn btn-danger" href="{{ route('product.delete.from.trash',$item->id) }}"> delete for ever</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>

@endsection
