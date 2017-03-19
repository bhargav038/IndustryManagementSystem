
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="invoice system, php invoice script, invoice script, pro invoice maker, free php invoice/billing script, php Invoice software, php invoice generator script, invoice script open source, invoice generator php script, invoice script in php, javascript invoice script, invoice maker php script, php invoice script tutorial">
    <meta name="keywords" content="invoice system, php invoice script, invoice script, pro invoice maker, free php invoice/billing script, php Invoice software, php invoice generator script, invoice script open source, invoice generator php script, invoice script in php, javascript invoice script, invoice maker php script, php invoice script tutorial">
	<meta name="author" content="https://plus.google.com/+MuniAyothi/">
    <title>PHP Invoice System </title>
    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css'>
    
    
    <link rel="stylesheet" href="css/jquery-ui-custom.css"/>
	<link rel="stylesheet" href="css/ui.jqgrid.css"/>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="css/datepicker.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
   
     
  	<!-- Script -->
    <script src="js/jquery.min.js"></script>
    <script src="js/wayfinder.js" ></script>
  
  
	<script src="js/jquery-ui-custom.min.js"></script>
	<script src='js/grid.locale-en.js'></script>
	<script src='js/jquery.jqGrid.min.js'></script>
	<script src="js/jquery.validate.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
    
    <script>
		$(document).ready(function() {
			jQuery('.load-animate').waypoint({
				triggerOnce: true,
				offset: '80%',
				handler: function() {
					jQuery(this).addClass('animated fadeInUp');
				}
			});
		});
	</script>
  </head>
 <body>
    <!-- Static navbar -->
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Smart Invoice System</a>
			</div>
						<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Hello 
							sanjeev							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu account-menu">
							<li> <a href="account.php"> <i class="fa fa-user"></i> My Account</a> </li>
							<li class="divider"></li>
							<li style="background: #e67e22; color:#fff"> <a class="logout" href="logout.php"> <i class="fa fa-power-off"></i> Signout</a> </li>
						</ul>
					</li>
				</ul>
							</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<div class="container-fluid">
	<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 sidebar">
	<ul class="nav nav-sidebar">
		<!--<li ><a href="dashboard.php"> <i class="fa fa-tachometer"></i>Dashboard </a></li> --->
		
		<li > <a href="invoice.php"> <i class="fa fa-edit"></i>Create Invoice </a></li>
		<li class="line"></li>
		<li class='active'> <a href="manage-client.php"> <i class="fa fa-archive"></i> Manage Client </a></li>
		<li > <a href="add-client.php"> <i class="fa fa-user-plus"></i> Add Client </a></li>
		<li class="line"></li>

			</ul>
</div>
	<div class="col-xs-9 col-sm-10 col-md-10 col-lg-10 col-xs-offset-3 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 main">
		
		<h1 class="page-header">Manage Clients <a href="add-client.php" class="btn btn-success pull-right"> <i class="fa fa-edit"> </i>Add New Client</a></h1>
		





<div id="error_message_container" class="message_error message_div1" style="margin-bottom: 10px; display: none;">
	<p class="text-center" id="error_message"> Sample Error Message  </p>
</div>

<div id="success_message_container" class="message_success message_div1" style="margin-bottom: 10px; display: none;">
	<p class="text-center" id="success_message"> Sample Success Message </p>
</div>

<script>
	INVOICE_DELETE_SUCCESS = 'Invoice deleted successfully.';
	INVOICE_DELETE_FAIL = 'Invoice deletion failed, Try again.';
	USER_DELETE_SUCCESS = 'User deleted successfully.';
	USER_DELETE_FAIL = 'User deletion failed, Try again.';

    PRODUCT_DELETE_SUCCESS = 'Product deleted successfully.';
    PRODUCT_DELETE_FAIL = 'Product deletion failed, Try again.';
    CLIENT_DELETE_SUCCESS = 'Client deleted successfully.';
    CLIENT_DELETE_FAIL = 'Client deletion failed, Try again.';

    PRODUCT_ADD_SUCCESS = 'Product added successfully.';
    PRODUCT_ADD_FAIL = 'Product add failed.';
    
	function message(status, message){
		if( status != '' && message != '' ){
			if( status == 'success' ){
				$('#success_message').html(message);
				$('#success_message_container').show();
			}else if( status == 'fail' ){
				$('#error_message').html(message);
				$('#error_message_container').show();
			}

			$('.message_div1').delay(5000).slideUp(function(){
				$('#message_h1').hide()
			});
		}
	}
