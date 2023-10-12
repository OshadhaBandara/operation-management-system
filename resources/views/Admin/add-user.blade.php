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
                    <form class="form-label-left input_mask">
                    <div class="x_title">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <h2>Create User</h2>
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

                                <div class="col-md-12 col-sm-12" style="padding-top: 30px">
                                  <div class="x_panel">

                                    <div class="x_content">
                                      <br />
                                     

                                       
                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="first-name" placeholder="ID" disabled>
                                            <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                                          </div>
                                          
                    
                                        <div class="x_content">
                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="first-name" placeholder="First Name">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                          </div>
                      
                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left" id="last-name" placeholder="Last Name">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                          </div>
                      
                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="NIC">
                                            <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                                          </div>
                      
                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                          </div>

                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Phone">
                                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                          </div>

                                          
                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Job Roll">
                                            <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                                          </div>
                      
                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Address">
                                            <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                          </div>

                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Duty District">
                                            <span class="fa fa-university form-control-feedback left" aria-hidden="true"></span>
                                          </div>

                                          <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Duty Divitions">
                                            <span class="fa fa-sort form-control-feedback left" aria-hidden="true"></span>
                                          </div>


                                       </div>

                     
                                    </div>

                                  </div>
                                </div>

                               </div>

                            </div>
                          </div>
                      </div>



                      <div class="col-md-12 col-sm-12" style="padding-top: 30px">
                        <div class="x_panel">

                          <div class="x_content">
                            <br />        

                              <div class="row">
                                <h2>Access Management</h2>
                              </div>
                              <div class="row">



                              </div>



                          </div>

                        </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9  offset-md-3">
                                     
                  <button type="button" class="btn btn-primary">Back</button>
                 
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>


              </div>

            
           

          </div>

        </form>
        </div>
      </div>
    </div>

    @include('component/admin-footer')

	
  </body>

@endsection