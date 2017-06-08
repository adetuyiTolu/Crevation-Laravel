<?php

namespace App\Http\Controllers;

use App\Company;

class CompanyController extends Controller
{
    public function index(){

    	$companies = Company::latest()->get();

    	return view('company.index',compact('companies'));

    }

    public function show(Company $company){

		return view('company.show',compact('company'));

    }

    public function create(){

    	return view('company.create');
    }

    public function store(){

    	$this->validate(request(),[

    			'title' => 'required',
    			'description' => 'required'

    		]);

    	Company::create(request(['title','description']));

    	return redirect('/');
    }
}
