<div class="question-form">
  <div class="form-group">
    <label for="exampleFormControlInput1">Question Title</label>
    <input type="text" class="form-control question-title" id="exampleFormControlInput1" value="{{isset($question->title) ?  $question->title : old('title') }}" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Question Body</label>
    <textarea class="form-control question-body" id="exampleFormControlTextarea1" value="{{isset($question->body) ?  $question->body : old('body') }}" rows="3" required>{{isset($question->body) ?  $question->body : old('body') }}
    </textarea>
  </div>
  <button type="submit" class="btn btn-{{$formMode ==='create' ? 'success' : 'primary'}} question-submit">{{$formMode ==='create' ? 'create' : 'edit'}}</button>
</div>
