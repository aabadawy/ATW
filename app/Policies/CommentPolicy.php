<?php

namespace App\Policies;

use App\User;
use App\Models\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
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

    public function edit_comment(User $user, Comment $comment)
    {
        if($user->hasRole('admin'))
            return true;
        if($user->id === $comment->user_id)
            return true;
        return false;

    }

    public function delete_comment(User $user, Comment $comment)
    {
        if($user->hasRole('admin'))
            return true;
        if($user->id === $comment->user_id)
            return true;
        return false;

    }
}
