@extends('layouts.master')

@section('content')

	 <div class="col-sm-8 blog-main">
    	<h1>
    		{{ $company->title }}
    	</h1>

    	{{ $company->description }}

	<hr/>
    	<div class="comment">

    		<ul class="list-group"> 

    		@foreach($company->comments as $comment)

    			<li class="list-group-item">

    				<strong>

    					{{ $comment->created_at->diffForHumans() }}:

    				</strong> &nbsp

    				{{ $comment->body }}

    			</li>

    		@endforeach

    		</ul>

    	</div>

    	<hr/>

    	<div class="card">
    		
    		<div class="card-block">
    			
    			<form method="POST" action="/companies/{{ $company->id }}/comments">

    			{{ csrf_field() }}
    				
    			<div class="form-group">
    				
    				<textarea name="body" placeholder="Enter your review here" class="form-control" ></textarea>

    			</div>

    			<div class="form-group">

  					<button type="submit" class="btn btn-primary">Add Review</button>

 				 </div>	

    			</form>
    			@include('layouts.error')

    		</div>

    	</div>

    </div>
     @include('layouts.sidebar')

@endsection
