@extends('Layouts/profile-layout')

@section('Content')


<div class="container-fluid" style="background-color: #005555">
    <div >


      @include('component.profile-nav')

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3 style="color: aliceblue">User Profile</h3>
           
          </div>
          
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 " >
              <div class="x_panel"  >
               {{--  @dd(session()->all()) --}}
                                  
                <div class="clearfix"></div>
                <div class="x_content" >
                  <div class="col-md-3 col-sm-3  profile_left">
                    <div class="profile_img">
                      <div id="crop-avatar">
                        <!-- Current avatar -->
             
                        <img class="img-responsive avatar-view" src="{{ session('cprofile_image') ? asset( session('cprofile_image')) : asset('assets/images/img.jpg') }}" alt="Profile Image">
                        
                      </div>
                    </div>
                    <br />

                    <form id="imageForm" action="profile-image-store" method="POST" enctype="multipart/form-data">
                      <label for="imageUpload" class="btn btn-success" style="color: aliceblue">
                          <i class="fa fa-edit m-right-xs" style="margin-right: 10px"></i>Change Image
                      </label>
                      <input type="file" id="imageUpload" name="image" style="display: none">
                      @csrf <!-- Include the CSRF token -->
                  </form>
                  
                  <script>
                      // Add an event listener for the file input
                      document.getElementById("imageUpload").addEventListener("change", function() {
                          document.getElementById("imageForm").submit(); // Submit the form when an image is selected
                      });
                  </script>
                  
                  
                  
                    <br />
                    <h3>{{session('cfName') . '  ' .  session('clName')}} </h3>

                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> {{session('caddress')}}
                      </li>

                      <li>
                        <i class="fa fa-briefcase user-profile-icon"></i> {{session('cdistrict')}}
                      </li>

                      <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i>{{session('cdivision')}}
                        
                      </li>
                      <li>
                        <i class="fa fa-briefcase user-profile-icon"></i> {{session('cnic')}}
                      </li>
                    </ul>

                  </div>
                  <div class="col-md-9 col-sm-9 ">

              

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profile Info</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Service Histoy</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pending Service</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">


                          @include('component.citizen-profile-info')


                        </div>


                            
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                          <!-- start user projects -->
                          <table class="data table table-striped no-margin">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Client Company</th>
                                <th class="hidden-phone">Hours Spent</th>
                                <th>Contribution</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>New Company Takeover Review</td>
                                <td>Deveint Inc</td>
                                <td class="hidden-phone">18</td>
                                <td class="vertical-align-mid">
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>New Partner Contracts Consultanci</td>
                                <td>Deveint Inc</td>
                                <td class="hidden-phone">13</td>
                                <td class="vertical-align-mid">
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Partners and Inverstors report</td>
                                <td>Deveint Inc</td>
                                <td class="hidden-phone">30</td>
                                <td class="vertical-align-mid">
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>New Company Takeover Review</td>
                                <td>Deveint Inc</td>
                                <td class="hidden-phone">28</td>
                                <td class="vertical-align-mid">
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                            photo booth letterpress, commodo enim craft beer mlkshk </p>
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
      <!-- /page content -->


@endsection