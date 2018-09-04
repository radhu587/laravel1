@extends('layout')
@section('content')
<div class="card mt-5">
<div class="card-body"> 
    <form method="POST" action="/show">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control"  name="name"/>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title"/>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="body" type="text"></textarea> 
        </div>
        <div class="form-group">
            <button class="btn btn-danger" type="submit">Post</button>
        </div>
    </form>
    </div>
</div>
@foreach($errors->all() as $err)
    <div class="alert alert-danger">
        <button class="btn btn-danger float-right" data-dismiss="alert">X</button>
        <h4>{{ $err }}</h4> 
    </div>
@endforeach
@endsection