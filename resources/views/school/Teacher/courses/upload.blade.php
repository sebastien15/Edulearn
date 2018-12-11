@extends('layouts.admin')
@section('LogoName','Apagie/Musha')
@section('content')
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('school.includes._teachersidenav')

      <!-- partial -->
      <div class="main-panel">        
          <div class="content-wrapper">
          	<div class="col-md-10 col-sm-12 col-xs-12 well">
          		<h6 class="text-uppercase"><i class="mdi mdi-upload text-success"></i>Upload Course</h6>
          		<hr>
          		<form class="forms-sample">
          			<div class="row">
          				<div class="col-md-6 col-sm-6 col-xs-12">
          				    <label class="text-uppercase label">Post Title:</label>
          				    <input type="text" name="title" class="form-control">
          			    </div>
          			    <div class="col-md-6 col-sm-6 col-xs-12">
          			    	<label  class="text-uppercase label" style="">Post Category:</label>
          			    	<select class="form-control" name="category">
          			    		<option>yes</option>
          			    	</select>
          			    </div>
          			</div>
          			<div class="row mt-2">
          				<div class="col-md-6 col-sm-6 col-xs-12">
          					<label class="text-uppercase label">Chapter:</label>
          					<select class="form-control" name="category">
          			    		<option>yes</option>
          			    	</select>
          				</div>
          				<div class="col-md-6 col-sm-6 col-xs-12">
          					<label class="text-uppercase label">sub chapter:</label>
          					<select class="form-control" name="category">
          			    		<option>yes</option>
          			    	</select>
          				</div>
          			</div>
          			<div class="row mt-2">
          				<div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="text-uppercase label">Featured Image:</label>
                                <input type="file" name="featured-image" class="form-control">
          				</div>
          				<div class="col-md-6 col-sm-6 col-xs-12">
          					<label class="text-uppercase label">written:</label>
          					<input type="file" name="written" class="form-control">
          				</div>
          			</div>
          			<div class="row mt-3">
          				<div class="col-md-9">
          					<label class="text-uppercase label">Description:</label>
          					<textarea class="form-control"></textarea>
          				</div>
          				<div class="col-md-3 col-sm-3 col-xs-12">
          					<br/>
          					<br/>
          					<button type="submit" class="btn btn-success btn-sm form-control">Upload</button>
          				</div>
          			</div>
          		</form>
          	</div>
          </div>
      </div>
    </div>
@endsection