
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
							<form action="index.php" method="post" id="form" onsubmit="return validate_all('results');">
								<table cellspacing="10">
									<tr><td>Login</td><td><input type="text" name="login" maxlength="25" id="login" onKeyUp="updatelength('login', 'login_length')"><br /><div id="login_length"></div> </td></tr>
									<tr><td>Password</td><td><input type="password" name="pass" maxlength="25" id="password" onKeyUp="updatelength('password', 'pass_length')"><div id="pass_result"></div><br /><div id="pass_length"></div></td></tr>
									<tr><td>Confirm Password</td><td><input type="password" name="cpass" maxlength="25" id="c_password"></td></tr>
									<tr><td>Gender</td><td><select name="gender"><option value="1">male</option><option value="0">female</option></select></td></tr>
									<tr><td>Email</td><td><input type="text" name="email" maxlength="50" id="email" onKeyUp="updatelength('email', 'email_length')"><br /><div id="email_length"></div></td></tr>
									<tr><td colspan="2"><input type="submit" name="submit" value="Register"></td></tr>
								</table>
								<h3 id="results"></h3>
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