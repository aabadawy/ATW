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
                    @can('create question')
                        <div class="m-2">
                            <a href="{{route('questions.create')}}" class="btn btn-primary btn-sm">Create Quesitons</a>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
