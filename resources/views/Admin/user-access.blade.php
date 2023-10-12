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
                          <h2>Users Access Management</h2>
                        </div>
                        <!-- shearch -->
                        <div class="col-md-6 col-sm-6 text-right" style="display: none">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                          </div>
                        </div>
                        <!-- shearch -->
                      </div>

                    
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                              
                              <div class="card-box table-responsive">
                                <div >
                                  <div  >
                                    <p style="padding-top: 15px">
                                      You can change user access
                                    </p>
                                  </div>
                                </div>
                                
                                


                                
                                <div class="col-md-12 col-sm-12">
                                  <div class="x_panel">

                                      <div class="row " style="padding-top: 30px">
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User Edit
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User Delete
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked />Access Management                                              
                                            </label>
                                          </div>
                                        </div>

                                      </div>




                                      <div class="row " style="padding-top: 30px">
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> Add Users
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User Edit
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User Delete
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked />Access Management                                              
                                            </label>
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


              </div>

            
           

          </div>
        </div>
      </div>
    </div>

    @include('component/admin-footer')

	
  </body>

@endsection