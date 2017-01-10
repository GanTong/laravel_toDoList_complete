@extends('layout')


@section('content')

	<div class ="row">

		<div class="col-md-6 cold-md-offset-3">

			<h1>All Main Tasks </h1>

				<ul class="list-group">

  				@foreach ($tasks as $task) 

					<li class="list-group-item"> <a href="/tasks/{{ $task->id }}"> {{ $task->title }} </a> </li>

  				@endforeach

				</ul>

		</div>

	</div>

@stop