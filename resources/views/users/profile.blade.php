@extends('layouts.app')

@section('content')

@php
$genderArray = ['Male','Female'];
$provinceArray = ['gaza', 'hebron','rafah','kanunis'];
@endphp

<div class="container" style="padding-top: 2%">

    @if (count($errors) > 0)
    @foreach ($errors->all() as $item)
    <div class="alert alert-danger" role="alert">
        {{ $item }}
    </div>
    @endforeach
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="price">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender">
                @foreach ($genderArray as $item)
                <option value="{{ $item }}" {{ ($user->profile->gender == $item)? 'selected' : '' }}>{{ $item }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="province">Province</label>
            <select class="form-control" name="province">
                @foreach ($provinceArray as $item)
                <option value="{{ $item }}" {{ ($user->profile->province == $item)? 'selected' : '' }}>{{ $item }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="details">Bio</label>
            <textarea class="form-control" name="bio" rows="3">
                {!! $user->profile->bio !!}
            </textarea>
        </div>
        <div class="form-group">
            <label for="facebook">fasebook url</label>
            <input type="text" class="form-control" name="facebook" value="{{ $user->profile->facebook }}">
        </div>
        <!-- <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control"  name="price" placeholder="price">
        </div> -->
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="c_password">confirm password</label>
            <input type="password" class="form-control" name="c_password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">update</button>
        </div>
    </form>

</div>

@endsection
