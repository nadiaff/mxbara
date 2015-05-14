<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/executivehorse/php/config.php"; 

	$thisPage = $pageid;
	$nextPage = $pageid + 1;
	
	$stmt = $conn->prepare("SELECT title FROM pages WHERE id = ?");
	$stmt->bind_param("i", $thisPage); 
	$stmt->execute();
	
	$out_title = NULL;
	$stmt->bind_result($out_title);
	while ($stmt->fetch()) {
		if (gettype($out_title) == string) {
			$pageTitle = $out_title;
		}
	}	
	$stmt->close();
	
	$stmt2 = $conn->prepare("SELECT title FROM pages WHERE id = ?");
	$stmt2->bind_param("i", $nextPage); 
	$stmt2->execute();
	
	$out_command = NULL;
	$stmt2->bind_result($out_command);
	while ($stmt2->fetch()) {
		if (gettype($out_command) == string) {
			$pageCommand = $out_command;
		}
	}	

	$stmt2->close();
	
	$conn->close();
	
?>