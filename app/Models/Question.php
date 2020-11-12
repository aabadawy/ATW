<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','body'];

    public function getCreatedAtAttribute($value)
    {
        return date("d F Y H:i", strtotime($value));
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
