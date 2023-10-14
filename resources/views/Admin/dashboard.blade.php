
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
        <!-- bootstrap-progressbar -->
        <link href="{{asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{asset('assets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

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
  
  
        
  
              <!-- page content -->
              <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row" style="display: inline-block;" >
            <div class="tile_count">
              <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                <div class="count">2500</div>
                <span class="count_bottom"><i class="green">4% </i> From last Week</span>
              </div>
              <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                <div class="count">123.50</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
              </div>
              <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                <div class="count green">2,500</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
              </div>
              <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                <div class="count">4,567</div>
                <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
              </div>
              <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                <div class="count">2,315</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
              </div>
              <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
              </div>
            </div>
              </div>
            <!-- /top tiles -->
  
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
  
              <!-- Graph -->
              </div>
            </div>
            <br />
  
            <div class="row">
  
  
  
              <div class="col-md-4 col-sm-4 ">
                  <div class="x_panel tile fixed_height_320 overflow_hidden">
                    <div class="x_title">
                      <h2>Device Usage</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <table class="" style="width:100%">
                        <tr>
                          <th style="width:37%;">
                            <p>Top 5</p>
                          </th>
                          <th>
                            <div class="col-lg-7 col-md-7 col-sm-7 ">
                              <p class="">Device</p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 ">
                              <p class="">Progress</p>
                            </div>
                          </th>
                        </tr>
                        <tr>
                          <td>
                            <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                          </td>
                          <td>
                            <table class="tile_info">
                              <tr>
                                <td>
                                  <p><i class="fa fa-square blue"></i>IOS </p>
                                </td>
                                <td>30%</td>
                              </tr>
                              <tr>
                                <td>
                                  <p><i class="fa fa-square green"></i>Android </p>
                                </td>
                                <td>10%</td>
                              </tr>
                              <tr>
                                <td>
                                  <p><i class="fa fa-square purple"></i>Blackberry </p>
                                </td>
                                <td>20%</td>
                              </tr>
                              <tr>
                                <td>
                                  <p><i class="fa fa-square aero"></i>Symbian </p>
                                </td>
                                <td>15%</td>
                              </tr>
                              <tr>
                                <td>
                                  <p><i class="fa fa-square red"></i>Others </p>
                                </td>
                                <td>30%</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
  
  
  
              <div class="col-md-8 col-sm-8 ">
  
                   <!-- App Versions -->
  
  
                   <div class="x_panel">
                      <div class="x_title">
                        <h2>Daily active users <small>Sessions</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="temperature"><b>Monday</b>, 07:30 AM
                              <span>F</span>
                              <span><b>C</b></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="weather-icon">
                              <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="weather-text">
                              <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="weather-text pull-right">
                            <h3 class="degrees">23</h3>
                          </div>
                        </div>
  
                        <div class="clearfix"></div>
  
                        <div class="row weather-days">
                          <div class="col-sm-2">
                            <div class="daily-weather">
                              <h2 class="day">Mon</h2>
                              <h3 class="degrees">25</h3>
                              <canvas id="clear-day" width="32" height="32"></canvas>
                              <h5>15 <i>km/h</i></h5>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="daily-weather">
                              <h2 class="day">Tue</h2>
                              <h3 class="degrees">25</h3>
                              <canvas height="32" width="32" id="rain"></canvas>
                              <h5>12 <i>km/h</i></h5>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="daily-weather">
                              <h2 class="day">Wed</h2>
                              <h3 class="degrees">27</h3>
                              <canvas height="32" width="32" id="snow"></canvas>
                              <h5>14 <i>km/h</i></h5>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="daily-weather">
                              <h2 class="day">Thu</h2>
                              <h3 class="degrees">28</h3>
                              <canvas height="32" width="32" id="sleet"></canvas>
                              <h5>15 <i>km/h</i></h5>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="daily-weather">
                              <h2 class="day">Fri</h2>
                              <h3 class="degrees">28</h3>
                              <canvas height="32" width="32" id="wind"></canvas>
                              <h5>11 <i>km/h</i></h5>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="daily-weather">
                              <h2 class="day">Sat</h2>
                              <h3 class="degrees">26</h3>
                              <canvas height="32" width="32" id="cloudy"></canvas>
                              <h5>10 <i>km/h</i></h5>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
  
              </div>
  
             
  
   <!--
              <div class="col-md-4 col-sm-4 ">
  
                   Quick Settings 
  
              </div>
  -->
            </div>
  
  
            <div class="row">
              <div class="col-md-4 col-sm-4 ">
  
                    <!-- Recent Activities -->
  
              </div>
  
  
              <div class="col-md-8 col-sm-8 ">
  
  
  
                <div class="row">
  
                  <div class="col-md-12 col-sm-12 ">
  
                      <!-- Recent Activities -->
  
  
                  </div>
  
                </div>
                <div class="row">
  
  
                 
                  <div class="col-md-6 col-sm-6 ">
                       <!-- Start to do list -->
  
                  </div>
                  <!-- End to do list -->
                  
                  
                  <div class="col-md-6 col-sm-6 ">
                      <!-- start of weather widget -->
  
  
                  </div>
                  <!-- end of weather widget -->
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->
  
         
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
    <!-- Chart.js -->
    <script src="{{asset('assets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('assets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
   <!-- iCheck -->
    <script src="{{asset('assets/vendors/iCheck/icheck.min.js')}}"></script>
      <!-- Skycons -->
    <script src="{{asset('assets/vendors/skycons/skycons.js')}}"></script>

      <!-- Flot -->
    <script src="{{asset('assets/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('assets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('assets/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('assets/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{asset('assets/js/gen-master/custom.min.js')}}"></script>

    </body>
</html>



