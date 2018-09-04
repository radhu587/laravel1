@extends('layout')
@section('content')
<div class="card mt-5">
    <div class="card-header bg-danger text-white">
        <h1>Edit Post</h1>
    </div>
    <div class="card-body">
    <form action="/modify/{{$post->id}}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="editName" value="{{ $post->name }}"/>
    </div>
    <div class="form-group">
        <label>Title</label>    
        <input type="text" class="form-control" name="editTitle" value="{{ $post->title}}"/>
    </div>
    <div class="form-group">
        <label >Body</label>
        <textarea class="form-control" name="editBody" type="text">{{ $post->body}}</textarea>
   </div>
    <button class="btn btn-danger" type="submit">save</button>
   </form>
   </div>
</div>
@endsection