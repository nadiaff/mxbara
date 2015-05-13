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
								<h2>Credits</h2>
								<p>Need to add these in.</p>
							</div>
						</div>
						<div class="row show-for-small">
							<div class="small-12 columns panel">
								<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/updateredux.php"; ?>
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