<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=['title', 'description'];

    public function comments()
    {

    	return $this->hasMany(Comment::class);

    }

    public function addComment($body)
    {


    	$this->comments->create(compact($body));
    	

    }
}
