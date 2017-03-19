	<?php 
		$username = isset($_POST['userName'])	? $_POST['userName']:'';
		$firstname = isset($_POST['firstName'])	? $_POST['firstName']:'';
		$lastname = isset($_POST['lastName'])	? $_POST['lastName']:'';
		$dob = isset($_POST['date'])	? $_POST['date']:'';
		$password = isset($_POST['password'])	? $_POST['password']:'';
		$confirmpassword = isset($_POST['confirmPassword'])	? $_POST['confirmPassword']:'';
		$tin = isset($_POST['tin'])	? $_POST['tin']:'';
		$mobilenumber = isset($_POST['mobilenumber'])	? $_POST['mobilenumber']:'';
		$gender = isset($_POST['gender']) ? $_POST['gender']:'' ;
		
		$securityQuestion = isset($_POST['securityQuestion'])	? $_POST['securityQuestion']:'';
		$answer = isset($_POST['answer'])	? $_POST['answer']:'';
		
		if(isset($_POST['submit'])){
				$con = mysqli_connect('localhost','root','');
				if(!$con)
				{
					die("Cannot connect". mysqli_error());
					
				}//end if

				mysqli_select_db( $con, 'project');
				
				$sqlCheck = "SELECT * FROM project.adminlogin WHERE USERNAME = '$username';";
				
				$returnCheck = mysqli_query($con, $sqlCheck);
				
				$row = mysqli_fetch_assoc($returnCheck);
				
				$dbUserName = $row['USERNAME'];
				
				if($username == $dbUserName)
				{
					echo "USERNAME already exists. Please select another username..";
				}
				
				else
				{
					$sqlTIN = "SELECT * FROM project.companydetails WHERE TIN = '$tin';";
					$returnTIN = mysqli_query($con, $sqlTIN);
					$rowTIN = mysqli_fetch_assoc($returnTIN);
					$dbTIN = $rowTIN['TIN'];
					if($dbTIN != $tin)
					{
						echo "Entered TIN number doesnot exists.Please Know the tin number";
					}
					
					else{
						
						
						$sqlINSERT = "INSERT INTO project.adminregistration (USERNAME, FIRSTNAME, LASTNAME, DOB, PASSWORD, CONFIRM_PASSWORD, TIN, MOBILE_NUMBER, GENDER, SECURITY_QUESTION, ANSWER)
								  VALUES ('$username','$firstname','$lastname','$dob','$password','$confirmpassword','$tin','$mobilenumber','$gender','$securityQuestion','$answer')";
										
						$returnINSERT = mysqli_query($con, $sqlINSERT);
						
							if(!$returnINSERT)
							{
								die("Error in the insert query:".mysqli_error($con));
							}
							
							else
							{
							echo "ADMIN successfully registered";
							
							}//end if else
								
						}
												
						mysqli_close($con);	
						
					}
				
		}
	?>