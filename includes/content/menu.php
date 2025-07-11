<?php
global $currentPage;
$currentPage = basename($_SERVER['PHP_SELF']);

function linkOrActive($link,$title) {
	global  $currentPage;
	if($link==$currentPage) {
		echo '<li class="active"><a href="' . $link . '">' . $title . '</a></li>' . "\n";
	} else {
		echo '<li><a href="' . $link . '">' . $title . '</a></li>' . "\n";
	}
}
?>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index"><img src="assets/images/abattoir-logo-small.png" style="height: 27px;padding-right: 10px;margin-top: -2px;" class="pull-left" alt="Abattoir Software logo">Abattoir Software</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<?php linkOrActive("games","All");?>
							<li role="separator" class="divider"></li>
							<?php linkOrActive("blankwords","BlankWords");?>
							<li role="separator" class="divider"></li>
							<?php linkOrActive("snake-in-the-grass","Snake In The Grass!");?>
							<?php linkOrActive("bioreactordefender","Bioreactor Defender");?>
							<?php linkOrActive("brickbuster","BrickBuster");?>
							<li role="separator" class="divider"></li>
							<?php linkOrActive("galaxy-arena-earth","Galaxy Arena Earth");?>
							<?php linkOrActive("escape-to-new-york","Escape to New York");?>
						</ul>
					</li>
					<?php linkOrActive("portfolio","Portfolio");?>
					<?php linkOrActive("archive","Archive");?>
					<?php linkOrActive("resume","Resume");?>
					<?php linkOrActive("contact","Contact");?>
				</ul>
			</div>
		</div>
	</nav>
