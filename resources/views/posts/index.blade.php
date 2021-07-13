@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Posts</h1>
                    <a type="button" class="btn btn-primary" href="{{ route('posts.create') }}">create post</a>
                    <a type="button" class="btn btn-danger" href="{{ route('posts.trash') }}">Trash <i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

        @if ($posts->count() > 0)
        <div class="col">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">User</th>
                        <th scope="col">Photo</th>
                        <th scope="col" style="width: 220px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($posts as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td><img src="{{ URL::asset($item->photo) }}" alt="{{ $item->photo }}" class="img-thumbnail"
                                width="100" height="100"></td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('posts.edit',$item->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                </div>
                                <div class="col">
                                    <a href="{{ route('posts.show',$item->slug) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('posts.destroy', $item->id) }}" method="POST">
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
                No posts
            </div>
        </div>
        @endif


    </div>
</div>

@endsection
