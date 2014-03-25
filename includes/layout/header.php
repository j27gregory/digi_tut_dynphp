<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page['tab_title']; ?></title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<!-- JQuery CSS 1.10.4/smoothness -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<!-- FontAwesome io -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<!-- JQuery -->
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
		
		<!-- <link rel="stylesheet" href="css/jumbotron-narrow.css"> -->
		<link rel="stylesheet" href="css/sticky-footer-navbar.css">
	</head>
	
	<body>

	<!-- Fixed navbar; outside of page container -->
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
    
    <div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      	</button>
	</div>
    <!-- Start navbar collapse class -->
    <div class="navbar-collapse collapse">
    	<div class="container">
   		<ul class="nav navbar-nav">
   			<!-- dynamic navigation; need to function out -->
   			<?php
   				$q = "SELECT * FROM site_page";
				$r = mysqli_query($dbc, $q);
				
				while($nav = mysqli_fetch_assoc($r)) { ?>
					
				<li<?php if($pageid == $nav['id']) { echo ' class="active"'; } ?>><a href="<?php echo $nav['page_url'].$nav['id']; ?>"><?php echo $nav['page_name']; ?></a></li>
				
				<?php } ?>
				
			
            <!--<li<?php if($pageid == 1) { echo ' class="active"'; } ?>><a href="index.php?page=1">home</a></li>
            <li<?php if($pageid == 2) { echo ' class="active"'; } ?>><a href="about.php?page=2">about</a></li>
            <li<?php if($pageid == 3) { echo ' class="active"'; } ?>><a href="contact.php?page=3">contact</a></li>-->
            
            <li class="dropdown hidden">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown">components <b class="caret"></b></a>
       		
       		<ul class="dropdown-menu"> <!-- dropdown menu #1 -->
       			
                <li><a href="#">entities</a></li>
                <li><a href="#">inventories</a></li>
                <li><a href="#">gis/gps</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">assets</li>
                <li><a href="#">plant material</a></li>
                <li><a href="#">hardscape</a></li>
       		</ul> <!-- end dropdown menu #1 -->
        	</li>
     	</ul> <!-- end main navbar -->
     	<!-- start navbar right -->
		<ul class="nav navbar-nav navbar-right">
         	<li class="dropdown hidden">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
					</ul>
			</li>
        	<li><a href="#">login</a></li>
        	<li><a href="#">register</a></li>
      	</ul>
    </div> <!-- END: container used to center navbar items in fixed navbar -->
    </div> <!-- END: .nav-collapse -->
	</div> <!-- END: <div class="navbar navbar-inverse navbar-fixed-top" role="navigation"> -->
	
	<!-- START: MAIN Page Content -->
	<div class="container">
	<!-- INCLUDE with header.php -->
		
	<!-- start main container for main page content -->
		<div class="page-header">
			
		</div>
		<!-- START: main content container -->
		<div class="container">
