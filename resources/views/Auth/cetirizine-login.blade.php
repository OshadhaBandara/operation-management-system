@extends('Layouts/admin-layout')

@section('Content')



<body class="login" style=" text-shadow: none; color: aliceblue">

        <style>

          h1,p,a,body{

            background-color: #005555
          }
          .login_content form div a {

            background-color:#005555
          }

          .login_content form div a:hover {
          background-color: #3e9e9e; /* Change background color on hover */
          color: azure;
          }
          .separator{
            background-color: #005555
          }
          
        </style>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form" >
          <section class="login_content">
            <form>
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="NIC Numbe" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator" style="padding-top: 15px; background-color:  #005555;">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>
                    <img src="{{asset('assets/images/Dice_Bridge_logo.png')}}"  style="padding-right: 15px">

                     DiviBredge</h1>
                  <p>©2016 All Rights Reserved by Heshan. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Sing Up</h1>
              <div>
                <input type="text" class="form-control" placeholder="NIC Number" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="tel" class="form-control" placeholder="Phone Number" required="" inputmode="none"/>
              </div>
                <br/>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>

              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                    <div>
                        <h1>
                        <img src="{{asset('assets/images/Dice_Bridge_logo.png')}}"  style="padding-right: 15px">
  
                             DiviBredge</h1>
                             
                        <p>©2016 All Rights Reserved by Heshan. Privacy and Terms</p>
                  </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>



@endsection