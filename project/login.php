
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
			
			.loginDiv
			{
				margin-left:100px;
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
			<table class="loginDiv">
				<tr>
					<td>
						<fieldset style="width:300px"><legend style="font-size:20px; color:red">Admin</legend>
							<form method="POST"  action="loginAdmin.php"  enctype="multipart/form-data">
								<table style="margin-left:10px">
									<tr>
										<td>UserName*:</td>
										<td><input type="text" name="userName" id="idUsername"  ></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>Password*:</td>
										<td><input type="text" name="password" id="idPassword"  ></td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td ></td>
										<td><input type="submit" id="idSubmit" name="submit" >&nbsp;&nbsp;
											<input type="reset" id="idReset" name="reset">
										</td>
									</tr>
									<tr style="height:10px">
										<td></td>
										<td></td>
									</tr>
									
									<tr>
										<td></td>
										<td>
										<a href="forgotPasswordAdmin.php">Forgot Password</a>
										</td>
									</tr>
								</table>
							</form>
						</fieldset>
					</td>
					<td>
					<fieldset style="width:300px"><legend style="font-size:20px; color:red">Employee</legend>
						
						<form method="POST" action="loginEmployee.php" >
							<table>
								<tr>
									<td>EmployeeID:*</td>
									<td><input type="text" id="idEmployeeID" name= "EemployeeID"></td>
								</tr>
								<tr style="height:10px">
										<td></td>
										<td></td>
								</tr>
								<tr>
									<td>Password:*</td>
									<td><input type="text" id="idEPassword" name= "Epassword"></td>
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
								<tr style="height:10px">
										<td></td>
										<td></td>
								</tr>
									
								<tr>
										<td></td>
										<td>
										<a href="forgotPasswordEmployee.php">Forgot Password</a>
										</td>
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