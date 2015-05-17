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
								<h2>Digitized Codex</h2>
								<?php 
									include 'php/codexFunctions.php';
								?>
								<!--<p>5/17/15 - <a href="comix.php?p=12">> Author: Belatedly realize that squids are not cetaceans</a></p>
								<p>5/16/15 - <a href="comix.php?p=11">> Rose: Tell customers, "Let me tell you about Homestuck."</a></p>
								<p>5/16/15 - <a href="comix.php?p=10">> Rose: Cast spell ENLARGE SATAN</a></p>
								<p>5/15/15 - <a href="comix.php?p=9">> Rose: Waggle your tentacles and stare wordlessly</a></p>
								<p>5/15/15 - <a href="comix.php?p=8">> Rose: Flee</a></p>
								<p>5/15/15 - <a href="comix.php?p=7">> Rose: Squawk like a parrot and piss on the counter</a></p>
								<p>5/14/15 - <a href="comix.php?p=6">> Rose: Endorse burger joint</a></p>
								<p>5/14/15 - <a class="arrow" href="comix.php?p=5">==></a></p>
								<p>5/14/15 - <a href="comix.php?p=4">Closer, but not quite</a></p>
								<p>5/14/15 - <a href="comix.php?p=3">Try Again</a></p>
								<p>5/14/15 - <a href="comix.php?p=2">Enter Name</a></p>
								<p>5/14/15 - <a href="comix.php?p=1">MXBARA</a></p>-->
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
	include "php/footer.php";
	include "php/topimg.php";
?>
