<?php 
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/executivehorse/php/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/executivehorse/php/config.php";
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/executivehorse/php/topnav.php";
?>

     <div class="row">
		<div class="large-10 columns">
			<h4>Command List</h4>
			<table>
				<thead>
					<tr>
						<th>IP Address</th>
						<th>Page ID</th>
						<th>Command</th>
						<th>Edit</th>
						<th>Archive</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
			<?php
			$sql = "SELECT id, ip, pid, command FROM commandList ORDER BY pid ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$id = $row["id"];
					$ip = $row["ip"];
					$pageid = $row["pid"];
					$command = $row["command"];
					$filerow =
						'<tr>
							<td>'.$ip.'</td>
							<td>'.$pageid.'</td>
							<td>'.$command.'</td>
							<td><a href="php/commFunctions.php?eid='.$id.'">Edit</a></td>
							<td><a href="php/commFunctions.php?aid='.$id.'">Archive</a></td>
							<td><a href="php/commFunctions.php?did='.$id.'">Delete</a></td>
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
