
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
        <!-- bootstrap-daterangepicker -->
        <link href="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <!-- bootstrap-datetimepicker -->
        <link href="{{asset('assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
        <!-- Ion.RangeSlider -->
        <link href="{{asset('assets/vendors/normalize-css/normalize.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
        <!-- Bootstrap Colorpicker -->
        <link href="{{asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">

        
        <!-- Custom Theme Style   -->
        <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet">


        <style>


          /* CSS for responsive date and time picker */
          .reservation-form .calendar {
            max-width: 100%; /* Make it responsive */
            margin: 0 auto; /* Center it horizontally */
            top: 50px !important; /* Adjust the top position as needed */
          }

          .reservation-form .daterangepicker .ranges {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
          }

          .reservation-form .daterangepicker .ranges ul li {
            width: 100%; /* Make each range button full width */
          }

          .reservation-form .daterangepicker .applyBtn {
            width: 100%; /* Make the "Apply" button full width */
          }

          /* If you need to adjust the top position of the date and time picker */
          @media (max-width: 768px) {
            .reservation-form .calendar {
              top: 100px !important; /* Adjust for smaller screens */
            }
          }
        </style>
        
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

                      <div class="col-sm-12">
                              
                        <div class="card-box table-responsive">

                          <div class="col-md-12 col-sm-12" style="padding-top: 30px">
                            <div class="x_panel">


                                    
                              <div class="well" style="overflow: auto">
                                  


                              

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



              <!-- Button trigger modal -->
              <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
              </a>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 600px;">
                  <div class="modal-content" style="margin-top: -200px">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- Date and Time Picker -->
                      <div>
                        Date and Time
                        <form class="reservation-form"> <!-- Give it a class for styling -->
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                  <input type="text" name="reservation-time" id="reservation-time" class="form-control" value="01/01/2016 - 01/25/2016" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                      <!-- End of Date and Time Picker -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                    </div>
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
   <!-- bootstrap-daterangepicker -->
   <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
   <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="{{asset('assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <!-- Ion.RangeSlider -->
    <script src="{{asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="{{asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <!-- jquery.inputmask -->
    <script src="{{asset('assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <!-- jQuery Knob -->
    <script src="{{asset('assets/vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- Cropper -->
    <script src="{{asset('assets/')}}"></script>

    

        <!-- Custom Theme Scripts -->
        <script src="{{asset('assets/js/gen-master/custom.min.js')}}"></script>


        <script>


          
        // Attach an event listener to the input field
        $('#reservation-time').on('apply.daterangepicker', function (ev, picker) {
            // Get the selected start and end dates
            var startDate = picker.startDate.format('MM/DD/YYYY h:mm A');
            var endDate = picker.endDate.format('MM/DD/YYYY h:mm A');

            // You can now use startDate and endDate as needed
            console.log('Start Date:', startDate);
            console.log('End Date:', endDate);
        });


        </script>

    </body>
</html>

