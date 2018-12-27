<?php
include_once 'includes/content/media.php';
$pageTitle = "BrickBuster";
head_content($pageTitle,'<span class="badge">Preview</span> Flash breakout quest');
?>
			<p>
			This is a early preview of a work in progress of a breakout game written in ActionScript3. The goal of it was to learn ActionScript 3 and to not use the Flash IDE to make the game.
			None of the game uses animations or art work created in Flash. All of it is done through code with the help of some textures and some ActionScript 3 filter effects. The levels are generated
			from information stored in an XML file. So, after about two weeks of tinkering aroud with AS3 and FlexBuilder, this is what I came up with. There are definately
			some bugs and a lot of work needed, but this is just an early preview of the game. The graphics were secondary to getting some the main systems working, so only level 2 on this preview shows how
			the backgrounds should be more than just a bland wall and make it feel like you are playing in something other than a box. In level 4, watch out for falling rocks.
			</p>
			<div align="center">
<?php
$brickbusterCarousel = array (
		new CarouselInfo("assets/images/brickbuster/brickbuster_shot1.jpg", "Bounce through sides of the screen"),
		new CarouselInfo("assets/images/brickbuster/brickbuster_shot2.jpg", "Stay away from the black hole!"),
		new CarouselInfo("assets/images/brickbuster/brickbuster_shot3.jpg", "Falling rocks remove bricks for you"),
);

flash_content("BrickBuster", "assets/brickbuster/BrickBuster.swf", 640, 480, true, false, "window",
		'To play the game, you need to visit this page with Flash enabled.', $brickbusterCarousel );
?>
			</div>
            <h4>Controls</h4>
            <ul class="list-unstyled">
            	<li><kbd>Mouse</kbd> Moves the paddle. Try to keep the ball in play. Black areas are bad.</li>
    	        <li><kbd>Space</kbd> or <kbd>Mouse Click</kbd> Releases ball</li>
 	            <li><kbd>ESC</kbd> Quits level</li>
        	    <li><kbd>Return</kbd> Pauses game</li>
			</ul>
			<p><b>More to come:</b> Remember, this is only a preview version. There are many more features and an editor that need to be added so check back to see what's new!</p>
<?php end_content(); ?>