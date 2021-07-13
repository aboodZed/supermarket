@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Create Post</h1>
                    <a type="button" class="btn btn-primary" href="{{ route('posts.index') }}">all posts</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors as $item)
            <li>
                {{ $item }}
            </li>
            @endforeach
        </ul>
        @endif
        <div class="col">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    @foreach ($tags as $item)
                    <label style="margin-right: 20px">
                    <input type="checkbox" name="tags[]" value="{{ $item->id }}">
                    {{ $item->tag }}</label>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input class="form-control" name="photo" type="file">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">save</button>
            </form>
        </div>
    </div>
</div>
@endsection
