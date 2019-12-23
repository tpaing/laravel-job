@extends('layouts.master')
@section('content')
	
	<h1>Jobs</h1>
	<button style="float: right;"><a style="text-decoration: none;" href="{{ url('/out') }}">Logout</a></button>
	<a href="{{ route('jobs.create') }}"><button>Add Job</button></a>
	
	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

	@foreach($jobs as $data)
		
		<h1>{{ Auth::user()->id }}</h1>
		<h2><a href="{{ route('jobs.show', $data->id) }}">{{ $data->title }}</a></h2>

		<u><strong>Description:</strong></u>
		<p>{{ $data->description }}</p>

		<u><strong>Salary:</strong></u>
		<h2>{{ $data->salary }}</h2>

		<u><strong>Location:</strong></u>
		<h2>{{ $data->location }}</h2>

		<p>{{ $data->apply }}</p>
		<p>created_by {{ $data->user->name }}</p>
		<form action="{{route('jobs.destroy',$data->id)}}" method="POST">
                <a class="btn btn-primary" href="{{route('jobs.show',$data->id)}}">Show</a>
                <a class="btn btn-success" href="{{route('jobs.edit',$data->id)}}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
        <form>
		<hr>
	@endforeach
@endsection