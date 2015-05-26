<?php
	include "config.php";
	echo $servername;
	//Determine whether this is to insert new entry or update an old one
	$um = $_GET['updateMethod'];
	if ($um == 1) {
		$date =  mysqli_real_escape_string($conn, $_POST['dateField']);
		$entry = mysqli_real_escape_string($conn, $_POST['entryField']);
		
		$sql = 'INSERT INTO `newsfeed` (`date`, `entry`) VALUES ("'.$date.'", "'.$entry.'");';
	} else if ($um == 2) {
		$rowid = $_POST['idField'];
		$date =  mysqli_real_escape_string($conn, $_POST['dateField']);
		$entry = mysqli_real_escape_string($conn, $_POST['entryField']);
		
		$sql = 'UPDATE `newsfeed` SET `date`="'.$date.'",`entry`="'.$entry.'"WHERE id='.$rowid;
	} else if ($um == 3) {
		$rowid = $_GET['id'];
		$sql = 'DELETE FROM `newsfeed` WHERE id='.$rowid;
	}
	
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	
	header( "refresh:.5;url=../newsfeed.php" );
?>