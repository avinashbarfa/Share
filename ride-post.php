<?php
	include 'session.php';
	$from = $_REQUEST["from"];
	$to = $_REQUEST["to"];
	$date = $_REQUEST["date"];
	$time = $_REQUEST["time"];
	$additional = $_REQUEST["add-info"];
	$posted_by = $session_id;

	$query = "INSERT INTO rideinfo (from_id, to_id, userid, pdate, ptime, additional_details ) VALUES ('$from','$to','$posted_by','$date','$time', '$additional')";

	if($conn -> query($query) === TRUE) {
		header('Location: dashboard.php');
	}
	else {
		echo "Error: In Storing Data" .$sql. "<br>" . $conn->error; 
	}
	$conn -> close();
?>