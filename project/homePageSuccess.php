<!DOCTYPE hrml>
<html>
	<head>
		<title>Login Suceessfull</title>
	</head>
	<style>
		body{
				font-family: Arial;
				font-size: 12px;
				color: #313030;
				background-color: #027fcf;
				background-repeat: repeat-x;
				background-position: left top;
				margin: 0px;
		}
		#nav{
			background-color:#222;
			width:1000px;
			margin-left:170px;
			
		}
		#nav_wrapper{
			width:900px;
			margin:0 auto;
			text-align:left;
		}
		#nav ul{
			list-style-type:none;
			padding:0;
			margin:0;
			position:relative;
		}
		#nav ul li{
			display: inline-block;
		}
		#nav ul li:hover{
			background-color:#333;
		}
		#nav ul li a,visited{
			color:#ccc;
			display:block;
			padding:10px;
			text-decoration:none;
		}
		#nav ul li a:hover{
			color:#ccc;
			text-decoration:none;
		}
		#nav ul li:hover ul{
			display:block;
		}
		#nav ul ul{
			display:none;
			position:absolute;
			background-color:#333;
			border:5px solid #222;
			border-top:0;
			margin-left:-5px;
		}
		#nav ul ul li{
			display:block;
		}
		#nav ul ul li a,visited{
			color:#ccc;
		}
		#nav ul ul li a:hover{
			color:#099;
		}
		#home{
			background-color:white;
			width:1000px;
			margin-left:170px;
		}
		#items{
			marign-left:25px;
			margin-right:25px;
			width:1000px;
			border:1px solid black;
			border-collapse: collapse;
		}
		table, td, th{
			
		}
	</style>
	<body>
		<div id="nav">
			<div id="nav_wrapper">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Invoice</a>
						<ul>
							<li><a href="#">Create Invoice</a></li>
							<li><a href="#">Manage Invoices</a></li>
						</ul>
					</li>
					<li><a href="#">Employee</a>
						<ul>
							<li><a href="#">Add Employee</a></li>
							<li><a href="#">Manage Employee</a></li>
						</ul>
					</li>
					<li><a href="#">Brand</a>
						<ul>
							<li><a href="#">Add Brand</a></li>
							<li><a href="#">Manage Brands</a></li>
						</ul>
					</li>
					<li><a href="#">Customer</a>
						<ul>
							<li><a href="#">Add Customer</a></li>
							<li><a href="#">Manage Customer</a></li>
						</ul>
					</li>
					<li><a href="#">Maintaince</a>
						<ul>
							<li><a href="#">Add Bills</a></li>
							<li><a href="#">Machinery costs</a></li>
						</ul>
					</li>
					<li style="float:Right"><a href="#">Logout</a></li>
				</ul>
			</div>
		</div>
		<div id="home">
			<h4 style="margin-left:100px;color:red;font-size:20px">Invoice </h4>
			
			<table id="toFromInv"style="margin-left:100px;width:980px">
				<tr>
					<td><img src="images/logo2.jpg"></td>
					<td style="font-size:12px">
						<p>Vyshanvi Rice Mill 9849232240</p>
						<p>chunduri1967@gmail.com</p>
					</td>
					<td>
						<table>
							<tr>
								<td>To,</td>
							</tr>
							<tr style="height:5px">
								
							</tr>
							<tr>
								<td><input style="width:250px"type="text" id="idCompanyName" name="companyName" placeholder="Company Name"></td>
							</tr>
							<tr style="height:5px">
								
							</tr>
							<tr>
								<td><input style="width:250px; height:80px"type="text" id="idCompanyAddress" name="companyAddress" placeholder="Company Address"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<br></br>
			<table id="items">
				<th>
					<td><input type="checkbox"></td>
					<td>Item No</td>
					<td>Item Name</td>
					<td>Quantity</td>
					<td>Price</td>
					<td>Value</td>
				</th>
			</table>
		</div>
		
	</body>
</html>