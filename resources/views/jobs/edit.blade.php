@extends('jobs.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Job</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('jobs.update', $job->id) }}" method="POST">
	@csrf
	@method('PUT')
	<div class="row">
			
	       <div class="col-xs-12 col-sm-12 col-md-12">
	           <div class="form-group">
	               <strong>Title:</strong>
	               <input type="text" name="title" class="form-control" placeholder="title" value="{{ $job->title }}">
	           </div>
	       </div>
	       <div class="col-xs-12 col-sm-12 col-md-12">
	           <div class="form-group">
	               <strong>Description:</strong>
	               <textarea class="form-control" style="height:150px" name="description" placeholder="description">{{ $job->description }}</textarea>
	           </div>
	       </div>
	       <div class="col-xs-12 col-sm-12 col-md-12">
	           <div class="form-group">
	               <strong>Salary:</strong>
	               <input type="text" name="salary" class="form-control" placeholder="salary" value="{{ $job->salary }}">
	           </div>
	       </div>
	       <div class="col-xs-12 col-sm-12 col-md-12">
	           <div class="form-group">
	               <strong>Location:</strong>
	               <input type="text" name="location" class="form-control" placeholder="location" value="{{ $job->location }}">
	           </div>
	       </div>
	       <div class="col-xs-12 col-sm-12 col-md-12">
	           <div class="form-group">
	               <strong>Apply:</strong>
	               <input type="text" name="apply" class="form-control" placeholder="apply" value="{{ $job->apply }}">
	           </div>
	       </div>
	       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	               <button type="submit" class="btn btn-primary">Submit</button>
	       </div>
	   
	</div> 
</form>
@endsection