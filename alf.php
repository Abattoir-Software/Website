<?php
include_once 'includes/content/media.php';
$pageTitle = "Project ALF";
head_content($pageTitle, "AM*S Like Functions");
?>
			<p>One of the reasons I got so interested in game programming was because of AMOS Professional for Amiga computers. AMOS was easy to learn and fun to use. It was easy to open a screen and have a joystick move objects around. However,
			AMOS was very limitted. There was no real support for Amiga's AGA chipset to allow 256 screens and some of AMOS's tricks caused problems on upgraded Amigas. Eventually, I stopped programming with AMOS and started to mess around with C.
			While trying to make a C version of one of my AMOS games (or at least one that was almost a &quot;complete&quot; game), I came across Steffen Haeuser's RTGMaster library. This made the whole creating screens and drawing graphics a whole lot easier.
			Soon, Steffen released chunkyppc.library which had the ease of creating screens like RTGMaster, but allowed PowerPC equiped Amiga to use the processor to speed up graphics opperations. I used this to recreate some of the nice little functions
			of AMOS and started to recreate <i>Snake in the Grass</i>. Once I had some of the routines for drawing blitter objects, drawing icons, and reading input, I remembered how much fun and quick a game could be put together. Then I though, why
			not make a library which has a lot of the functions like AMOS had, maybe include things for networking and 3D graphics. This then turned into a huge project that takes up much of my spare time. It has also been an interesting learnign
			experience, dealing with graphics on such a low level.<br />
			</p>
			ALF is a standard library for AmigaOS 4. Some of the functions that are currently working
			<ul>
				<li><b>Screens</b> - ALF is able to open screens of different depths (8,15/16/24,32 bit)</li>
				<li><b>Banks</b> - Creating banks is implemented as well as loading some AMOS banks, like icons and BOBs/Sprites</li>
				<li><b>Icons</b> - Blocks of graphics, often used for things like tile mapping are supported.</li>
				<li><b>Sprites/BOBs</b> - While Sprites are not implemented using hardware sprites, blitter object are. One nice feature is that if AMOS BOBs are loaded, they will have their palette converted to look the same no matter what the screen's color depth is.</li>
			</ul>
			<p>
			While ALF is only usable in C/C++ right now, I would like to have made a BASIC interpreter that would be able to run on different platforms and utilize their abilities. Many people may be saying that SDL does all this and more, but
			I wanted to do something I could call my own.
			</p>
			Additional ideas were:
			<ul>
				<li>Add support for networking</li>
				<li>Make a version for PC using DirectX</li>
				<li>Make a version for Mac OS X using Cocoa</li>
				<li>Possible Unix/Linux verison</li>
			</ul>
<?php end_content(); ?>