<?php 
	include "php/header.php";
	include "php/topnav.php";
?>

    <div class="row">
		<div class="large-10 columns">
			<h4>Reports, Disclosures, Exhortations - New Entry</h4>
			<form action="php/newsfeedFunctions.php?updateMethod=1" method="POST">
				<label>Date:</label>
				<input type="text" name="dateField">
				<label>Entry</label>
				<textarea name="entryField"></textarea>
				<input type="submit" value="Submit">
			</form>
			
			<h4>Edit Entry</h4>
			<table>
				<thead>
					<tr>
						<th class="dateColumn">Date</th>
						<th>Entry</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
			<?php
			$sql = "SELECT id, date, entry FROM newsfeed ORDER BY id DESC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$id = $row["id"];
					$date = $row["date"];
					$entry = $row["entry"];
					$filerow =
						'<tr>
							<td>' .$date.'</td>
							<td>'.$entry.'</td>
							<td><a href="editentry.php?id='.$id.'">Edit</a></td>
							<td><a href="php/newsfeedFunctions.php?updateMethod=3&id='.$id.'">Delete</a></td>
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
