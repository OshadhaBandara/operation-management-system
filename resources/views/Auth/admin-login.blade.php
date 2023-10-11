@extends('Layouts/admin-layout')

@section('Content')


<body class="login" style=" text-shadow: none; color: aliceblue">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form" >
          <section class="login_content">
            <form>
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator" style="padding-top: 15px">
                
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