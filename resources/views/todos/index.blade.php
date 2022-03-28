@extends('layouts.app')

@section('content')
<div class="container mt-3 d-flex flex-column align-items-center justify-content-center ">
<h1 class="todays__list">Today's List</h1>
<div class="display__box"> 
	@foreach ($items as $item)
		<div class="todo d-flex align-items-center justify-content-between"> 
		 <h4><a href="{{ route('todos.show', $item->id) }}">{{ $item->title }} </a></h4>
		 <div class="todo__btns">
		 	<a href="{{ route('todos.edit', $item->id) }}" class="custom__btn add__btn">Edit</a>
		 	<a href="{{ route('todos.delete', $item->id) }}" class="custom__btn delete__btn">Delete</a>
		 </div>
		</div>
	@endforeach
</div>
</div>
@endsection
