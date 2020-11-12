@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in <span class="badge badge-info">{{ auth()->user()->name}}</span>
                    <div class="m-2">
                        <a href="{{route('questions.create')}}" class="btn border-primary btn-sm">Create Quesitons</a>
                        <a href="{{route('questions.index', ['user' => auth()->user()->id])}}" class="btn border-info btn-sm">My Questions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
