<?php 
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/executivehorse/php/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/executivehorse/php/config.php";
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/executivehorse/php/topnav.php";
?>

     <div class="row">
		<div class="large-10 columns">
			<h4>Add Page</h4>
			<form action="pageFunctions.php" method="POST"> 
				<label>Page #:</label>
				<input type="text" name="pnField">
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
						<th>Page Number</th>
						<th>Title</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
			<?php
			$sql = "SELECT id, pid, title FROM pages ORDER BY id ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$id = $row["id"];
					$pageid = $row["pid"];
					$title = $row["title"];
					$filerow =
						'<tr>
							<td>'.$id.'</td>
							<td>'.$pageid.'</td>
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

	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/footer.php";

?>
