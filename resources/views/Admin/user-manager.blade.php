@extends('Layouts/admin-layout')

@section('Content')



<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            @include('component/admin-sidebar')
            @include('component/admin-topbar')


              <div class="right_col" role="main">




                <div class="col-md-12 col-sm-12 "  style="padding-top: 30px">
                  <div class="x_panel" >
                    <div class="x_title">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <h2>Users</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 text-right">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                          </div>
                        </div>
                      </div>

                    
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                              <div class="card-box table-responsive">
                                <div class="row" style="padding: 15px">
                                  <div  class="col-md-6 col-sm-6 col-xs-6">
                                    <p class="text-muted font-13 m-b-30" style="padding-top: 15px">
                                      You can View Change, Edit and Delete Back Office Users
                                  </p>
                                  </div>
                                  <div class="col-md-6 col-sm-6 col-xs-6 text-right">

                                    <a href="#" class="btn btn-primary"><i class="fa fa-plus" style="padding-right: 6px"></i>   Create New Users</a>

                                  </div>

                                </div>
                                 
                              

                                  <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%; padding-bottom: 30px">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                      </tr>
                                    </thead>
              
              

                                  



                                  
                                    <tbody>


                                      @for ($i=0; $i<15; $i++)

                                        <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>          
                                            
                                            <!-- Split button -->
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-danger">Action</button>
                                              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">User Access Change</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" style="background-color:#2a3f54; color: rgb(255, 0, 0) ">Delete</a> 
                                              </div>
                                            </div>
                          
                                            <!-- Split button -->
                                          </td>
                                        </tr>
                                      
                                      @endfor


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
        </div>
      </div>
    </div>

    @include('component/admin-footer')

	
  </body>

@endsection