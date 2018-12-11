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
          		<div class="card-header"><h3>4 PCM</h3></div>
          		<div class="card-body">
          			<div class="w3-bar w3-blue">
                      <button onclick="myFunction('Demo1')" class="w3-bar-item w3-button w3-mobile">Home</button>
                      <a href="#" class="w3-bar-item w3-button w3-mobile">Link 1</a>
                      <a href="#" class="w3-bar-item w3-button w3-mobile">Link 2</a>
                      <a href="#" class="w3-bar-item w3-button w3-mobile">Link 3</a>
                    </div>
                    <div id="Demo1" class="w3-container w3-hide">
                      <p>Some text..</p>
                    </div>
          	    </div>
          	</div>
          </div>
      </div>
     </div>
@endsection