<?php 
	include "php/header.php";
	
	if (is_null($_GET['p']) || empty($_GET['p'])) {
		header( "refresh:.1;url=codex.php" );
	} else if (is_numeric($_GET['p'])){
		$pid = (int)$_GET['p'];
		$stmt = $conn->prepare("SELECT pid FROM pages WHERE pid = ?");
		$stmt->bind_param("i", $pid); 
		$stmt->execute();
		$stmt->store_result();
		if ($stmt->num_rows) {
			$pageid = $_GET['p'];
		}  else {
			header( "refresh:.1;url=codex.php" );
		}
	} else {
		header( "refresh:.1;url=codex.php" );
	}
	
	
?>

    <div class="row">
		<div class="large-12 columns">
				<div class="row">
					<div class="small-12 columns panel comix-container">
						<div class="medium-8 medium-offset-2 small-12 columns comix-content-panel">
							<?php include "php/pageFunctions.php"; ?>
							<h1><?php echo $pageTitle; ?></h1>
							<?php include "pages/page".$pageid.".php";?>
								<a href="comix.php?p=<?php echo $nextPage; ?>"> <?php echo $pageCommand; ?></a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns comix-logo">
						<a href="http://www.mxbara.com"><img src="img/mxbaralogo.png" /></a>
					</div>
				</div>
				<?php include "php/topnav2.php"; ?>
				
				<div class="row show-for-small">
					<div class="small-12 columns panel side-nav-div">
						<?php include "php/updateredux.php"; ?>				
					</div>
				</div>
				
				<div class="row">
					<div class="medium-3 hide-for-small columns panel side-nav-div">
						<?php include "php/updateredux.php"; ?>
						<br>
						<?php include "php/equines.php"; ?>
					</div>
					<div class="medium-9 small-12 columns">
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
