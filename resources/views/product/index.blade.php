@extends('product.layout')

@section('content')

<div class="container">
    <div class="jumbotron">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('product.create') }}" role="button">create</a>
        <a class="btn btn-primary btn-lg" href="{{ route('product.trash') }}" role="button">Trash</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Details</th>
                <th scope="col" style="width: 550px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <th scope="row">{{ $item->id}}</th>
                <td scope="row">{{ $item->name }}</td>
                <td scope="row">{{ $item->price }}</td>
                <td scope="row">{{ $item->details }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm">
                            <a class="btn btn-success" href="{{ route('product.edit',$item->id) }}"> edit</a>
                        </div>
                        <div class="col-sm">
                            <a class="btn btn-primary" href="{{ route('product.show',$item->id) }}"> show</a>
                        </div>
                        <div class="col-sm">
                            <a class="btn btn-warning" href="{{ route('soft.delete',$item->id) }}"> soft delete</a>
                        </div>
                        <div class="col-sm">
                            <form action="{{ route('product.destroy',$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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
