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
        @for($i = 0; $i < 3 ; $i ++)
            <div class="card my-1 border-info">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <!-- <img class="card-img-bottom" src="..." alt="Card image cap"> -->
            </div>
        @endfor
    </div>
</div>
@endsection