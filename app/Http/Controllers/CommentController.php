<?php

namespace App\Http\Controllers;

use App\Company;

use App\Comment;

class CommentController extends Controller

{
    public function store(Company $company)
    {

    	$this->validate(request(),[

    			'body' => 'required|min:3'

    		]);

    	$company->addComment(request('body'));

    	return back();

    }
}
