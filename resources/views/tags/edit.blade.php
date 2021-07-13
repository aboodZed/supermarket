@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Edit Tag</h1>
                    <a type="button" class="btn btn-primary" href="{{ route('tags.index') }}">all Tags</a>
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
            <form action="{{ route('tags.update',$tag->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="tag" class="form-label">Tag</label>
                    <input type="text" class="form-control" name="tag" value="{{ $tag->tag }}">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
@endsection
