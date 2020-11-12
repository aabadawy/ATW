@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Question
    <a href="{{route('questions.index')}}" class="btn btn-sm btn-primary float-right">Back</a>
  </div>
    <div class="card-body">
        @include('questions.form' , ['formMode' => 'edit'])
    </div>
</div>
<script>
$( document ).ready(function() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(".question-submit").on('click',function(){
        $.ajax({
            url: "{{route('questions.update', $question->id)}}",
            type: 'PUT',
            data: {_token: CSRF_TOKEN, title:$(".question-title").val(), body:$(".question-body").val()},
            dataType: 'JSON',
        });
    })
});
</script>
@endsection