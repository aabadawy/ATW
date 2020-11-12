<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['comment', 'user_id', 'question_id'];

    public function getCreatedAtAttribute($value)
    {
        return date("d F Y H:i", strtotime($value));
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}
