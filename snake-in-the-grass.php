<?php
include_once 'includes/content/media.php';
$pageTitle = "Snake In The Grass!";
head_content($pageTitle,'<span class="badge">Preview</span> Snake Game - V0.03 - Mission Mode and preliminary controller support!');
?>
			<p>The game is fairly easy to play, especially if you've played games like <a href="https://en.wikipedia.org/wiki/Nibbles_(video_game)" target="_blank"><i class="glyphicon glyphicon-new-window"></i> <i>Nibbles</i></a> or <a href="https://en.wikipedia.org/wiki/Rattler_Race" target="_blank"><i class="glyphicon glyphicon-new-window"></i> <i>Rattler Race</i></a> or the <a href="https://en.wikipedia.org/wiki/Snake_(video_game)" target="_blank"><i class="glyphicon glyphicon-new-window"></i> <i>Snake</i></a> game that
			comes with many cell phones. Game play is simple and addictive.</p>
			<p>Control your snake to start eating food to grow.  Once you start moving, there's no stopping your snake.  You can't run into the bushes, other players,
			or yourself! The faster you move, the more points you'll get. The smaller the fruit the more points it's worth. The more fruit you eat, the bigger you get and then you can move on to the next level.</p>
<?php
$imageBase = "assets/images/snake-in-the-grass/";
$snakeCarousel = array (
		new CarouselInfo($imageBase."snake-in-the-grass_shot1.jpg", "Title screen"),
		new CarouselInfo($imageBase."snake-in-the-grass_shot2.jpg", "Watch out for those walls!"),
		new CarouselInfo($imageBase."snake-in-the-grass_shot3.jpg", "Multiplayer action"),
		new CarouselInfo($imageBase."snake-in-the-grass_shot4.jpg", "Go go go!")
);

flash_content("SnakeInTheGrass", "assets/sitg/SnakeInTheGrass.swf", 640, 480, false, true, "direct",
		"Ruffle has almost gotten all the emulation working for this!", $snakeCarousel);
