@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">show Post</h1>
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
            <div class="card">
                <img src="{{ URL::asset($post->photo) }}" alt="{{ $post->photo }}" class="img-thumbnail">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text"> {!! $post->content !!}</p>
                  @foreach ($post->tags as $item)
                  <p class="card-text">#{{ $item->tag }}</p>
                  @endforeach
                  <p> Create at :{{ $post->created_at->diffForhumans() }}</p>
                  <p> update at :{{ $post->updated_at->diffForhumans() }}</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
