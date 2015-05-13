<?php 
	include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/header.php";
	
	if (is_null($_GET['p'])) {
		header( "refresh:.1;url=/comics/MXBARA/codex.php" );
	} else if (empty($_GET['p'])) {
		header( "refresh:.1;url=/comics/MXBARA/codex.php" );
	} else {
		$pageid = $_GET['p'];
	}
	
	
?>

    <div class="row">
		<div class="large-12 columns">
				<div class="row">
					<div class="small-12 columns panel comix-container">
						<div class="medium-8 medium-offset-2 small-12 columns comix-content-panel">
							<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/pageFunctions.php"; ?>
							<h1><?php echo $pageTitle; ?></h1>
							<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/pages/page".$pageid.".php";?>
								<a href="comix.php?p=<?php echo $nextPage; ?>"> <?php echo $pageCommand; ?></a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns comix-logo">
						<a href="http://www.drweeaboo.net/comics/MXBARA"><img src="/comics/MXBARA/img/mxbaralogo.png" /></a>
					</div>
				</div>
				<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/topnav2.php"; ?>
				
				<div class="row show-for-small">
					<div class="small-12 columns panel side-nav-div">
						<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/updateredux.php"; ?>				
					</div>
				</div>
				
				<div class="row">
					<div class="medium-3 hide-for-small columns panel side-nav-div">
						<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/updateredux.php"; ?>
						<br>
						<?php include $_SERVER['DOCUMENT_ROOT']."/comics/MXBARA/php/equines.php"; ?>
					</div>
					<div class="medium-9 small-12 columns">
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