?>
			<h4>Speed</h4>
			<p>How fast your snake will move. Currently, the snake speed does not increase throughout play. The faster your snake moves, the more points each fruit is worth.</p>
			<br/>
			<h4>Fruit Mode</h4>
			<p>Crazy Fruit will move the fruit around the field. If you select Crazy Fruit, you can then select how long before it moves.</p>
			<br/>
			<h4>Game Modes (for more than one player)</h4>
			<ul class="list-unstyled">
				<li><b>Gobble and Grow</b> - Everyone keeps playing until everyone is dead</li>
				<!--
				<li><b>Score King</b> - Winner is declaired by who ever has the highest score.</li>
				-->
				<li><b>Mission Mode</b> - Snakes will only grow if they get the fruit they are craving.</li>
			</ul>
			<br/>
			<h4>Menu Controls</h4>
			<ul class="list-unstyled">
				<li><kbd>Mouse</kbd> Choose menu items</li>
				<li><kbd>Space</kbd> or <kbd>Mouse Click</kbd> or <kbd>A Button</kbd> Selects Menu Item</li>
				<li><kbd>Backspace/Delete</kbd> or <kbd>B Button</kbd> Previous Menu Item</li>
				<li><kbd>F</kbd> Full screen</li>
				<li><kbd>Joystick 1</kbd> XBox/XboxOne Joystick wired
			</ul>
			<br/>
			<h4>Controller Support</h4>
			<p>V0.02 adds Flash's GameController support and XBox/XboxOne controllers connected via USB should be dectected.</p>
			<br/>
			<h4>In Game Controls</h4>
			<ul class="list-unstyled">
				<li><kbd>F</kbd> Full screen</li>
				<li><kbd>Space</kbd> Pause/Resume game</li>
				<li><kbd>Del</kbd> Quits game</li>
			</ul>
			<br/>
			<table class="table table-bordered">
				<tr>
					<th></th>
					<th>Up</th>
					<th>Down</th>
					<th>Left</th>
					<th>Right</th>
				</tr>
				<tr>
					<th><img src="assets/images/snake-in-the-grass/small_snake1.png" alt="image of green snake for player 1"> Player 1</th>
					<td><kbd>Up Arrow</kbd></td>
					<td><kbd>Down Arrow</kbd></td>
					<td><kbd>Left Arrow</kbd></td>
					<td><kbd>Right Arrow</kbd></td>
				</tr>
				<tr>
					<th><img src="assets/images/snake-in-the-grass/small_snake2.png" alt="image of yellow snake for player 2"> Player 2</th>
					<td><kbd>W</kbd></td>
					<td><kbd>S</kbd></td>
					<td><kbd>A</kbd></td>
					<td><kbd>D</kbd></td>
				</tr>
				<tr>
					<th><img src="assets/images/snake-in-the-grass/small_snake3.png" alt="image of blue snake for player 3"> Player 3</th>
					<td><kbd>NUM 8</kbd></td>
					<td><kbd>NUM 2</kbd></td>
					<td><kbd>NUM 4</kbd></td>
					<td><kbd>NUM 6</kbd></td>
				</tr>
				<tr>
					<th><img src="assets/images/snake-in-the-grass/small_snake4.png" alt="image of red snake for player 4"> Player 4</th>
					<td><kbd>I</kbd></td>
					<td><kbd>K</kbd></td>
					<td><kbd>J</kbd></td>
					<td><kbd>L</kbd></td>
				</tr>
			</table>
			<h4>More to come...</h4>
			<ul class="list-unstyled">
				<li>More joystick support/controller configs</li>
				<li>Desktop/Android/iOS version</li>
				<li>High score records</li>
				<li>More levels</li>
				<li>Play against the computer</li>
				<li>Play against others</li>
			</ul>
			<a data-toggle="collapse" id="historyToggle" data-target="#history" href="#history" aria-expanded="false" aria-controls="history">Click to toggle history...</a>
			<div class="collapse" id="history" name="history">
				<h3>History: Previous Amiga versions</h3>
				<h4>Origins</h4>
				<p><i>Snake In The Grass!</i> started on a Christmas day in the early 1990's when I wanted to play <a href="https://en.wikipedia.org/wiki/Nibbles_(video_game)" target="_blank"><i class="glyphicon glyphicon-new-window"></i> <i>Nibbles</i></a> on my Amiga. There wasn't anything like it on
				<a href="http://aminet.net/" target="_blank"><i class="glyphicon glyphicon-new-window"></i> <i>Aminet</i></a> so I started messing around in <a href="https://en.wikipedia.org/wiki/AMOS_(programming_language)" target="_blank"><i class="glyphicon glyphicon-new-window"></i> <i>AMOS Professional</i></a> on my A1200.
				It was my first time working on a game myself. I started realizing how much work really goes into games, after seeing how slow it was to always draw up to 80 bobs for 2 player snakes every frame. I had to think about optimizing it so I only moved 2 of the bobs at a time and changing the palettes so that I could use a sprite for the fruit, just to squeeze out a little more speed.
				It stated to become a fun game for my friends and I to play, so I though about releasing it on Aminet, but never actually posted it up there, just kept it on my personal site.
				<h4>AMOS Demo V0.01</h4>
