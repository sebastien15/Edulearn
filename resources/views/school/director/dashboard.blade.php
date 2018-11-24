@extends('layouts.admin')
@section('LogoName','Apagie/Musha')
@section('content')
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('school.includes._sidenav')

      <!-- partial -->
      <div class="main-panel">
        
          <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview
                  <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
             <div class="col-md-3 stretch-card grid-margin">
               <div class="card bg-gradient-info">
                   <center><div class="text-white"><i class="mdi mdi-account icon-lg"></i></div></center>
                   <a href=""><div class="card-body card-text display-5">Student Administration</div></a>
               </div>
             </div>
             <div class="col-md-3 stretch-card grid-margin">
               <div class="card bg-gradient-success">
                 <center><div class="text-white"><i class="mdi mdi-account-multiple-outline icon-lg"></i></div></center>
                 <a href=""><div class="card-body card-text display-5">Teaching staff</div></a>
               </div>
             </div>
             <div class="col-md-3 stretch-card grid-margin">
               <div class="card bg-gradient-green">
                 <center><div class="text-white"><i class="mdi mdi-account-multiple-outline icon-lg"></i></div></center>
                 <a href=""><div class="card-body card-text display-5">Non Teaching staff</div></a>
               </div>
             </div>
             <div class="col-md-3 stretch-card grid-margin">
               <div class="card bg-gradient-secondary">
                 <center><div class="text-white"><i class="mdi mdi-marker-check icon-lg"></i></div></center>
                 <a href=""><div class="card-body card-text display-5">Marks</div></a>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-3 stretch-card grid-margin">
               <div class="card bg-gradient-cool">
                 <center><div class="text-white"><i class="mdi mdi-format-list-bulleted icon-lg"></i></div></center>
                 <a href=""><div class="card-body card-text display-5">Student daily attendance</div></a>
               </div>
             </div>
             <div class="col-md-3 stretch-card grid-margin">
               <div class="card bg-gradient-dark">
                 <center><div class="text-white"><i class="mdi mdi-receipt icon-lg"></i></div></center>
                 <a href=""><div class="card-body card-text display-5">Payment</div></a>
               </div>
             </div>
             <div class="col-md-3 stretch-card grid-margin">
               <div class="card bg-gradient-info">
                 <center><div class="text-white"><i class="mdi mdi-library-books icon-lg"></i></div></center>
                 <a href=""><div class="card-body card-text display-5">Library </div></a>
               </div>
             </div>
             <div class="col-md-3 stretch-card grid-margin">
               <div class="card bg-gradient-info">
                 <center><div class="text-white"><i class="mdi mdi mdi-message-text icon-lg"></i></div></center>
                 <a href="{{route('director.message')}}"><div class="card-body card-text display-5">Mail/SMS</div></a>
               </div>
             </div>
           </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                    <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>                                     
                  </div>
                  <canvas id="visit-sale-chart" class="mt-4"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Traffic Sources</h4>
                  <canvas id="traffic-chart"></canvas>
                  <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>                                                      
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Tickets</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            Assignee
                          </th>
                          <th>
                            Subject
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Last Update
                          </th>
                          <th>
                            Tracking ID
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img src="{{asset('images/faces/face1.jpg')}}" class="mr-2" alt="image">
                            David Grey
                          </td>
                          <td>
                            Fund is not recieved
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">DONE</label>
                          </td>
                          <td>
                            Dec 5, 2017
                          </td>
                          <td>
                            WD-12345
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="{{asset('images/faces/face2.jpg')}}" class="mr-2" alt="image">
                            Stella Johnson
                          </td>
                          <td>
                            High loading time
                          </td>
                          <td>
                            <label class="badge badge-gradient-warning">PROGRESS</label>
                          </td>
                          <td>
                            Dec 12, 2017
                          </td>
                          <td>
                            WD-12346
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="{{asset('images/faces/face3.jpg')}}" class="mr-2" alt="image">
                            Marina Michel
                          </td>
                          <td>
                            Website down for one week
                          </td>
                          <td>
                            <label class="badge badge-gradient-info">ON HOLD</label>
                          </td>
                          <td>
                            Dec 16, 2017
                          </td>
                          <td>
                            WD-12347
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="{{asset('images/faces/face4.jpg')}}" class="mr-2" alt="image">
                            John Doe
                          </td>
                          <td>
                            Loosing control on server
                          </td>
                          <td>
                            <label class="badge badge-gradient-danger">REJECTED</label>
                          </td>
                          <td>
                            Dec 3, 2017
                          </td>
                          <td>
                            WD-12348
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Updates</h4>
                  <div class="d-flex">
                    <div class="d-flex align-items-center mr-4 text-muted font-weight-light">
                      <i class="mdi mdi-account-outline icon-sm mr-2"></i>
                      <span>jack Menqu</span>
                    </div>
                    <div class="d-flex align-items-center text-muted font-weight-light">
                      <i class="mdi mdi-clock icon-sm mr-2"></i>
                      <span>October 3rd, 2018</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-6 pr-1">
                      <img src="{{asset('images/dashboard/img_1.jpg')}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                      <img src="{{asset('images/dashboard/img_4.jpg')}}" class="mw-100 w-100 rounded" alt="image">
                    </div>
                    <div class="col-6 pl-1">
                      <img src="{{asset('images/dashboard/img_2.jpg')}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                      <img src="{{asset('images/dashboard/img_3.jpg')}}" class="mw-100 w-100 rounded" alt="image">
                    </div>
                  </div>
                  <div class="d-flex mt-5 align-items-top">
                    <img src="{{asset('images/faces/face3.jpg')}}" class="img-sm rounded-circle mr-3" alt="image">
                    <div class="mb-0 flex-grow">
                      <h5 class="mr-2 mb-2">School Website - Authentication Module.</h5>
                      <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable
                        content of a page.</p>
                    </div>
                    <div class="ml-auto">
                      <i class="mdi mdi-heart-outline text-muted"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts.adminincludes._footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>



@endsection