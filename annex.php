<?php 
	include "php/header.php";
	include "php/logo.php";
	include "php/topnav.php";
?>

    <div class="row">
		<div class="large-12 columns">
				<div class="row">
					<div class="hide-for-small medium-3 columns panel side-nav-div">
						<?php include "php/updateredux.php"; ?>
						<br>
						<?php include "php/equines.php"; ?>
					</div>
					<div class="medium-9 small-12 columns">
						<div class="row">
							<div class="small-12 columns panel codex-list no-padding-small">
								<h2>Annex</h2>
								<p><a href="credits.php">Credits</a> - This isn't a one person endeavour and I'd like to give credit to all of the people whose shoulders I have leap frogged off of in creating this comic. Many of the artists do take commissions, just so you know!</p>
								<br>
								<p>This page will contain additional information of interest at some point.</p>
							</div>
						</div>
						<div class="row show-for-small">
							<div class="small-12 columns panel">
								<?php include "php/updateredux.php"; ?>
							</div>
						</div>
						<div class="row">
							<div class="medium-9 small-12 columns panel newsfeed">
								<?php include "php/newsfeed.php"; ?>
							</div>
							<div class="hide-for-small medium-3 side-imgs columns panel">
								<?php include "php/longhorse.php"; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

    </div> 
        
<?php

	include 'php/footer.php';
	include 'php/topimg.php';
?>
