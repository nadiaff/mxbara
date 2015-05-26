<?php
	include "php/config.php";
	
	$date =  mysqli_real_escape_string($conn, $_POST['dateField']);
	$entry = mysqli_real_escape_string($conn, $_POST['entryField']);
	
	$sql = 'UPDATE `newsfeed` SET `date`="'.$date.'",`entry`="'.$entry.'";';
	
	echo $sql;
	
	/*if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	
	header( "refresh:.5;url=index.php" );*/
?>