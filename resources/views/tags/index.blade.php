@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Tags</h1>
                    <a type="button" class="btn btn-primary" href="{{ route('tags.create') }}">create Tag</a>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

        @if ($tags->count() > 0)
        <div class="col">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tag</th>
                        <th scope="col" style="width: 200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($tags as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->tag }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('tags.edit',$item->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('tags.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="col">
            <div class="alert alert-danger" role="alert">
                No tags
            </div>
        </div>
        @endif


    </div>
</div>

@endsection
