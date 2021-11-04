	@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<div class="container">
	<h4>Edit ToDo</h4>
	
	<form method="post" action="{{ route('update', $id) }}" class="row row-cols-lg-auto g-3 align-items-center mb-3">
		@csrf
		@method('PATCH')
		
		<div class="col-10">
			<input type="text" name="task" value="{{ old('task', $task->task) }}" class="form-control" id="todo" placeholder="Edit task .." />
		</div>
		<div class="col-2">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
	@error('task')
	    <p class="text-danger">{{ $message }}</p>
	@enderror
</div>
@endsection
