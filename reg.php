<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"login");
	$query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "login_signup.php";
</script>
