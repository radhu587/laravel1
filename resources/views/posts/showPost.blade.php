@extends('layout')
@section('content')
<div class="container">
    <div class="row mt-5">
        @foreach($take as $val)
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-header bg-dark text-white">
                    <h2>{{ $val->name}}</h2>
                </div>
                <div class="card-body">
                    <h3>{{ $val->title }}</h3>
                </div>
                <div class="card-footer">
                    <a href="/onePost/{{$val->id}}" ><button class="btn btn-danger">See Post</button></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection