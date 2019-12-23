@extends('jobs.layout')
@section('content')
	
	<h1>Jobs</h1>
	<hr>
	
		<h1>{{ $job->user->id }}</h1>
		<h2><a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a></h2>
		<p>{{ $job->description }}</p>
		<h2>{{ $job->salary }}</h2>
		<h2>{{ $job->location }}</h2>
		<p>{{ $job->apply }}</p>
		<p>created_by {{ $job->user->name }}</p>
		<hr>
	
@endsection