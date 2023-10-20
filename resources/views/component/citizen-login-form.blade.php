<div class="animate form login_form"  style="width: 100%;" >
    <section class="login_content">
      <div class="container wr-signIn py-5">
        
      <form action="login_Citizen" method="POST">
        @csrf
        <h1>Login</h1>
        <div>
          <input type="text" class="form-control" name="nic" placeholder="NIC Numbe" required="" />
        </div>
        <div>
          <input type="password" class="form-control" name="password" placeholder="Password" required="" />
        </div>
        <div>
          <button style="color: aliceblue" class="btn btn-default submit" >Log in</button>
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