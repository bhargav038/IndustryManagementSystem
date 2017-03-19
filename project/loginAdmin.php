<?php
	$username = isset($_POST['userName']) ? $_POST['userName'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	
	if(isset($_POST['submit'])){
		
		$con = mysqli_connect('localhost','root','');
		if(!$con)
		{
			die("Cannot connect". mysqli_error());
					
		}//end if
		
		mysqli_select_db( $con, 'project');
		$sqlCheck = "SELECT * FROM project.adminregistration WHERE USERNAME = '$username';";		
		$returnCheck = mysqli_query($con, $sqlCheck);		
		$row = mysqli_fetch_assoc($returnCheck);		
		$dbUserName = $row['USERNAME'];
		$dbPassword = $row['PASSWORD'];
		if($username == $dbUserName && $dbPassword == $dbPassword){
			echo "Entered username and password are correct";
			header("refresh:1; url=homePageSuccess.php");
		}
		else
		{
			echo "Invalid credentials";
			header("refresh:1; url= login.php");
		}
		
		
	}
?>