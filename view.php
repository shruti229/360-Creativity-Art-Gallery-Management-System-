<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIEW PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Art Management System</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown">Profile Details</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="view.php">View Profile</a>
							<a class="dropdown-item" href="index.php">Cart</a>
						</div>
					</li>
					<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>

<div class="container">
  <br>
  <h2>VIEW USER</h2>
  <?php
    $conn = mysqli_connect('localhost','root','','login');
    if(isset($_GET['del'])){
      $del_Id = $_GET['del'];
      $delete = "DELETE FROM users WHERE Id='$del_Id'";
      $run_delete = mysqli_query($conn,$delete);
      if($run_delete === true){
        echo "Record has been deleted successfully";
      }else {
        echo "Failed Try Again";
      }
    }
   ?>
  <br>
  <br>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conn = mysqli_connect('localhost','root','','login');
      $select = "SELECT * FROM users";
      $run = mysqli_query($conn,$select);
      while ($row_users = mysqli_fetch_array($run)){
      $users_id = $row_users['Id'];
      $users_name = $row_users['name'];
      $users_email = $row_users['email'];
      $users_password = $row_users['password'];
       ?>
      <tr>
        <td><?php echo $users_id;?></td>
        <td><?php echo $users_name;?></td>
        <td><?php echo $users_email;?></td>
        <td><?php echo $users_password;?></td>
        <td><a class="btn btn-danger" href="view.php?del=<?php echo $users_id;?>">Delete</a></td>
        <td><a class="btn btn-success" href="edit.php?edit=<?php echo $users_id;?>">Edit</a></td>
      </tr>
    <?php } ?>
    </tbody>

  </table>
</div>

</body>
</html>
