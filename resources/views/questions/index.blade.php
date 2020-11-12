@extends('layouts.app')

@section('content')
<div class="questions-info">

</div>
<script>
$( document ).ready(function() {
    getQuestions();
        function getQuestions(){
            $.ajax({
                url:"{{route('questions.all')}}",
            }).done(function(questions){
                console.log(questions)
                let output = '';
                $.each(questions,function(key , question){
                    output += `
                    <div class="card mb-3 bg-light">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <div class="card-body">
                            <h2 class="card-title"><a href="questions/${question.id}">${question.title}</a></h2>
                            <p class="card-text">${question.body}</p>
                            <p class="card-text">Asked By <span class="badge  badge-info">${question.user.name}</span></p>
                            <p class="card-text"><small class="text-muted">${question.created_at}</small></p>
                        </div>
                    </div>
                    `;
                });
                $('.questions-info').append(output);
            });
        }
});
</script>
@endsection