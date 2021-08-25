@extends('layout')
@section('content')
@section('title' , 'Listar Productos')
@section('h1' , 'Listado de productos')

<div class="mb-3 row">
    <div class="col-sm-10"></div>
    <div class="col-sm-3">
        <a href="{{route('category.form')}}" class="btn btn-primary">New categorie</a>
    @if(Session::has('message'))
        <p class="text-danger">{{ Session::get('message') }}</p>
    @endif
    @if(Session::has('message_new'))
        <p class="text-warning">{{ Session::get('message_new') }}</p>
    @endif
    </div>
</div>


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="{{route('category.form' , ['id' =>$category->id])}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('category.delete', ['id'=>$category->id])}}" class="btn btn-danger">delete</a>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>
@endsection

