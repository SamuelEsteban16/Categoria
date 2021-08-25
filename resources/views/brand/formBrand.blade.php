@extends('layout')
@section('title' , $brand->id ? 'Edit brand':'New brand')
@section('h1' , $brand->id ? 'Edit brand':'New brand')
@section('content')
<form action="{{route('brand.save')}}" method="POST">
    <input type="hidden" name='id' value="{{ $brand->id }}">
    @csrf
    <div class="mb-3 row">
        <label for="brand" class="col-sm-2 col-form-label">Name brand</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="brand" name='brand' value="{{ @old('brand') ? @old('brand') : $brand->brand}}">
        </div>
    </div>
    @error('name')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/brands" class="btn btn-success">Return</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
@endsection
