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
          		<div class="card-header"><h3>All Courses</h3></div>
          		<div class="card-body">
          			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="">O'level table</h4>
                   <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Subject name
                        </th>
                        <th>
                          In Charge
                        </th>
                        <th>
                          Progress
                        </th>
                        <th>
                          Student enrolled
                        </th>
                        <th>
                          Statistics
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Mathematics
                        </td>
                        <td>
                          Herman coen
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          26
                        </td>
                        <td>
                         <a href="{{route('director.singleCourse')}}" class="btn btn-info btn-xs">More...</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">A'level table</h4>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Subject name
                        </th>
                        <th>
                          In Charge
                        </th>
                        <th>
                          Progress
                        </th>
                        <th>
                          Student enrolled
                        </th>
                        <th>
                          Statistics
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Mathematics
                        </td>
                        <td>
                          Herman coen
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          26
                        </td>
                        <td>
                         <a href="" class="btn btn-info btn-xs">More...</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          		</div>
          	</div>
          </div>
      </div>
     </div>
@endsection