<?php

# included config file, connection to database...
include 'config.php';

if(isset($_POST['btnGenerate'])) {

	$query4 = "SELECT max(book_id)'b_id',max(grp_id)'g_id' FROM tbl_book_copies";
	$result4 = mysqli_query($conn,$query4) or die("Insert Query4 Unsuccessfull!");
	$b_id = mysqli_fetch_assoc($result4);
	$actual_b_id = $b_id['b_id'];
	$actual_g_id = $b_id['g_id'];
	echo "Actual B_ID : $actual_b_id Actual G_ID : $actual_g_id";

	$query5 = "SELECT book_quantity from tbl_books where grp_id = {$actual_g_id}";
	$result5 = mysqli_query($conn,$query5) or die("Insert Query5 Unsuccessfull!");

	$row = mysqli_fetch_assoc($result5);

	
	$bq = $row['book_quantity'];
	$actual_b_id -= $bq;
	echo "Quantity : $bq and Book ID : $actual_b_id";
	header("location: $hostname/admin/html/qrCode.php?b_quantity=$bq&b_id=$actual_b_id");

} else {

	# data fetched from post request.... =======================================================================
	print_r($_POST);
	$b_name = $_POST['txtBookName'];
	$b_author = $_POST['txtBookAuthor'];
	$b_edition = $_POST['txtBookEdition'];
	$b_quantity = $_POST['txtQuantity'];

	# query to be passed to database....
	# global entry of book...
	$query = "INSERT INTO tbl_books(book_name,book_edition,book_author,book_quantity) VALUES('{$b_name}',{$b_edition},'{$b_author}',{$b_quantity})";
	$result = mysqli_query($conn,$query) or die("Insert Query1 Unsuccessfull!");

	# query for unique entry of book... =========================================================================
	# getting max group id first, then making new id for this new book...
	$query2 = "SELECT max(grp_id) FROM tbl_books";
	$result2 = mysqli_query($conn,$query2) or die("Insert Query2 Unsuccessfull!");
	$g_id = mysqli_fetch_assoc($result2);

	# actual unique entry of each distinct book copies....
	$dup_qua = $b_quantity;
	while($dup_qua--) {
		$query3 = "INSERT INTO tbl_book_copies(grp_id,book_status) VALUES({$g_id['max(grp_id)']},'NO')";
		$result3 = mysqli_query($conn,$query3) or die("Insert Query3 Unsuccessfull!");
	}

	$query4 = "SELECT max(book_id)'b_id' FROM tbl_book_copies";
	$result4 = mysqli_query($conn,$query4) or die("Insert Query4 Unsuccessfull!");
	$b_id = mysqli_fetch_assoc($result4);
	$actual_b_id = $b_id['b_id'];

	# return to the actual page...
	header("location: $hostname/admin/html/add_book.php?id=1&b_quantity={$b_quantity}&b_name=$b_name&b_id={$actual_b_id}&b_author={$b_author}&b_edition={$b_edition}");

}



?>