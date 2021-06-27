<?php
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
//echo "No Email Found";
?>
<script type="text/javascript">
	alert("Invalid password or email id")
	window.location.href = "login_signup.php";
</script><?php
}


}

 ?>
