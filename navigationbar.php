<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php">GROCERY EXPRESS</a>
	    </div>
	    <div class="navbar-collapse collapse navbar-right">
	        <ul id ="main_sl"class="nav navbar-nav">
                <li>
                    <!--<button id = "loginbtn" type = "button" class = "btn btn-warning pull-right">Log In</button>-->
                    <button id = "loginbtn" type = "button" class = "btn btn-warning pull-right" data-backdrop="static" data-keyboard="false" data-target = "#loginmodal" data-toggle = "modal">Log In</button>
		        </li>
                <li>
                    <!--<button id = "loginbtn" type = "button" class = "btn btn-warning pull-right">Log In</button>-->
                    <button id = "loginbtn" type = "button" class = "btn btn-warning pull-right" data-backdrop="static" data-keyboard="false" data-target = "#loginmodal" data-toggle = "modal">Sign Up</button>
		        </li>
                <!--
	            <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i>HOME</a></li>
				
	            <li class="dropdown">
	              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORIES<b class="caret"></b></a>
				  	<ul class="dropdown-menu">
	                	<li><a href="food.php">Foods</a></li>
	                	<li><a href="toiletries.php">Personal Care</a></li>
	              	</ul>
	            </li>
	            <li><a href="cart.php"><i class="glyphicon glyphicon-shopping-cart"></i>CART</a></li>
	            <li class="dropdown">
	            <li><a href="contact.php">CONTACT US</a></li>
	            <li class="dropdown">
	            <li><a href="about.php"><i class="glyphicon glyphicon-info-sign"></i>ABOUT US</a></li>
                -->
	        </ul>
	    </div><!--/.nav-collapse -->
	</div>
</div>
<?php include('login.php');?>