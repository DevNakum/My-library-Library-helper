<?php 
	
	include 'config.php';
	
	// for debugging purpose...
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	if(sizeof($_POST['subjects']) == 0) {
		header();
	}
	

	// header("location: $hostname/admin/html/add_book.php?id=1&b_quantity={$b_quantity}&b_name=$b_name&b_id={$actual_b_id}&b_author={$b_author}&b_edition={$b_edition}");

 ?>