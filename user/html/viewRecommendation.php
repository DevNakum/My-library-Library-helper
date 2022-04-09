<?php 

// this must be included in 'bookRecommendation.php' page...
$sub_code = $_POST['subject'][0];
$previous_details = [
		"dept" => $_POST['dept'],
		"sem" => $_POST['sem']
	];

// fetching the name of the subject...
$query_fetch_subject = "SELECT sub_name FROM tbl_dept_subjects WHERE sub_code='{$sub_code}' AND semester={$_POST['sem']} AND
							dept_name='{$_POST['dept']}'";
$fetch_result = mysqli_query($conn,$query_fetch_subject) or die("Fetching subject query failed!");
$sub_name = mysqli_fetch_assoc($fetch_result)['sub_name'];


// fetching the recommended books...
$query_fetch_recommendation = "SELECT tb.book_name,tb.book_author,tb.book_edition FROM tbl_books tb,tbl_recommendation tr WHERE tr.sub_code='{$sub_code}' AND tr.grp_id=tb.grp_id";
$fetch_result = mysqli_query($conn,$query_fetch_recommendation);

// reat all rows are dynamic...
if(mysqli_num_rows($fetch_result) > 0) {

	echo '<h1 style="text-align: center; color: red;">Recommendation for subject : '.$sub_name.'</h1>';

	echo '<div class="tblReturnReport" style="overflow-x:auto;">';
	// table started from here
	echo "<table>";
	// first row is header
	echo "<tr>";
	echo "<th> Book Name </th>";
	echo "<th> Book Author </th>";
	echo "<th> Edition </th>";
	echo "</tr>";
	// first row ends here

	while ($row = mysqli_fetch_assoc($fetch_result)) {
		
		echo "<tr>";
		echo "<td>". $row['book_name'] ."</td>";
		echo "<td>". $row['book_author'] ."</td>";
		echo "<td>". $row['book_edition'] ."</td>";
		echo "</tr>";

	}

	echo "</table>";
	// table ends here
	echo '</div>';

} else {
	echo '<h1 style="text-align: center; color: red;">No Recommendation Exist! for subject : '. $sub_name .'</h1>';
	echo '<h3 style="text-align: center; color: grey;">Press Go or Back button.</h3>';
}

echo "<button class='btnDownload'>Back</button>";

// making hidden fields for restoring previous information, in case user wants to visit the subjects again...
foreach ($previous_details as $key => $value) {
	echo '<input type="hidden" name="'.$key.'" value="'. $value. '">';
}

?>