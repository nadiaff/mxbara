<?php
	
	// Prepare the statement to get the links and titles of the comix pages
	$redux_stmt = $conn->prepare("SELECT id, pid, updateDate, prefix, title FROM pages ORDER BY id DESC LIMIT 0, 50");
	
	// Execute statement
	$redux_stmt->execute();
	
	// Set the output variables you're going to bind stuff to to NULL (not sure if this is necessary)
	$outp_pid = NULL;
	$outp_date = NULL;
	$outp_prefix = NULL;
	$outp_title = NULL;
	
	// Bind results to the output variables
	$redux_stmt->bind_result($outp_id, $outp_pid, $outp_date, $outp_prefix, $outp_title);
	while ($redux_stmt->fetch()) {
		if (gettype($outp_pid) == integer && gettype($outp_title) == string && gettype($outp_prefix) == string) {
			$phpdate2 = strtotime( $outp_date );
			$output_date2 = date( 'n/j/y', $phpdate2 );
			
			// Set the class to arrow if it's a ==> 
			if ($outp_title == '==>') {
				echo '<li>'.$output_date2.' - <a class="arrow" href="comix.php?p='.$outp_pid.'">'.$outp_title.'</a></li>';
			// If the title is too long, cut it off and add an ellipsis so it only takes up one line
			} else if (strlen($outp_title) > 20) {
				$fixed_title = substr($outp_title,0,20).'...';
				echo '<li>'.$output_date2.' - <a href="comix.php?p='.$outp_pid.'">'.$outp_prefix.' '.$fixed_title.'</a></li>';
			// Otherwise, output like normal
			} else {
				echo '<li>'.$output_date2.' - <a href="comix.php?p='.$outp_pid.'">'.$outp_prefix.' '.$outp_title.'</a></li>';
			}
			
		}
	}	
	$redux_stmt->close();
?>