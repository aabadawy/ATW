<div class="card ">
  <div class="card-header">
    Add Comment
  </div>
    <div class="card-body">
        <form class="comment-form" method="POST" action="{{route('comments.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Question Body</label>
                <textarea class="form-control comment-body" id="exampleFormControlTextarea1" name="comment" value="{{isset($comment->comment) ?  $comment->comment : old('comment') }}" rows="3" required>{{isset($comment->comment) ?  $question->comment : old('comment') }}</textarea>
            </div>
            <input type="hidden" name="question_id" value="{{$question->id}}" readonly>
            <button type="submit" class="btn btn-info comment-submit">Comment</button>
        </form>
    </div>
</div>