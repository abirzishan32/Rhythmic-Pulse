<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link href="{{ asset('CSS/auth.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
<body>

<div class="welcomevid">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('Media/Welcome.mp4') }}" type="video/mp4">
          </video>
    </div>


        <h2 class="text-white text-center text-md-right">New to Rhythmic Pulse? Register Now! </h2>

    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Enter your username" >
      </div>

      <div class="input-box">
        <input type="text" placeholder="Enter your email" >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" >
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? 
            <button class="loginLink btn-outline-primary mb-3 btn-lg"> Login </button>
        </h3>
      </div>
    </form>


    <div class="login-form" id="loginForm">
      <h2 class="text-black text-center">  Login</h2>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your username" >
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter your password" >
        </div>
        <div class="policy">
          <input type="checkbox">
          <h3>Remember me</h3>
        </div>
        <div class="input-box button">
          <input type="Submit" value="Login">
        </div>
        <div class="text">
          <h3>Don't have an account? 
              <button class="registerLink btn-outline-primary mb-3 btn-lg"> Register Now </button>
          </h3>
        </div>
      </form>


   

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".loginLink").click(function(){
        $("#loginForm").show();
        });
         
        $(".registerLink").click(function(){
        $("#loginForm").hide();
        $("#welcomevid").show();
        });
    });
</script>
  

</body>
</html>