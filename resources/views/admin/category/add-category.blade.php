
@extends('admin.master')

@section('content')
  <br>
  <div class="row">
  	  <div class="col-sm-12">
  	  	  <div class="well">
  	  	  	   <div style="font-size: 16px; text-align: center; margin-bottom: 50px;">
  	  	  	   		{{ Session::get('message')}}
  	  	  	   </div>
  	  	  	  <form action="{{ url('new-category') }}" method="POST" class="form-horizontal">
  	  	  	  	  {{ csrf_field() }}
  	  	  	  	  <div class="form-group">
  	  	  	  	  	  <div class="row">
	  	  	  	  	  	  <div class="col-sm-3">
	  	  	  	  	  	  	<label >Category Name</label>
	  	  	  	  	  	  </div>
	  	  	  	  	  	  <div class="col-sm-9">
	  	  	  	  	  	  	 <input type="text" name="category_name" class="form-control">
	  	  	  	  	  	  </div>
  	  	  	  	  	  </div>
  	  	  	  	  </div>
  	  	  	  	  <div class="form-group">
  	  	  	  	  	  <div class="row">
	  	  	  	  	  	  <div class="col-sm-3">
	  	  	  	  	  	  	<label >Category Description</label>
	  	  	  	  	  	  </div>
	  	  	  	  	  	  <div class="col-sm-9">
	  	  	  	  	  	  	 <textarea class="form-control" name="category_description"></textarea>
	  	  	  	  	  	  </div>
  	  	  	  	  	  </div>
  	  	  	  	  </div>
  	  	  	  	  <div class="form-group">
  	  	  	  	  	  <div class="row">
	  	  	  	  	  	  <div class="col-sm-3">
	  	  	  	  	  	  	<label >Publication Status</label>
	  	  	  	  	  	  </div>
	  	  	  	  	  	  <div class="col-sm-9">
	  	  	  	  	  	  	 <select name="publication_status" class="form-control">
	  	  	  	  	  	  	 	<option value="">---Select Publication Status---</option>
	  	  	  	  	  	  	 	<option value="1">Publishede</option>
	  	  	  	  	  	  	 	<option value="0">Unpublished</option>
	  	  	  	  	  	  	 	
	  	  	  	  	  	  	 </select>
	  	  	  	  	  	  </div>
  	  	  	  	  	  </div>
  	  	  	  	  </div>
  	  	  	  	  <div class="form-group">
  	  	  	  	  	  <div class="row">
	  	  	  	  	  	  
	  	  	  	  	  	  <div class="col-sm-9 col-sm-offset-3">
	  	  	  	  	  	  	  <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category">
	  	  	  	  	  	  </div>
  	  	  	  	  	  </div>
  	  	  	  	  </div>
  	  	  	  </form>
  	  	  </div>
  	  </div>
  </div>


@endsection