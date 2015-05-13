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
								<!--<p><a class="view-order" href="#">View Oldest to Newest</a></p>-->
								<p>5/14/15 - <a href="comix.php?p=4">> Closer, but not quite</a></p>
								<p>5/14/15 - <a href="comix.php?p=3">> Try Again</a></p>
								<p>5/14/15 - <a href="comix.php?p=2">> Enter Name</a></p>
								<p>5/14/15 - <a href="comix.php?p=1">MXBARA</a></p>
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
