@extends('layouts.app')
@section('content')
<div class="card mb-3 bg-light">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item mx-1">
                <a class="nav-link btn-primary" href="{{route('questions.edit',$question->id)}}">Edit</a>
            </li>
            <li class="nav-item mx-1">
                <!-- <a class="nav-link btn-danger " href="#">Delete</a> -->
                <form action="{{route('questions.destroy',$question->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="nav-link btn-danger " >Delete</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h2 class="card-title">{{$question->title}}</h2>
        <p class="card-text">{{$question->body}}</p>
        <p class="card-text">Asked By <span class="badge  badge-info"> {{$question['user']->name}}</span></p>
        <p class="card-text"><small class="text-muted">{{$question->created_at}}</small></p>
        @forelse($question['comments'] as $comment)
            <div class="card my-1 border-info">
                <div class="card-body">
                    <h5 class="card-title">Written By  <span class="font-weight-bold ">{{$comment->user->name}}</span></h5>
                    <p class="card-text">{{$comment->comment}}</p>
                    <p class="card-text">Said At <small class="text-muted">{{$comment->created_at}}</small></p>
                </div>
                <!-- <img class="card-img-bottom" src="..." alt="Card image cap"> -->
                <div class="card-body">
                    <a href="{{route('comments.edit',$comment->id)}}" class="btn btn-info">edit</a>
                    <!-- <a href="#" class="btn btn-danger">delete</a> -->
                    <form class="float-right" action="{{route('comments.destroy',$comment->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>

        @empty
            <h2 class="text-center text-danger">There is no Comments Yet For THis Question</h2>
        @endforelse
    </div>
</div>
<script></script>
@include('comments.create')

@endsection