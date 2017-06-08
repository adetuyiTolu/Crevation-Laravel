@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">
	
	<h1>Add a new Company</h1>

	<hr/>


<form method="POST" action="/companies">

	{{ csrf_field() }}

  <div class="form-group">

    <label for="name">Title</label>

    <input type="text" class="form-control" id="title" name="title" >

  </div>


  <div class="form-group">

    <label for="description">Description</label>

   	<textarea id="description" name="description" class="form-control" ></textarea> 

  </div>

  <div class="form-group">

  	<button type="submit" class="btn btn-primary">Add Company</button>

  </div>	

@include('layouts.error')

</form>

</div>

@include('layouts.sidebar') 
 

@endsection