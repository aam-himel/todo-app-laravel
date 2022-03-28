@extends('layouts.app')

@section('content')
<div class="container mt-3 d-flex flex-column align-items-center justify-content-center ">
<div class="display__box todo__card"> 
	<h2 class="todo__title">{{ $todoItem->title }}</h2>
	<p>{{ $todoItem->content }}</p>
</div>
</div>
@endsection