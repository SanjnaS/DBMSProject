<head>
	<title>Lab Attendance and Resource 
			Management System</title>
	<!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel = "stylesheet"  
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">  
    <link rel = "stylesheet"  
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">  
    <script type = "text/javascript"  
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>             
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">  
      </script>   
    <style type="text/css">
    	.brand{
    		background: #00ccff !important;
    		/*background: #cbb09c !important;*/
    	}
    	.brand-text{
    		color: #00ccff !important;
    		/*color: #cbb09c !important;*/
    	}
    	.ftext{
    		font-size: 16px;
    		/*color: #cbb09c !important;*/
    		font-weight: bold;
    	}
    	.ftext1{
    		font-size: 14px;
    		/*color: #cbb09c !important;*/
    	}
    	#dropdown{
    		margin-top: 13px;
    		margin-right: -60px;
    		background-color: #00ccff !important;
    	}
    	#errormessage{
    		font-size: 14px;
    		color: #D2691E !important;
    		font-style: italic;
    		font-weight: bold;
    	}
    	form{
    		max-width: 460px;
    		margin: 20px auto;
    		padding: 20px;
    		font-size: 10px;
    	}
    </style>
</head>
	<body class="grey lighten-3">
		<nav class="white z-depth-0">
			<div class="container">
				<a href="./index.php" class="brand-logo brand-text">
					Lab Attendance and Resource Management System
				</a>
				<!-- <ul id="nav-mobile" class="right hide-on-small-and-down">
					<li><a href="./login.php" class="btn brand z-depth-0">Click to Login</a></li>
				</ul> -->
				<ul id = "dropdown" class = "dropdown-content right">  
			         <li><a href = "./login.php">Login</a></li>  
			         <li><a href = "./verifyemail.php">Register</a></li>   
			         <li class = "divider"></li>  
			         <li><a href = "./adminlogin.php">Update Resource</a></li>  
			    </ul>  
			    <a id = "dropdown" class = "btn dropdown-button right" href = "#" data-activates = "dropdown">Select Option  
         		<i class = "mdi-navigation-arrow-drop-down right"></i></a>
			</div>
		</nav>
