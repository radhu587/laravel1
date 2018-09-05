@extends('layout')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header  bg-danger">
                <h1 class="p-3 text-white">{{ $post->title}}</h1>
            </div>
            <div class="card-body">
                <h2>{{ $post->name}}</h2><hr><br>
                <h4>{{ $post->body}}</h4>
            <br>    
            <hr>  
                <div class="p-4">  
                <h2>Comments</h2>
                <ul class="list-group " >
                    @foreach($post->comments as $com)
                    
                    <li class="list-group-item mt-2 ">
                  <a href="/commentEdit/{{$com->id}}"><button class="btn btn-dark float-right ml-2"><i class="material-icons">&#xe254;</i></button></a>
                    <a href="/commentDelete/{{$com->id}}"><button class="btn btn-dark float-right"><i class="material-icons">delete</i></button></a>
                        <h4>{{ $com->body }}</h4>
                        <p>{{ $com->created_at->diffForHumans()}}</p>
                       
                    </li>
                    
                    @endforeach
                </ul>
                </div>
                <hr>
                <br>
                <a href="/changeDialog/{{$post->id}}"><button class="btn btn-danger px-4">Edit</button></a>
                <a href="/delete/{{$post->id}}"><button class="btn btn-danger">Delete</button></a>
              <button class="btn btn-danger float-right" data-target="#coll" data-toggle="collapse">Comment</button><hr>
            </div>
                <div class="card-footer collapse bg-white" id="coll">
                    <form action="\addComment\{{ $post->id }}\comments" method="POST">
                    {{ csrf_field()}}
                    <textarea type="text" class="form-control" name="com" placeholder="enter your comment" required cols="120" rows="5"></textarea>
                    <button class="btn btn-danger mt-3 float-right">post comment</button>
                    </form>
               
                </div>
               
        </div>
    </div>
@endsection