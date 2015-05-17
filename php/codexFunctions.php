<?php
	
	
	// Determine whether the reader wants to view pages from most recent to oldest or vice versa
	$logorder = $_GET['pageOrder'];
	if ($logorder == 'oldestFirst') {
		$codex_stmt = $conn->prepare("SELECT id, pid, updateDate, prefix, title FROM pages ORDER BY id ASC");
		echo '<p class="view-order"><a href="codex.php">View Newest to Oldest</a></p>';
	} else {
		$codex_stmt = $conn->prepare("SELECT id, pid, updateDate, prefix, title FROM pages ORDER BY id DESC");
		echo '<p class="view-order"><a href="codex.php?pageOrder=oldestFirst">View Oldest to Newest</a></p>';
	}
	
	// Execute statement
	$codex_stmt->execute();
	
	// Set the output variables you're going to bind stuff to to NULL (not sure if this is necessary)
	$out_pid = NULL;
	$out_date = NULL;
	$out_prefix = NULL;
	$out_title = NULL;
	
	$codex_stmt->bind_result($out_id, $out_pid, $out_date, $out_prefix, $out_title);
	while ($codex_stmt->fetch()) {
		if (gettype($out_pid) == integer && gettype($out_title) == string && gettype($out_prefix) == string) {
			$phpdate = strtotime( $out_date );
			$output_date = date( 'm/d/Y', $phpdate );
			
			if ($out_title == '==>') {
				echo '<p>'.$output_date.' - <a class="arrow" href="comix.php?p='.$out_pid.'">'.$out_title.'</a></p>';
			} else {	
				echo '<p>'.$output_date.' - <a href="comix.php?p='.$out_pid.'">'.$out_prefix.' '.$out_title.'</a></p>';
			}
			
		}
	}	
	$codex_stmt->close();
	$conn->close();

?>