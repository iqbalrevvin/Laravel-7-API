<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'subject_id'];

    protected $with = ['subject', 'user'];

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function user()
    {
    	return $this->belongsTo(User::Class);
    }

    public function subject()
    {
    	return $this->belongsTo(Subject::Class);
    }
}
