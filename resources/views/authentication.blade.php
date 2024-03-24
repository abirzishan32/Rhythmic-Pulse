<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link href="{{ asset('CSS/auth.css') }}" rel="stylesheet">
   </head>
<body>

<div class="welcomevid">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('Media/Welcome.mp4') }}" type="video/mp4">
          </video>
    </div>

    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="#">Login now</a></h3>
      </div>
    </form>

   

  
</body>
</html>