<?php 
	include 'php/header.php';
	include 'php/logo.php';
	include 'php/topnav.php';
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
							<div class="small-12 columns panel apex-panel no-padding-small">
								<img src="/comics/MXBARA/pages/img/mx1.gif" />
								<p class="comix-text">A service employee stands behind the counter of a popular international fast-food chain. It just so happens that today, the 14th of May, 2015, is this person's birthday. Since they received their name eighteen years ago, there is no need to give them one now. Can you guess this disaffected clerk's name?</p>
								<p class="command"><a href="comix.php?p=2">Enter name</a></p>
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
	include "php/footer.php";
	include "php/topimg.php";
?>
