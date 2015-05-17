<?php 
	include "php/header.php";
	include "php/topnav.php";
?>

     <div class="row">
		<div class="large-10 columns">
			<h4>Add Page</h4>
			<form action="pageFunctions.php" method="POST"> 
				<label>Page #:</label>
				<input type="text" name="pnField">
				<label>Date:</label>
				<input type="text" name="dateField">
				<label>Prefix:</label>
				<input type="text" name="prefixField">
				<label>Title:</label>
				<input type="text" name="titleField">
				<input type="submit" value="Submit">
			</form>
			<br>
			<br>
			
			<h4>Codex - Page Listing</h4>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Page</th>
						<th>Date</th>
						<th>Prefix</th>
						<th>Title</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
			<?php
			$sql = "SELECT id, pid, updateDate, prefix, title FROM pages ORDER BY id ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$id = $row["id"];
					$pageid = $row["pid"];
					$updateDate = $row["updateDate"];
					$prefix = $row["prefix"];
					$title = $row["title"];
					
					//Take mysql date and format it using php
					$phpdate = strtotime( $updateDate );
					$outputDate = date( 'm/d/Y', $phpdate );
					
					$filerow =
						'<tr>
							<td>'.$id.'</td>
							<td>'.$pageid.'</td>
							<td>'.$outputDate.'</td>
							<td>'.$prefix.'</td>
							<td>'.$title.'</td>
							<td><a href="php/pageFunctions.php?eid='.$id.'">Edit</a></td>
						</tr>';
					echo $filerow;
				}
			}
			$conn->close();
			?>
				</tbody>
			</table>
		</div>
    </div> 
        
<?php

	include "php/footer.php";

?>
