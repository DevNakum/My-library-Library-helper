<?php 
	
	include 'config.php';

	if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='0')
    {
        header("Location: {$hostname}/user/html/");
    }
	// for debugging purposes...
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	// gathering required information...
	$dept_name = $_POST['dept'];
	$sem_no = $_POST['sem'];
	$sub_code = $_POST['sub_code'];

	// function for removing recommendation from DB...
	function remove_recommendation($grp_id,$sub_code,$conn)
	{
		$query_remove_recommendation = "DELETE FROM tbl_recommendation WHERE sub_code='{$sub_code}' AND grp_id='{$grp_id}'";
		$query_result = mysqli_query($conn,$query_remove_recommendation) or die("The delete query Unsuccessful!");
	}

	// function for inserting recommendation into DB...
	function insert_recommendation($grp_id,$sub_code,$conn)
	{
		$query_insert_recommendation = "INSERT INTO tbl_recommendation VALUES($grp_id,'{$sub_code}')";
		echo $query_insert_recommendation;
		$query_result = mysqli_query($conn,$query_insert_recommendation) or die("The insert query Unsuccessful!");
	}


	// fetching already existing recommendations...
	$already_recommended_grp_id = array();
	$query_fetch_already_recommanded = "SELECT grp_id FROM tbl_recommendation WHERE sub_code='{$_POST['sub_code']}'";
	$fetch_result = mysqli_query($conn,$query_fetch_already_recommanded);

	if(mysqli_num_rows($fetch_result) > 0) {
		while ($row = mysqli_fetch_assoc($fetch_result)) {
			
			array_push($already_recommended_grp_id, $row['grp_id']);

		}
	}
	// for debugging purpose...
	// echo "<pre>";
	// print_r($already_recommended_grp_id);
	// echo "</pre>";


	// viewing in already recommendation 
	foreach ($already_recommended_grp_id as $grp_id) {
		
		if(!in_array($grp_id, $_POST['books'])) { // if it is not exist in recommended books
			// action is mentioned in echo statement...
			// echo "Book with GRP_ID ".$grp_id." needs to be deleted!<br>";
			remove_recommendation($grp_id,$sub_code,$conn);

		} else { // otherwise...
			// action is mentioned in echo statement...
			// echo "Book with GRP_ID ".$grp_id." is already recommended!<br>";
		}

	}


	// viewing in recommeded books...
	foreach ($_POST['books'] as  $grp_id) {
		if(!in_array($grp_id, $already_recommended_grp_id)) {
			// action is mentioned in echo statement...
			// echo "Book with GRP_ID ".$grp_id." needs to be inserted!<br>";
			insert_recommendation($grp_id,$sub_code,$conn);
		}
	}

	// jumping in setRecommandation page...
	header("location: $hostname/admin/html/setRecommandation.php");
?>