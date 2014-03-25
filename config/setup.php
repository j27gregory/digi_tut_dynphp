<?php
// Setup file:

// LanMan Database Connection String; Tempoary db connection; move for production
$dbc = mysqli_connect('localhost', 'j27gregory', 'M@cyj0jo!_', 'lanman_DB') OR die('Could not connect to the database: ' . mysqli_connect_error());

include_once('functions/data.php');



// Page Content Query

if(isset($_GET['page'])) {
	
	$pageid = $_GET['page'];
	
} else {
	
	$pageid = 1;
}


$page = data_page($dbc, $pageid); // return values for data_page function in data.php

//$q = "SELECT * FROM site_page WHERE id = $pageid";
//$r = mysqli_query($dbc, $q);

//$page = mysqli_fetch_assoc($r);




?>