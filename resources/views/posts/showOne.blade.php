@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header  bg-danger">
                <h1 class="p-3 text-white">{{ $post->title}}</h1>
            </div>
            <div class="card-body">
                <h2>{{ $post->name}}</h2><hr>
                <h4>{{ $post->body}}</h4>
                <hr><br>    
                <label>Comments</label>
                <ul class="list-group" >
                    @foreach($post->comments as $com)
                    <li class="list-group-item">{{ $com->body }}</li>
                    @endforeach
                </ul>
                <br>
                <hr>
                <br>
                <a href="/changeDialog/{{$post->id}}"><button class="btn btn-danger px-4">Edit</button></a>
                <a href="/delete/{{$post->id}}"><button class="btn btn-danger">Delete</button></a>
              <button class="btn btn-danger float-right" data-target="#coll" data-toggle="collapse">Comment</button>
            </div>
                <div class="card-footer collapse bg-white" id="coll">
                    <form action="\addComment\{{ $post->id }}\comments" method="POST">
                    {{ csrf_field()}}
                    <textarea type="text" class="form-control" name="com" placeholder="enter your comment" cols="120" rows="5"></textarea>
                    <button class="btn btn-danger mt-3 float-right">post comment</button>
                    </form>
                </div>
        </div>
    </div>
@endsection