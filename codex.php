<?php 
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/logo.php";
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/topnav.php";
?>

    <div class="row">
		<div class="large-12 columns">
				<div class="row">
					<div class="hide-for-small medium-3 columns panel side-nav-div">
						<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/updateredux.php"; ?>
						<br>
						<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/equines.php"; ?>
					</div>
					<div class="medium-9 small-12 columns">
						<div class="row">
							<div class="small-12 columns panel codex-list no-padding-small">
								<h2>Digitized Codex</h2>
								<p><a class="view-order" href="#">View Oldest to Newest</a></p>
								<p>4/13/15 - <a href="#">Page 1</a></p>
								<p>4/13/15 - <a href="#">Page 2</a></p>
								<p>4/13/15 - <a href="#">Page 3</a></p>
								<p>4/13/15 - <a href="#">Page 4</a></p>
								<p>4/13/15 - <a href="#">Page 5</a></p>
								<p>4/14/15 - <a href="#">Page 6</a></p>
								<p>4/14/15 - <a href="#">Page 7</a></p>
								<p>4/14/15 - <a href="#">Page 8</a></p>
								<p>4/14/15 - <a href="#">Page 9</a></p>
								<p>4/14/15 - <a href="#">Page 10</a></p>
								<p>4/14/15 - <a href="#">Page 11</a></p>
								<p>4/14/15 - <a href="#">Page 12</a></p>
								<p>4/15/15 - <a href="#">Page 13</a></p>
								<p>4/15/15 - <a href="#">Page 14</a></p>
								<p>4/15/15 - <a href="#">Page 15</a></p>
							</div>
						</div>
						<div class="row">
							<div class="medium-9 small-12 columns panel newsfeed">
								<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/newsfeed.php"; ?>
							</div>
							<div class="hide-for-small medium-3 side-imgs columns panel">
								<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/longhorse.php"; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

    </div> 
        
<?php
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/footer.php";
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/topimg.php";
?>
