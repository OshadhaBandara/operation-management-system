
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>



        
        <!-- Bootstrap -->
        <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{asset('assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
	      <link href="{{asset('assets/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">      
        <!-- Select2 -->
        <link href="{{asset('assets/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
        <!-- Switchery -->
        <link href="{{asset('assets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
        <!-- starrr -->
        <link href="{{asset('assets/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="{{asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        
        <!-- Custom Theme Style   -->
        <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet">
        
  </head>


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






       
    <!-- jQuery -->
    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('assets/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="{{asset('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{asset('assets/vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('assets/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src="{{asset('assets/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src="{{asset('assets/vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{asset('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- starrr -->
    <script src="{{asset('assets/vendors/starrr/dist/starrr.js')}}"></script>
    


        <!-- Custom Theme Scripts -->
        <script src="{{asset('assets/js/gen-master/custom.min.js')}}"></script>

    </body>
</html>