</script>


		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				  Filter
				</a>
				<div class="clearfix"></div><br/>
				<div class="collapse" id="collapseExample">
					<div class="well" style="width:68.5%;">
				   		<form class="form-inline" id="searchForm">
  							<input onkeydown="doSearch(event)" id="invoiceClientSearch" type="text" class="form-control searchTxt" placeholder="Customer Name">
  							<input onkeydown="doSearch(event)" id="countryName" type="text" class="form-control searchTxt" placeholder="Country Name">
  							<!-- <input onclick="doSearch(event)" type="button" id="invoiceSearchBtn" class="form-control searchTxt" value="Search"/>  -->
						</form>
				  	</div>
				</div>  
				
				<div class="clearfix"></div>
				<div class="text-center">
					<table id="list2"></table> 
					<div id="pager2" ></div>
				</div>
			</div>
		</div>	
			
	</div>
</div>
<script>
	var $grid = $("#list2");
	emptyMsgDiv = $("<div><span style='color:red; text-align:center;font-size:18px;display:block;'>No Clients Found</span></div>");
   	jQuery("#list2").jqGrid({ 
	   url:'ajax-client.php', 
	   datatype: "json",
	   mtype: 'POST',
	   colNames:['ID','Customer Name', 'Phone Number', 'Country', 'Action'], 
	   colModel:[ 
	      	   {name:'id',index:'Customer.id', align:"center"}, 
			   {name:'customerName',index:'Customer.customerName', align:"center"}, 
			   {name:'phone',index:'Customer.phone', align:"center"},
		       {name:'country',index:'Customer.country', align:"center"},
		       {name:'result',index:'result', align:"center"}		   
	   ],
	   rowNum:10, 
	   rowList:[10,20,30], 
	   pager: '#pager2', 
	   sortname: 'Customer.id', 
	   recordpos: 'left', 
	   viewrecords: true, 
	   sortorder: "asc", 
	   height: '100%',
	   loadComplete: function() {
			var ts = this;
	        if (ts.p.reccount === 0) {
	             $(this).hide();
	             emptyMsgDiv.show();
	        } else {
	             $(this).show();
	             emptyMsgDiv.hide();
	   		}
	   }
   });
   emptyMsgDiv.insertAfter($grid.parent());

   var timeoutHnd; 
	var flAuto = true;
	function doSearch(ev){
	 	if(!flAuto)return; 
	 	if(timeoutHnd) clearTimeout(timeoutHnd);
	  	timeoutHnd = setTimeout(gridReload,500);
	}

	invoiceNo = 10;
	searchData = {
			invoiceNo: invoiceNo
	};
	function gridReload(){
	 	searchData = {
	 		countryName : jQuery("#countryName").val(),
	 		invoiceClient : jQuery("#invoiceClientSearch").val()
	 	};
	    var gridParam = { url: "ajax-client.php", datatype: "json", postData: searchData, page: 1 };                        
	    jQuery("#list2").jqGrid('setGridParam', gridParam).trigger("reloadGrid");
	}	

	$('#invoiceClientSearch').autocomplete({
		source: function( request, response ) {
			$.ajax({
				url : 'ajax.php',
				dataType: "json",
				method: 'post',
				data: {
					name_startsWith: request.term,
					type: 'customerName'
				},
				success: function( data ) {
					response( $.map( data, function( item ) {
						var code = item.split("|");
							return {
								label: code[1],
								value: code[1],
								data : item
							}
						}));
					}
				});
		},
		autoFocus: true,	      	
		minLength: 1,
		select: function( event, ui ) {
			var names = ui.item.data.split("|");
			$(this).val(names[1]);
		}		      	
	});


	$(document).on('click', '.delete_client', function(e){
		var uuid = $.trim( $(this).data('uuid') );
		if( uuid == ''){
			alert('Invalid Client');
			return false;
		}
		var r = confirm("Are you sure want to delete this Client");
		if (r == true){
			$.ajax({
				url : 'ajax.php',
				dataType: 'json',
				method: 'post',
				data: {
					uuid: uuid,
					type: 'delete_client'
				},
				success: function(data){
					if (typeof data.success != 'undefined' && data.success){
						message('success', CLIENT_DELETE_SUCCESS);
						jQuery("#list2").trigger("reloadGrid");
					}else{
						message('fail', CLIENT_DELETE_FAIL);
					}
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) { 
			        alert("Status: " + textStatus + " Error: "+ errorThrown);
			    }  
				
			});
		}
		else return false;
	});
</script>	
<div class="clearfix"></div>
	
  </body>
</html>
    