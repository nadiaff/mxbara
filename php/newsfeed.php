<?php 
	include "executivehorse/php/config.php"; 
	
	$sql = "SELECT date, entry FROM newsfeed ORDER BY id DESC LIMIT 10";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$date = $row["date"];
			$entry = $row["entry"];
			$newsfeedEntry = '<p class="news-date">' . $date. '</p><p>'.$entry.'</p><hr>';
			echo $newsfeedEntry;
		}
	}
	$conn->close();	
?>