<?php images_captioned("assets/images/snake-in-the-grass/snake-in-the-grass-demo-ss02.png", "Snake in the Grass! AMOS Demo screen shot 1", "<i>Snake In The Grass!</i> (AMOS Demo V0.01)", "assets/images/snake-in-the-grass/snake-in-the-grass-demo-ss01.png", "Snake in the Grass! AMOS Demo screen shot 2", "Two player madness of <i>Snake In The Grass</i>!"); ?>
				<p>The idea of the game is simple, move around and eat the fruit.  All you have to do is avoid the bushes and yourself.
				You should be able to fiugre out how to play.</p>
				<b>Notes on the &quot;Option Screen&quot;:</b>
				<ul>
					<li>Select what you want by either typing in the number, using a joystick in the &quot;Game Port&quot;, or the arrow keys</li>
					<li>Snake speed: The higher the number, the faster it will move</li>
					<li>Crazy Fruit: Select this and the fruit will move.  The speed refers to how long it will stay in one place</li>
					<li>2 Player modes: In &quot;1&quot; mode, the game is over when one of the players die.  The other you'll be able to play until
					both players die</li>
				</ul>
				<br />
				<b>Current problems in AMOS Demo V0.01:</b><br />
				<ul>
					<li>Since this was made in AMOS, some Amiga users with graphic cards might experience problems.</li>
					<li>If it appears that the game have frozen your WorkBench, try to press Left Amiga+A.</li>
					<li>If your mouse starts moving, hit it again and your screen should turn to <i>Snake In The Grass!</i></li>
					<li>Sometime the bigger fruits gets &quot;lodged&quot; in bushes.  This has been fix, (might release a fixed AMOS version)</li>
					<li>Game does not currently run on UAE (V1.0.0) </li>
				</ul>
				<b><i>(Mostly in 2 Player games)</i></b><br />
				<ul>
					<li>Game slows down when both snakes are pretty big (AMOS limit)</li>
					<li>If one player's snake is on the space were the other player's snake is supposed to reappear,
					the other player will continue to die until the first player moves</li>
					<li>Sometimes you can pass through each other if you cross exactly in between cells</li>
				</ul>
				<b>Things that were planned to be added:</b><br />z
				<ul>
					<li> High score records</li>
					<li> Play against the computer</li>
					<li> More levels</li>
					<li> More game modes</li>
					<li> Smaller, neater code  :)</li>
				</ul>
				<table class="table" cellspacing="5">
					<tr>
						<td><b>Snake In The Grass! (AMOS Demo)</b></td>
						<td>Size </td><td>Version </td><td>Date </td><td>OS </td>
					</tr>
					<tr>
						<td><a href="assets/downloads/computer-works/SITG_0-01.lha"><img src="assets/images/layout/icons/lha.png" width="32" height="22" border=0 align="left" />SITG_0-01.lha</a></td>
						<td>81k</td><td>0.1</td><td>03-Feb-2002</td><td>Amiga OS 2+</td>
					</tr>
					<tr>
						<td><a href="assets/downloads/computer-works/SITG_0-01.lzx"><img src="assets/images/layout/icons/lzx.png" width="32" height="22" border=0 align="left" />SITG_0-01.lzx</a></td>
						<td>76k</td><td>0.1</td><td>03-Feb-2002</td><td>Amiga OS 2+</td>
					</tr>
				</table>
				<h4>AmigaOS 4 and C/C++ version</h4>
				This was originally written in AMOS Professional on an Amiga 1200. It started out a way to play a game like <i>Nibbles</i> on my Amiga.
				Evenutally, little more and more was added. Since AMOS Pro, never supported the AGA chipset on the Amiga, I decided to use the game
				as a way to learn how to program in C. I started writing a verison of Snake In The Grass! in C using RTGMaster/ChunkyPPC thanks to
				Steffen Haeuser.<br />
				<br />
<?php image_captioned("assets/images/snake-in-the-grass/snake-in-the-grass-os4-menu.png", "Snake in the Grass! on OS 4 menu screen shot", "Screen shot of the start up page of <i>Snake In The Grass!</i> rewritten in C. This version allows for a 640x480 256 color screen.")?>
<?php image_captioned("assets/images/snake-in-the-grass/snake-in-the-grass-os4-play.png", "Snake in the Grass! on OS 4 game play screen shot", "Another screen shot of the &quot;C&quot; version of <i>Snake In The Grass!</i> allows up to four players to play together.")?>
				<p>Eventually, I ran into a slight problem with the double buffer method used in those libraries, which were very
				different than the way AMOS kind of functions were working. Slowly, I started to rewrite all the code handling screens and drawing
				functions from these libraries and created my own for making sprites and various graphics routines. Then it was put on a shelf for
				a long time. Once I started beta testing and programming for Amiga OS 4, I wanted to get back into game developement. I thought
				about how much fun programming in AMOS was and how easy it was to use. I decided to make a library of commands that were similar
				to the way AMOS commands worked. This lead to the <a href="alf.html" target="_blank"><i class="glyphicon glyphicon-new-window"></i> Project ALF</a>.</p>
			</div>
<?php end_content(); ?>
