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
								<h2>Credits</h2>
								<h3>MXBARA Creative Team</h3>
								<p>Nadia - Author, artist, web designer, other stuff</p>
								<p>Nicole - Artist</p>
								<h3>MXBARA Contributors</h3>
								<p>Jaden Johnson created the Squiddle Poster that you can see in Squiddle Burger. You can see more of their work at <a href="http://cuttlfish.tumblr.com/">cuttlfish.tumblr.com</a>.</p>
								<h3>Homestuck Fan Artists</h3>
								<p>These are artists whose work I have pillaged. I have only taken fan created Homestuck related art that is, to the best of my knowledge, free to use with attribution. If I have slipped up anywhere, please <a href="http://official-mxbara.tumblr.com/">let me know ASAP</a>. In line with the legal definition of fair use, I have attempted to use less than 10% of the original comic that this parody is based off of.</p>
								<p>intrepidPioneer and the rest of the folks on the <a href="http://mspaforums.com/showthread.php?53104-Custom-furniture-sprites"> Custom Furniture Sprite thread</a> on the MSPA Forums</p>
								<h3>Other</h3>
								<p>Andrew Hussie and the entire creative team associated with Homestuck should also be mentioned.</p>
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
