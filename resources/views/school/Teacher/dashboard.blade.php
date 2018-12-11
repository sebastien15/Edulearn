@extends('layouts.admin')
@section('LogoName','Apagie/Musha')
@section('content')
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('school.includes._teachersidenav')

      <!-- partial -->
      <div class="main-panel">        
          <div class="content-wrapper">
          <div class="row well">
              <div class="col-md-3 col-sm-6 col-xs-12 stretch-card grid-margin">
               <div class="card bg-gradient-success">
                   <a href=""><div class="card-body card-text display-5">Student Winninng Statistics</div></a>
               </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-12 stretch-card grid-margin">
               <div class="card bg-gradient-info">
                   <a href=""><div class="card-body card-text display-5">Courses completion percentage</div></a>
               </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-12 stretch-card grid-margin">
               <div class="card bg-gradient-danger">
                   <a href=""><div class="card-body card-text display-5">Information & Messages</div></a>
               </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-12 stretch-card grid-margin">
               <div class="card bg-gradient-primary">
                   <a href="{{route('schoolTeacher.upload')}}"><div class="card-body card-text display-5">Upload Courses</div></a>
               </div>
             </div>
          </div>
          <div class="row">
            <div class="col-md-7 well">
              <h4 class="card-title">All Message</h4>
              <table class="table table-striped " >
                    <thead>
                      <tr>
                        <th>
                          Profile
                        </th>
                        <th>
                           name
                        </th>
                        <th>
                          subject
                        </th>
                        <th>
                          message
                        </th>
                        <th>
                          Received
                        </th>
                        <th>
                          Buttons
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces-clipart/pic-3.png" alt="image"/>
                        </td>
                        <td>
                          Henry Tom
                        </td>
                        <td>
                          Student Displine
                        </td>
                        <td>
                          Lorem ipsum Lorem ipsum Lorem ipsum.............
                        </td>
                        <td>
                          June 16, 2015
                        </td>
                        <td>
                          <a href="">View</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces-clipart/pic-3.png" alt="image"/>
                        </td>
                        <td>
                          Henry Tom
                        </td>
                        <td>
                          Student Displine
                        </td>
                        <td>
                          Lorem ipsum Lorem ipsum Lorem ipsum.............
                        </td>
                        <td>
                          June 16, 2015
                        </td>
                        <td>
                          <a href="">View</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces-clipart/pic-3.png" alt="image"/>
                        </td>
                        <td>
                          Henry Tom
                        </td>
                        <td>
                          Student Displine
                        </td>
                        <td>
                          Lorem ipsum Lorem ipsum Lorem ipsum.............
                        </td>
                        <td>
                          June 16, 2015
                        </td>
                        <td>
                          <a href="">View</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-md-5 well">
              <h4 class="card-title">What's new in My field!</h4>
              <table class="table table-striped " >
                    <thead>
                      <tr>
                        <th>Topic</th>
                        <th>Subject</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="">Probability</td>
                        <td class="">Math</td>
                        <td>
                          <a href="" class="btn btn-primary btn-xs">read more</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="">Update</td>
                        <td>Physics</td>
                      </tr>

                    </tbody>
              </table>
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