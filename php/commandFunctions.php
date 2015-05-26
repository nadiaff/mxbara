<?php
	include "executivehorse/php/config.php";
	
	// Check to make sure the command Prompt isn't empty
	if(!isset($_POST['commandPrompt']) || strlen(trim($_POST['commandPrompt'])) == 0) {
		echo 'No command entered. ';
	} else {
		//Prepare sql statement
		$stmt = $conn->prepare("INSERT INTO commandList (pid, command, ip) VALUES (?, ?, ?)");
		//Bind parameters
		$stmt->bind_param("iss", $latestPage, $command, $ip);
				
		$command = mysqli_real_escape_string($conn, $_POST['commandPrompt']);
		$command = strip_tags($command);
		$ip = $_SERVER["REMOTE_ADDR"];
		$latestPage = $_POST['latestPage'];
		
		
			//Execute statement and close connection, then redirect to page
			$stmt->execute();
			echo "Command entered successfully";
			$stmt->close();
			$conn->close();
			header( "refresh:1;url=comix.php?p=".$latestPage."" );
	
	} 

?>