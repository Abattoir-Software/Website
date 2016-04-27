<?php
include_once 'includes/content/media.php';
head_content("BlankWords","Java word game");
?>
			<img src="assets/images/blankwords/blankwords-title.jpg" class="img-responsive center-block" style="padding-bottom: 15px;" alt="BlankWords title screen shot" width="640" height="456" />
			<p><i>BlankWords</i> is a word game where you have to guess the five letter word before time runs out. Guess the word, and the letters will let you now if it is
			in the correct place or if the letter is in the word but not in the right position.</p>
<?php images_captioned("assets/images/blankwords/blankwords-game01.jpg", "BlankWords screen shot 1", "Screen shot of <i>BlankWords</i> main game screen","assets/images/blankwords/blankwords-game02.jpg", "BlankWords screen shot 2","Another shot of <i>BlankWords</i>");?>
			</p>This was created for a final project in my Java II Programming class, which required using a database to sort information of the program.  So, in about a week, I whipped up this program, which uses a Microsoft Access database to keep track of all the words in
			the game. The database also stores information about the player, such as their real name, e-mail address, username and password. The game will also
			keep track of the top player scores.</p>
<?php end_content(); ?>