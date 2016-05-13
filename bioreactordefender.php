<?php
include_once 'includes/content/media.php';
head_content("Bioreactor Defender","Flash Game");
?>
			<p>This is a game that was developed for Kenyon Hoag Life Science. The game lived inside the website, which was another Flash piece. You control the Biodefender, a microscopic ship inside a <a href="http://en.wikipedia.org/wiki/Bioreactor" target="_blank"><i class="glyphicon glyphicon-new-window"></i> bioreactor</a>. The goal is to protect the growing <a href="http://en.wikipedia.org/wiki/Hybridoma_technology" target="_blank"><i class="glyphicon glyphicon-new-window"></i>hybridoma</a> in the center of the screen from invaiding bacteria.
			To arm your Biodefender, you have to touch a bacteria in order to produce an antibody that can destroy that particular bacteria.
			The level is complete once the hybridoma secretes antibodies.</p>
<?php
$bioreactorCarousel = array (
		new CarouselInfo("assets/images/bioreactordefender/bioreactordefender_shot1.jpg", "Title screen"),
		new CarouselInfo("assets/images/bioreactordefender/bioreactordefender_shot2.jpg", "Protect the hybridoma!"),
		new CarouselInfo("assets/images/bioreactordefender/bioreactordefender_shot3.jpg", "Don't let bactieria touch it"),
		new CarouselInfo("assets/images/bioreactordefender/bioreactordefender_shot4.jpg", "Rack up bonuses for skill shots")
);

flash_content("BioreactorDefender", "assets/bioreactordefender/BioreactorDefender.swf", 704, 570, false, true, "direct",
		'To play the game, you need to visit this page with Flash enabled. In the meantime, here are some screenshots:', $bioreactorCarousel);
?>
			<h4>Controls</h4>
			<ul class="list-unstyled">
				<li><kbd>Up Arrow</kbd> Moves biodefender forward.</li>
				<li><kbd>Down Arrow</kbd> Moves biodefender backwards.</li>
				<li><kbd>Left Arrow</kbd> Turns the biodefender to it's left</li>
				<li><kbd>Right Arrow</kbd> Turns the biodefender to it's right.</li>
				<li><kbd>Space</kbd> Fires, only if you have touched bacteria</li>
				<li><kbd>Q</kbd> Quits game</li>
				<li><kbd>M</kbd> Mute sound</li>
				<li><kbd>+/=</kbd> Volume Up</li>
				<li><kbd>_/-</kbd> Volume Down</li>
				<li><kbd>Enter</kbd> or <kbd>Return</kbd> Pause/Resume game</li>
			</ul>
			<h4>Credits</h4>
			<ul class="list-unstyled">
				<li><b>Programming</b> - Christopher (Kossa) Pollati</li>
				<li><b>Art</b> - Sean Zwier</li>
				<li><b>Concept</b> Chirs Hoag, Christopher (Kossa) Pollati, Jason Yamauchi, Sean Zwier</li>
			</ul>
<?php end_content(); ?>