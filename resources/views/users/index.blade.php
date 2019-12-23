@extends('layouts.master')
@section('content')
	
	
	<select id = "myList">
        <option value = "1"><h1>Name</h1></option>
        <option value = "2">Job List</option>
        
    </select>
    <h1>Jobs</h1>
	
	
	<h1>{{ Auth::users->name }}</h1>
@endsection