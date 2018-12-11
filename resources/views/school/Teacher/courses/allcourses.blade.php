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
          		<div class="card-body">
          			<div class="row">
          					<div class="col-md-4">
          						<h4 class="card-title">My courses</h4>
          					</div>
          					<div class="col-md-8">
          						<table class="table table-bordered table-responsive">
                                    <thead>
                                      <tr>
                                        <th>
                                          Subject
                                        </th>
                                        <th>
                                          Videos
                                        </th>
                                        <th>
                                          Written
                                        </th>
                                        <th>
                                          students enrolled
                                        </th>
                                        <th>
                                          last updated
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                      	<td>
                                          Mathematics
                                        </td>
                                        <td>
                                          15
                                        </td>
                                        <td>
                                          23
                                        </td>
                                        <td>
                                          102
                                        </td>
                                       <td>
                                          May 15, 2015
                                        </td>
                                      </tr>
                                      <tr>
                                      	<td>
                                          Mathematics
                                        </td>
                                        <td>
                                          15
                                        </td>
                                        <td>
                                          23
                                        </td>
                                        <td>
                                          102
                                        </td>
                                       <td>
                                          May 15, 2015
                                        </td>
                                      </tr>
                                    </tbody>
                                </table>
          					</div>
          			</div>
          			<hr>
          			<div class="row mt-5">
          				<div class="card-title"><a href=""> Mathematics</a></div>
          				<hr>
          				<div class="row">
          					<div class="col-md-4">
          						<h5 class=""><strong>this is the title</strong></h5>
          						<div>
          							<div class="video-code">
                                        <iframe width="100%" height="150" src="https://www.youtube.com/embed/e452W2Kj-yg" frameborder="0" allowfullscreen></iframe>
						            </div><!-- // video-code -->
                                </div>
                                <div class="row">
                                	<a href="{{route('schoolTeacher.singleCourse')}}" class="btn btn-success btn-sm col-md-7 col-sm-7 col-xs-7 ml-4">View</a>
                                </div>
          					</div>
          					<div class="col-md-4">
          						<h5 class=""><strong>this is the title</strong></h5>
          						<div>
          							<div class="video-code">
                                        <iframe width="100%" height="150" src="https://www.youtube.com/embed/e452W2Kj-yg" frameborder="0" allowfullscreen></iframe>
						            </div><!-- // video-code -->
                                </div>
                                <div class="row">
                                	<a href="" class="btn btn-success btn-sm col-md-7 col-sm-7 col-xs-7 ml-4">View</a>
                                </div>
          					</div>
          					<div class="col-md-4">
          						<h5 class=""><strong>this is the title</strong></h5>
          						<div>
          							<div class="video-code">
                                        <iframe width="100%" height="150" src="https://www.youtube.com/embed/e452W2Kj-yg" frameborder="0" allowfullscreen></iframe>
						            </div><!-- // video-code -->
                                </div>
                                <div class="row">
                                	<a href="" class="btn btn-success btn-sm col-md-7 col-sm-7 col-xs-7 ml-4">View</a>
                                </div>
          					</div>
          				</div>
          			</div>
          			<div class="row mt-3">
          				<div class="card-title"><a href=""> Physics</a></div>
          				<hr>
          				<div class="row">
          					<div class="col-md-4">
          						<h5 class=""><strong>this is the title</strong></h5>
          						<div>
          							<div class="video-code">
                                        <iframe width="100%" height="150" src="https://www.youtube.com/embed/e452W2Kj-yg" frameborder="0" allowfullscreen></iframe>
						            </div><!-- // video-code -->
                                </div>
                                <div class="row">
                                	<a href="" class="btn btn-success btn-sm col-md-7 col-sm-7 col-xs-7 ml-4">View</a>
                                </div>
          					</div>
          					<div class="col-md-4">
          						<h5 class=""><strong>this is the title</strong></h5>
          						<div>
          							<div class="video-code">
                                        <iframe width="100%" height="150" src="https://www.youtube.com/embed/e452W2Kj-yg" frameborder="0" allowfullscreen></iframe>
						            </div><!-- // video-code -->
                                </div>
                                <div class="row">
                                	<a href="" class="btn btn-success btn-sm col-md-7 col-sm-7 col-xs-2 ml-4">View</a>
                                </div>
          					</div>
          					<div class="col-md-4">
          						<h5 class=""><strong>this is the title</strong></h5>
          						<div>
          							<div class="video-code">
                                        <iframe width="100%" height="150" src="https://www.youtube.com/embed/e452W2Kj-yg" frameborder="0" allowfullscreen></iframe>
						            </div><!-- // video-code -->
                                </div>
                                <div class="row">
                                	<a href="" class="btn btn-success btn-sm col-md-7 col-sm-7 col-xs-2 ml-4">View</a>
                                </div>
          					</div>
          				</div>
          			</div>
          		</div>
          	</div>
          </div>
      </div>
     </div>
@endsection