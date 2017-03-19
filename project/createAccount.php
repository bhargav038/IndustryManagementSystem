
<html>
	<head>
		<title>Create Account</title>
		<meta charset = "utf-8"/>
		<style>
			body
			{
				font-family: Arial;
				font-size: 12px;
				color: #313030;
				background-color: #027fcf;
				
				background-repeat: repeat-x;
				background-position: left top;
				margin: 0px;
			}
			
			.main-out
			{
				background-color : white;
				background-repeat : repeat-y;
				background-position : center top;			
				width : 1000px;
				float: center;
				margin-left: 200px;
				margin-right: 150px;
			}
			
			.registrationDiv
			{
				margin-left:15px;
				width: 950px;
			}
		</style>
		<script type="text/javascript" src="adminFormValidation.js"></script>
	</head>
	<body>
		<div class="main-out">
			<table class="header">
				<tr>
					<td style="width:300px; ";>
						<img src="images/homepage_Logo.jpg" style="margin-left: 30px">
					</td>
					<td >
						<h1 style = "margin-left:30px; margin-top: 50px;color: #1F618D;margin-bottom: 15px; font-family: Times New Roman; font-size:40px;"><span><center> Accounting System</center></span></h1>
					</td>
					<td style="width:200px; ">
						<a href="homePage.php"><img src="images/backbutton.jpg" style="float:right; height:50px; "></a>
					</td>
				</tr>
			</table>
			<hr/>
			<table class="registrationDiv">
				<tr>
					<td>
						<fieldset style="width:450px"><legend style="font-size:20px; color:red">Admin</legend>
							<form method="POST"  action="registrationAdmin.php"  enctype="multipart/form-data">
								<table style="margin-left:100px">
									<tr>
										<td>UserName*:</td>
										<td><input type="text" name="userName" id="idUsername"  placeholder="size should be 5 to 12"></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>First Name*:</td>
										<td><input type="text" name="firstName" id="idfirstName"  placeholder="only alphabets"></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>Last Name*:</td>
										<td><input type="text" name="lastName" id="idlastName"  placeholder="only alphabets"></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td >DOB*:</td>
										<td>
											<input type="text" name="month"  id="idMonth" size="1" placeholder="MM"> /
											<input type="text" name="day" id="idDate" size="1" placeholder="DD"> /
											<input type="text" name="year" id="idYear" size="4" placeholder="YYYY">
										</td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>Password*:</td>
										<td><input type="text" name="password"  id="idPassword"></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>Confirm Password*:</td>
										<td><input type="text" name="confirmPassword"  id="idConfirmPassword"></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td >TIN*:</td>
										<td><input type="text" name="tin" id="idTin"  placeholder="Must be known"></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td >Mobile Number*:</td>
										<td><input type="number" name="mobilenumber"  id="idMobileNumber" placeholder="10 numbers only"></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td >Gender*:</td>
										<td>
											<input type="radio" name="gender" id="idMaleGender" value="male">Male
											<input type="radio" name="gender" id="idFemaleGender"value="female">Female
											
										</td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td >Security Question*:</td>
							
										<td>
											<select name='securityQuestion' id="dropDown">
												<option selected="" value="Nothing choosen" id="idDefault" >Choose Question:</option>
												<option name="Birth" id="idBirth" value="birthPlace" >What is the Birth Place</option>
												<option name="LicenceNumber" value="Licence"  id="idLicenceNumber">What is the Licence Number</option>
											</select>
										</td>		
										
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td >Answer*:</td>
										<td><input type="text"  name="answer"  id="idAnswer"></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td ></td>
										<td><input type="submit" id="idSubmit" name="submit" onClick="formValidation()">&nbsp;&nbsp;
											<input type="reset" id="idReset" name="reset">
										</td>
									</tr>
									
								</table>
							</form>
						</fieldset>
					</td>
					<td>
					<fieldset style="width:450px"><legend style="font-size:20px; color:red">Employee</legend>
						
						<form method="POST" action="registrationEmployee.php" >
							<table>
								<tr>
									<td>UserName:*</td>
									<td><input type="text" id="idEUserName" name= "EuserName"></td>
								</tr>
								<tr style="height:10px">
										<td></td>
										<td></td>
								</tr>
								<tr>
									<td>EmployeeID:*</td>
									<td><input type="text" id="idEEmployeeID" name= "EemployeeID"></td>
								</tr>
								<tr style="height:10px">
										<td></td>
										<td></td>
								</tr>
								<tr>
									<td>Security Question:*</td>
									<td>
											<select name="EsecurityQuestion" id="EdropDown">Security question:
												<option selected="" value="Default" id="idEDefault">Choose Question:</option>
												<option name="maidenName" id="idEMaidenName">What is the your mother Maiden Name </option>
												<option name="vechicleNo" id="idEVechicleNo">What is the Vechile Number</option>
											</select>
									</td>		
								</tr>
								<tr style="height:10px">
										<td></td>
										<td></td>
								</tr>
								<tr>
									<td>Answer:*</td>
									<td><input type="text" name="Eanswer" id="idEAnswer"></td>
								</tr>
								<tr style="height:10px">
										<td></td>
										<td></td>
								</tr>
								<tr>
										<td ></td>
										<td><input type="submit" id="idESubmit" name="Esubmit">&nbsp;&nbsp;
											<input type="reset" id="idEReset" name="Ereset">
										</td>
								</tr>
								<tr style="height:10px">
										<td></td>
										<td></td>
								</tr>
							</table>
						</form>
					</fieldset>
					</td>
				</tr>
			</table>
			
			<hr/>
			<div class="bottom" style="margin-left: 400px; color:#BA4A00;">
							<h1>Rice Mill (Pvt.) Ltd</h1>
							
							<h3 style="color:#99A3A4;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Increasing Productivity</h3>
			</div>
		</div>					
	</body>
</html>