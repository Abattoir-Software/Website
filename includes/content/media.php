<?php
function write_media($title, $descript, $link, $image, $useBorder = false, $moveImage = false) { ?>
				<div class="media">
<?php if($moveImage) { ?>
					<img class="media-object visible-xs hidden-sm hidden-md hidden-lg<?php if($useBorder) { echo " itemIcon"; } ?>" src="<?=$image?>" alt="">
<?php } ?>
					<div class="media-left">
<?php if($link!="") { ?>
						<a href="<?=$link?>">
	<?php } ?>
						<img class="media-object<?php if($moveImage) { echo 'hidden-xs visible-sm-block visible-md visible-lg'; }?><?php if($useBorder) { echo " itemIcon"; } ?>" src="<?=$image?>" alt="">
<?php if($link!="") { ?>
						</a>
<?php } ?>
					</div>
					<div class="media-body">
<?php if($link!="") { ?>
						<a href="<?=$link?>">
	<?php } ?>
						<h1 class="media-heading"><?=$title?></h1>
<?php if($link!="") { ?>
						</a>
<?php } ?>
<?php if($descript!="") { ?>
						<p><?=$descript?></p>
<?php } ?>
					</div>
				</div>
<?php
}

function head_content($title, $blurb = "", $altHeader = "") {
	include_once 'includes/content/common_head.php';
	write_header($title);
	include_once 'includes/analyticstracking.php';
	include_once 'includes/content/menu.php';
	if($altHeader=="") {
		start_content($title,$blurb);
	} else {
		start_content($altHeader,$blurb);
	}
}

function start_content($heading, $blurb = "") {
?>
	<div class="container-fluid">
		<div id="headerContent">
			<div class="page-header">
				<h1><?=$heading?></h1>
<?php if($blurb!="") { ?>
				<p><?=$blurb?></p>
<?php } ?>
			</div>
			<div id="content">
<?php
}

function end_content() { ?>
			</div>
		</div>
	</div>
<?php include_once 'includes/content/footer.php'; ?>
</body>
</html>
<?php
}

function write_splat($number) {
	$image = "40px_07";

	switch($number) {
		case 2:
			$image = "40px_02";
			break;
		case 3:
			$image = "40px_01";
			break;
		case 4:
			$image = "40px_05";
			break;
		case 5:
			$image = "40px_03";
			break;
		case 6:
			$image = "40px_01";
			break;
		default:
			$image = "40px_07";
			break;
	}
	return "assets/images/layout/drops/" . $image . ".png";
}

function image_captioned($image,$imageAlt,$caption) { ?>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="thumbnail">
							<img src="<?=$image?>" alt="<?=$imageAlt?>" />
							<div class="caption text-center">
								<p><?=$caption?></p>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
<?php
}

function images_captioned($image, $imageAlt, $caption, $image2, $imageAlt2, $caption2) { ?>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="thumbnail">
							<img src="<?=$image?>" alt="<?=$imageAlt?>" />
							<div class="caption text-center">
								<p><?=$caption?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
							<img src="<?=$image2?>" alt="<?=$imageAlt2?>" />
							<div class="caption text-center">
								<p><?=$caption2?></p>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
<?php
}

function flash_content($title, $swfFile, $width=640, $height=480, $fullScreen=true, $fullScreenInteractive=false, $wmode="window") { ?>
			<div align="center">
				<div id="flash_content">
					<h4>Sorry, this page requires Flash</h4>
				</div>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript"></script>
			<script type="text/javascript">
				var flashvars = {};
				var params = {};
				params.quality = "high";
				params.allowscriptaccess = "sameDomain";
				params.wmode="<?=$wmode?>";
<?php if($fullScreenInteractive) { ?>
				params.allowFullScreenInteractive = "true";
<?php } elseif($fullScreen) {?>
				params.allowFullScreen = "true";
<?php } ?>
				var attributes = {};
				swfobject.embedSWF("<?=$swfFile?>","flash_content",<?=$width?>,<?=$height?>, "9.0.0", false, flashvars, params, attributes);
			</script>
<?php
}
?>
