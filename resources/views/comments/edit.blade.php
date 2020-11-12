@extends('layouts.app')
@section('content')
<div class="card ">
  <div class="card-header">
    Add Comment
  </div>
    <div class="card-body">
        <form class="comment-form" method="POST" action="{{route('comments.update',$comment->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlTextarea1">comment Body</label>
                <textarea class="form-control comment-body" id="exampleFormControlTextarea1" name="comment" value="{{isset($comment->comment) ?  $comment->comment : old('comment') }}" rows="3" required>{{isset($comment->comment) ?  $comment->comment : old('comment') }}</textarea>
            </div>
            <input type="hidden" name="comment_id" value="{{$comment->id}}" readonly>
            <button type="submit" class="btn btn-info comment-submit">Update</button>
        </form>
    </div>
</div>
@endsection