<?php

namespace App\Policies;

use App\User;
use App\Models\Question;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuestionPolict
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function edit_question(User $user, Question $question)
    {
        if($user->hasRole('admin'))
            return true;
        if($user->id === $question->user_id)
            return true;
        return false;

    }

    public function delete_question(User $user, Question $question)
    {
        if($user->hasRole('admin'))
            return true;
        if($user->id === $question->user_id)
            return true;
        return false;

    }
}
