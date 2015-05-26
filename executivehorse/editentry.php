<?php
	include "php/header.php";
	include "php/config.php";
	
	//Grab the ID of the database row you're going to edit
	$rowid = $_GET['id'];
	//Get the info from the database row using the id so you can populate the form
	$sql = "SELECT `date`, `entry` FROM `newsfeed` WHERE `id` = ".$rowid.";";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {	
		while($row = $result->fetch_assoc()) {
			$date = $row["date"];
			$entry = $row["entry"];
		} 
	}
?>
		<div class="row">
			<div class="large-10 columns">
				<h4>Reports, Disclosures, Exhortations - Edit Entry</h4>
				<!-- Open newsfeed functions page and select option for update previous entry-->
				<form action="php/newsfeedFunctions.php?updateMethod=2" method="POST">
					<input type="hidden" name="idField" value="<?php echo $rowid ?>">
					<label>Date:</label>
					<input type="text" name="dateField" value="<?php echo $date; ?>">
					<label>Entry</label>
					<textarea name="entryField"><?php echo $entry; ?></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</body>
</html>
