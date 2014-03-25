<?php

FUNCTION data_page($dbc, $id) {
	
	$q = "SELECT * FROM site_page WHERE id = $id";
	$r = mysqli_query($dbc, $q);

	$data = mysqli_fetch_assoc($r);
	
	return $data;
}
?>