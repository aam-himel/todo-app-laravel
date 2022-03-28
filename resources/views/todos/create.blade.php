@extends('layouts.app')

@section('content')
	<section class="container mt-3 px-1 d-flex flex-column align-items-center justify-content-center ">
		<h1 class="todays__list">Create Todo</h1>
		
		<form class="form__width my-0 mx-auto form__bg" action="{{ route('todos') }}" method="POST">
			@csrf

			@error('title')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
		  <div class="form-group">
		  	<label for="title">Title</label>
		  	<input type="text" name="title" class="form-control" placeholder="Enter Title">
		  </div>

		  <div class="form-group">
		  	<label for="content">Description</label>
		  	<textarea name="content" class="form-control" placeholder="Enter todo description" rows="4" cols="50"> </textarea>
		  </div>	

		 {{--  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div> --}}
		  <button type="submit" class="btn btn-primary ">Submit</button>
		</form>
		
	</section>
@endsection