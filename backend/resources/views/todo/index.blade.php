@extends('layouts.app')

@section('title', 'Index')

@section('content')

<div class="container">
	<h4>Todo App</h4>

	<form method="post" action="{{ route('store') }}" class="row row-cols-lg-auto g-3 align-items-center mb-3">
		@csrf
		
		<div class="col-10">
			<input type="text" class="form-control" placeholder="Create a task" value="{{ old('task') }}" name="task" style="width: 108%"/>
		</div>

		<div class="col-2 ps-5">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		@error('task')
			<p class="text-danger">{{ $message }}</p>
		@enderror
	</form>
	
	@if ($tasks->isNotEmpty())
	<ul class="list-group">
		@foreach($tasks as $task)
		<li class="list-group-item d-flex justify-content-between align-items-start">
			<div class="mt-1 me-auto">
				{{ $task->task }}
			</div>
			<span class="badge rounded-pill">
				
				<form class="text-end" method="post" action="{{ route('destroy', $task->id) }}" id="form-{{ $task->id }}">
					@csrf
					@method('DELETE')

					<!-- edit !-->
					<a href="{{ route('edit', $task->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

					<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
				</form>
			</span>
		</li>
		@endforeach
	</ul>
	@endif
</div>

@endsection
