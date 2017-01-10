@extends('layout')


@section('content')


	<h1> Edit the Task </h1>

	<form method="POST" action="/subtasks/{{ $subtask->id }}">

				  {{ csrf_field() }}

				  {{ method_field('PATCH') }}


				<div class = "form-group">

					<textarea name="body" class="form-control">{{ $subtask->body }}</textarea>	

				</div>


				<div class = "form-group">

					<button type="submit" class="btn btn-success">Update Task</button>	

				</div>


			@if (Session::has('flash_message'))

                    <div class="alert alert-success"> {{ Session::get('flash_message') }} 	</div>

            @endif 


	</form>


			@if (count($errors))

				<ul>
						@foreach ($errors->all() as $error)

						<li class="alert alert-danger"> {{ $error }} </li>

						@endforeach
				</ul>

			@endif


@stop



