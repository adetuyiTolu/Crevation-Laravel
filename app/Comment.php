<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $fillable =['body','company_id'];
    
	public function company()

	{

		return $this->belongsTo(Company::class);	

	}

}
