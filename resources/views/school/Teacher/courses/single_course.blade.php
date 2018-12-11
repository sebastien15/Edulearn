@extends('layouts.admin')
@section('LogoName','Apagie/Musha')
@section('content')
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('school.includes._teachersidenav')

      <!-- partial -->
      <div class="main-panel">        
          <div class="content-wrapper">
          	<div class="card">
          		<div class="row">
          			<div class="row">
          				<h2 class="card-title">this is title</h2>
          			</div>
          			<div class="row">
          				<p class="">Lorem ipsum</p>
          			</div>
          			
       		    </div>
       		    <div class="row">
       		    	<div class="col-md-6 col-sm-6 col-xs-12"></div>
       		    	<div class="col-md-4 col-sm-4 col-xs-12"></div>
       		    </div>
       		    <div class="row"></div>
          	</div>
          </div>
      </div>
     </div>
@endsection