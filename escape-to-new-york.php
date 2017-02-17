<?php
include_once 'includes/content/media.php';
$pageTitle = "Escape To New York";
head_content($pageTitle, "A final project for an &quot;Art in New York&quot; class.");
?>
				<div style="height:640" id="gameTable">
					<table width="800" style="background-image:url(assets/images/escape-to-new-york/background.jpg);background-repeat:no-repeat;" bgcolor="#333333" align="center" cellpadding="0" cellspacing="0">
						<tr height="60">
							<td width="80">&nbsp;</td>
							<td width="640">&nbsp;</td>
							<td width="80">&nbsp;</td>
						</tr>
						<tr>
							<td width="80">&nbsp;</td>
							<td width="640">
<?php
$escapeCarousel = array (
		new CarouselInfo("assets/images/escape-to-new-york/escape-to-new-york_shot1.jpg", "Title screen"),
		new CarouselInfo("assets/images/escape-to-new-york/escape-to-new-york_shot2.jpg", "How do you get there?"),
		new CarouselInfo("assets/images/escape-to-new-york/escape-to-new-york_shot3.jpg", "Visit a museum"),
		new CarouselInfo("assets/images/escape-to-new-york/escape-to-new-york_shot4.jpg", "What play to see?"),
		new CarouselInfo("assets/images/escape-to-new-york/escape-to-new-york_shot5.jpg", "Getting hungry?"),
		new CarouselInfo("assets/images/escape-to-new-york/escape-to-new-york_shot6.jpg", "Did you make it home?"),
);

flash_content("Escape To New York", "assets/flash/EscapeToNewYork.swf", 640, 480, true, false, "window", "You need Flash enabled to play this game", null);
?>
							</td>
							<td width="80">&nbsp;</td>
						</tr>
						<tr height="60">
							<td width="80">&nbsp;</td>
							<td width="640" valign="top">
								<span class="text-center text-muted">
								&copy; Copyright 2005 by Christopher Pollati<br />
								For final project in &quot;Art In New York&quot; Fall 2005 Class at <a href="http://www.bloomfield.edu">Bloomfield College</a></span>
							</td>
							<td width="80">&nbsp;</td>
						</tr>
					</table>
				</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function () {
	if(swfobject.getFlashPlayerVersion().major === 0) {
		$("#gameTable").html(`
<?php makeFlashCarousel('To play the game, you need to visit this page with Flash enabled. In the meantime, here are some screenshots:', $escapeCarousel, true); ?>
		`);
	}
});
</script>
<?php end_content($pageTitle); ?>