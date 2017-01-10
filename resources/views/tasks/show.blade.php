@extends('layout')

<style>

.strikethrough:checked + br + span

{
  text-decoration:line-through
}

</style>

@section('content')

	<div class ="row">

		<div class="col-md-6 cold-md-offset-3">


		<h3> {{ $task->title }} </h3>

			<ul class="list-group">

				@foreach ($task->subtasks as $subtask)

					

				<li class="list-group-item"> 



				<input type="checkbox" class="strikethrough" value="1"> CHECK for completed task <br> 


				<span>  {{ $subtask->body }} </span>

		

							<a href="/subtasks/{{ $subtask->id }}/edit" class="btn btn-xs btn-primary pull-right">  EDIT - USER: {{ $subtask->user->name }} </a>

					<form action="/subtasks/{{ $subtask->id }}/delete" method="post">

								{{ method_field('DELETE') }}
								{{ csrf_field() }}

						<button type="submit" class="btn btn-danger btn-xs"> Delete </button>
				
					</form>

					

				</li>

				@endforeach

			</ul>


			<hr>

			<h3> Add a New Task </h3>

			<form method="POST" action="/tasks/{{ $task->id }}/subtasks">


				  {{ csrf_field() }}


				<div class = "form-group">

					<textarea name="body" class="form-control">{{ old('body') }} </textarea>	

				</div>


				<div class = "form-group">

				
					 <button type="submit" class="btn btn-success"> Add </button>

					 <a href="/tasks" class="btn btn-primary"> Back </a>

					 @if (Session::has('flash_message'))

               		<div class="alert alert-success"> {{ Session::get('flash_message') }} 

               		</div>

                	@endif            	
                	
				</div>

			</form>


			@if (count($errors))

				<ul>
						@foreach ($errors->all() as $error)

						<li class="alert alert-danger"> {{ $error }} </li>

						@endforeach
				</ul>

			@endif


		</div>

	</div>

@stop



