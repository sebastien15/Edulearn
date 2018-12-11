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
          		<div class="card-header"><h3>Classes</h3></div>
          		<div class="card-body">
          			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">O'Level</h4>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          id
                        </th>
                        <th>
                          Level
                        </th>
                        <th>
                          Class
                        </th>
                        <th>
                          Students
                        </th>
                        <th>
                          Class Teacher
                        </th>
                        <th>
                          Statistics
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="">1</td>
                        <td>2</td>
                        <td>A</td>
                        <td>34</td>
                        <td>Murenzi Yvan</td>
                        <td><a href="{{route('director.singleClasse')}}" class="btn btn-info btn-xs">More</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          id
                        </th>
                        <th>
                          Level
                        </th>
                        <th>
                          Combination
                        </th>
                        <th>
                          Students
                        </th>
                        <th>
                          Class Teacher
                        </th>
                        <th>
                          Statistics
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="">2</td>
                        <td>4</td>
                        <td>MCB</td>
                        <td>34</td>
                        <td>Murenzi Yvan</td>
                        <td><a href="" class="btn btn-info btn-xs">More</a></td>
                      </tr>
                      <tr>
                        <td class="">3</td>
                        <td>5</td>
                        <td>PCM</td>
                        <td>23</td>
                        <td>Murenzi James</td>
                        <td><a href="" class="btn btn-info btn-xs">More</a></td>
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