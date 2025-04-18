<?php
class CarouselInfo {
	public $image;
	public $caption;

	function __construct($image, $caption) {
		$this->image = $image;
		$this->caption = $caption;
	}
}

function write_media($title, $descript, $link, $image, $useBorder = false, $moveImage = false) { ?>
				<div class="media">
<?php if($moveImage) { ?>
					<img class="media-object visible-xs hidden-sm hidden-md hidden-lg<?php if($useBorder) { echo " itemIcon"; } ?>" src="<?=$image?>" alt="">
<?php } ?>
					<div class="media-left">
<?php if($link!="") { ?>
						<a href="<?=$link?>">
	<?php } ?>
						<img class="media-object<?php if($moveImage) { echo ' hidden-xs visible-sm-block visible-md visible-lg'; }?><?php if($useBorder) { echo " itemIcon"; } ?>" src="<?=$image?>" alt="">
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

function end_content($additionalContent = "") { ?>
			</div>
		</div>
	</div>
<?php
include_once 'includes/content/footer.php';
if($additionalContent!=="") { echo $additionalContent; }
?>
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

function flash_content($title, $swfFile, $width=640, $height=480, $fullScreen=true, $fullScreenInteractive=false, $wmode="window", $flashAltText="Sorry, this content requires Flash", $carouselData=NULL) { ?>
<div>
	<ul class="nav nav-tabs" role="tablist" id="info-tabs">
	    <li role="presentation" class="active"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Screenshots</a></li>
	    <li role="presentation"><a href="#flashgame" aria-controls="flashgame" role="tab" data-toggle="tab">Flash Game</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="images">
<?php
	if($carouselData!=null) {
		makeFlashCarousel($flashAltText, $carouselData, $title);
	}
?>
	</div>
	<div role="tabpanel" class="tab-pane" id="flashgame">
		<div class="center-block">
			<div id="flash_content" style="display: block;text-align: center;">
<?php
	//$flashAltText = str_ireplace("Flash", '<a href="http://www.adobe.com/go/getflashplayer" class="btn btn-sm btn-warning">Flash</a>', $flashAltText);
	$flashAltText = str_ireplace("Ruffle", '<a href="https://ruffle.rs/" class="btn btn-sm btn-primary">Ruffle</a>', $flashAltText);
?>
					<h4><?=$flashAltText?></h4>
				</div>
			</div>
<!--
			<script src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
			<script>
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
				if(window.chrome) { swfobject.ua.pv = [100,0,0]; }
				swfobject.embedSWF("<?=$swfFile?>","flash_content",<?=$width?>,<?=$height?>, "9.0.0", false, flashvars, params, attributes);
			</script>
-->
			<!-- Thanks to https://www.purplesquirrels.com.au/2023/12/bringing-life-back-to-old-flash-content/#:~:text=Switching%20the%20SWFObject%20embeds%20to,);%20const%20player%20=%20ruffle. -->
			<script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
			<!-- create a Ruffle player, add to the div, load the SWF -->
			<script>
				window.RufflePlayer = window.RufflePlayer || {};
				window.addEventListener("load", (event) => {
					const ruffle = window.RufflePlayer.newest();
					const player = ruffle.createPlayer();
					const container = document.getElementById("flash_content");
					container.appendChild(player);
					player.load("<?=$swfFile?>");
				});
			</script>
		</div>
	</div>
</div>
<?php
}

function makeFlashCarousel($flashAltText,$data,$id="generic") {
?>
	<div id="carousel-<?=$id?>" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
<?php
	for($i = 0; $i<count($data);$i++) {
		echo "\t\t\t" . '<li data-target="#carousel-' . $id . '" data-slide-to="' . $i . '"';
		if($i==0) {
			echo ' class="active"';
		}
		echo '></li>' . "\n";
	}
?>
		</ol>
		<div class="carousel-inner">
<?php
	$count = 0;
	foreach($data as $item) {?>
			<div class="item<?php if($count==0) { echo " active"; $count++; } ?>">
				<img src="<?=$item->image?>" class="center-block" alt="Screen shot titled: <?=$item->caption?>">
				<div class="carousel-caption">
					<h3><?=$item->caption?></h3>
				</div>
			</div>
<?php } ?>
		</div>
		<a class="left carousel-control" href="#carousel-<?=$id?>" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-<?=$id?>" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
<?php
}
?>
