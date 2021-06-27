<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style1.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<div class="login-box">
  <h2>Update</h2>
  <?php
    $conn = mysqli_connect('localhost','root','','login');
    if(isset($_GET['edit'])){
      $edit_Id = $_GET['edit'];
    $select = "SELECT * FROM users WHERE Id = '$edit_Id'";
    $run = mysqli_query($conn,$select);
    $row_users = mysqli_fetch_array($run);
    $users_name = $row_users['name'];
    $users_email = $row_users['email'];
    $users_password = $row_users['password'];
    }
   ?>
  <form action="" method="POST">
    <div class="user-box">
      <input type="text" name="name" required="" value = "<?php echo $users_name;?>">
      <label>Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required=""value = "<?php echo $users_email;?>">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="text" name="password" required=""value = "<?php echo $users_password;?>">
      <label>Password</label>
    </div>
<input  type="submit" name = "update"class="btn btn-primary" />
  </form>
  <?php
  $conn = mysqli_connect('localhost','root','','login');
  if(isset($_POST['update'])){
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $update = "UPDATE users SET name='$user_name',email='$user_email',password='$user_password'WHERE Id='$edit_Id'";
    $run_update = mysqli_query($conn,$update);
    if($run_update === true){
      echo "Data has been updated";
    }else{
      echo "Failed to update";
    }
  }
   ?>
   <br>
   <br>
   <a class="btn btn-primary" href="view.php">View User</a>
</div>
