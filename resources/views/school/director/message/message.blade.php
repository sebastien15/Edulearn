@extends('layouts.admin')
@section('content')
<div class="container-fluid page-body-wrapper">
      @include('school.includes._sidenav')
   <div class="main-panel">
     <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">      
              <div class="card">
                <div class="card-body" id="accordion">
                  <h4 class="card-title">All Message</h4>
                  <p class="card-description">
                    <a class="btn btn-success col-xs-12" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Compose a Message</a>
                  </p>
                  <div  class="collapse" id="collapseOne">
                       <div class="row "> 
                           <div class="col-md-6">                           	   
                           	   <div class="">
                           	   	<form>
                           	   	 <div class="form-group form-inline">
                                   <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked>Teachers</label>
                                   </div>
                                   <div class="form-check ml-2">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> Students </label>
                                   </div>
                                   <div class="form-check ml-2">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> Parents </label>
                                   </div>
                                   <div class="form-check ml-2">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> DoD </label>
                                   </div>
                                   <div class="form-check ml-2">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> DoS </label>
                                   </div>
                                 </div>
                           	   	 <div class="form-group">
                                   <label class=" ">Subject</label>
                                   <div class="">
                                     <input type="text" class="form-control form-control-sm " />
                                   </div>
                                 </div>
                           	   	 <div class="form-group">
                                   <label class=" ">Message</label>
                                   <div class="">
                                   	<textarea class="form-control" rows="4"></textarea>
                                   </div>
                                   
                                  </div>
                                  
                                 <button type="submit" class="btn btn-gradient-primary form-control">Send</button>
                                </form>
                               </div>
                           </div>
                        </div>
                  </div>
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
              </div>
            </div>
          </div>
        </div>
</div>
@endsection