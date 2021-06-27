
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
  <div class="container" id="container">
  	<div class="form-container sign-up-container">
  		<form action="reg.php" method = "POST">
  			<h1>Create Account</h1>
  			<div class="social-container">
          <i class="social-icon fa fa-facebook-square"></i>
          <i class="social-icon fa fa-twitter"></i>
          <i class="social-icon fa fa-instagram"></i>
  			</div>
  			<span>or use your email for registration</span>
  			<input type="text" name = "name" required placeholder="Name" />
  			<input type="email" name = "email" required placeholder="Email" />
  			<input type="password" name = "password" required placeholder="Password" />
  	   	<button type="submit" name="sign up" class="btn btn-primary">Sign up</button>
  		</form>
  	</div>
        <!--<?php
        $conn = mysqli_connect('localhost','root','','login');
        if(isset($_POST['login-btn'])){
          $email = $_POST['email'];
          $password = $_POST['password'];
          $select = "SELECT * FROM users WHERE email = '$email'";
       $run = mysqli_query($conn,$select);
    	if(mysqli_num_rows($run) > 0){
       $row_users = mysqli_fetch_array($run);
          $db_email = $row_users['email'];
          $db_password = $row_users['password'];
      if($email == $db_email && $password == $db_password){
        echo "<script>window.open('art.php','_self');</script>";
      }else{
        echo "Email or Password Wrong!";
      }

    	}else{
    		echo "No Email Found";
    	}


        }

         ?>-->
  	<div class="form-container sign-in-container">
  		<form action="l.php" method = "POST">
  			<h1>Sign in</h1>
  			<div class="social-container">
          <i class="social-icon fa fa-facebook-square"></i>
          <i class="social-icon fa fa-twitter"></i>
          <i class="social-icon fa fa-instagram"></i>
  			</div>
        <div class="form-group">
          <!--  <input type="text" name="email" class="form-control" placeholder="Username" required="required">-->
          <input type="email" name = "email" required placeholder="Email" />
        </div>
        <div class="form-group">
            <input type="password"  name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
          <br>
            	<button type="submit" name="login-btn" class="btn btn-primary">Sign up</button>
        </div>
  		</form>
    <!--  <?php
      $conn = mysqli_connect('localhost','root','','login');
      if(isset($_POST['login-btn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $select = "SELECT * FROM users WHERE email = '$email'";
     $run = mysqli_query($conn,$select);
    if(mysqli_num_rows($run) > 0){
     $row_users = mysqli_fetch_array($run);
        $db_email = $row_users['email'];
        $db_password = $row_users['password'];
    if($email == $db_email && $password == $db_password){
      echo "<script>window.open('art.php','_self');</script>";
    }else{
      echo "Email or Password Wrong!";
    }

    }else{
      echo "No Email Found";
    }


      }

       ?>-->
    </div>
  	<div class="overlay-container">
  		<div class="overlay">
  			<div class="overlay-panel overlay-left">
  				<h1>Welcome Back!</h1>
  				<p>To keep connected with us please login with your personal info</p>
  				<button class="ghost" id="signIn">Sign In</button>
  			</div>
  			<div class="overlay-panel overlay-right">
  				<h1>Hello, Friend!</h1>
  				<p>Enter your personal details and start journey with us</p>
  				<button class="ghost" id="signUp">Sign Up</button>
  			</div>
  		</div>
  	</div>
  </div>

  <footer>
  </footer>
    <script type="text/javascript" src="index.js"></script>
  </body>
  </html>
