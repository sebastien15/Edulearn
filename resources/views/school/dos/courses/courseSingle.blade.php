@extends('layouts.admin')
@section('LogoName','Apagie/Musha')
@section('content')
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('school.includes._dossidenav')
       <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
          	<div class="card">
          		<h5 class="card-header">Mathematics</h5>
          		<div class="card-body">
          			Generate a simple report about the subject
          		</div>
          	</div>
          </div>
      </div>
     </div>
@endsection