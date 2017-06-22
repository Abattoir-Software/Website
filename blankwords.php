<?php
include_once 'includes/content/media.php';
$pageTitle = "BlankWords";
head_content($pageTitle,"");
?>
		<div class="center-block" style="text-align:center;width:430px;">
			<h3>Now available on Google Play!</h3>
			<img style="flost:left;padding-bottom:16px;" src="assets/images/blankwords/114x114.png"><br/>
			<div style="float:left;">
				Buy BlankWords<br/>
				<a href="http://play.google.com/store/apps/details?id=com.abattoirsoftware.BlankWords" target="_blank" style="padding:0;"><img src="assets/images/google-play-badge.png" width="215" height="83" style="width:215px;height:83px;"/></a>
			</div>
			<div style="float:left;">
				Or try BlankWords Free<br/>
				<a href="http://play.google.com/store/apps/details?id=com.abattoirsoftware.BlankWordsFree" target="_blank"><img src="assets/images/google-play-badge.png" width="215" height="83" style="width:215px;height:83px;"/></a>
			</div>
			<p><span class="small">Android, Google Play and the Google Play logo are trademarks of Google Inc.</span>
			<br clear="all"/>
			<br/>
		</div>
		<br clear="all"/>

		<div>
			<img src="assets/images/blankwords/Titlescreen.jpg" class="img-responsive pull-left" style="padding-bottom: 15px;padding-right:20px;" alt="BlankWords title screen shot" width="320" height="258" />
			<p>In BlankWords, you will have five chances to guess 5 five-letter words. For each guess, you will get twenty five seconds. You get the first letter of the word and have to fill in the rest. The result of your guess will let you know if it is in the right place or if it is in the word.</p>
			<div style="margin: 0 auto;">
				<img src="assets/images/blankwords/Shot1.jpg" class="img-responsive pull-left" style="padding-bottom: 15px;padding-right:20px;" alt="BlankWords title screen shot" width="160" height="129" />
				<img src="assets/images/blankwords/Shot2.jpg" class="img-responsive pull-left" style="padding-bottom: 15px;padding-right:20px;" alt="BlankWords title screen shot" width="160" height="129" />
			</div>
		</div>

		<br clear="all"/>
		<div>
			<h3>Changelist:</h3>
			<p>V1.0.3 [2017-06-20]
				<ul>
					<li>You must enter valid words (no more entering AEIOU)!</li>
				</ul>
			</p>
			<p>V1.0.2 [2017-03-14] (BlankWords-Free only)
				<ul>
					<li>Fixes placement of info bar on game screen</li>
					<li>Adjusts placement of Instructions and Settings</li>
				</ul>
			</p>
			<p>V1.0.1 [2017-03-02 from GDC 2017!]
				<ul>
					<li>Initial Release!</li>
				</ul>
			</p>

		</div>

		<br clear="all"/>
<a data-toggle="collapse" id="historyToggle" data-target="#history" href="#history" aria-expanded="false" aria-controls="history">Click to toggle history...</a>
			<div class="collapse" id="history" name="history">
				<h3>History: Java project</h3>
				<img src="assets/images/blankwords/old/blankwords-title.jpg" class="img-responsive center-block" style="padding-bottom: 15px;" alt="BlankWords title screen shot" width="640" height="456" />
				<p><i>BlankWords</i> is a word game where you have to guess the five letter word before time runs out. Guess the word, and the letters will let you now if it is
				in the correct place or if the letter is in the word but not in the right position.</p>
	<?php images_captioned("assets/images/blankwords/old/blankwords-game01.jpg", "BlankWords screen shot 1", "Screen shot of <i>BlankWords</i> main game screen","assets/images/blankwords/old/blankwords-game02.jpg", "BlankWords screen shot 2","Another shot of <i>BlankWords</i>");?>
				</p>This was created for a final project in my Java II Programming class, which required using a database to sort information of the program.  So, in about a week, I whipped up this program, which uses a Microsoft Access database to keep track of all the words in
				the game. The database also stores information about the player, such as their real name, e-mail address, username and password. The game will also
				keep track of the top player scores.</p>
			</div>
<?php end_content($pageTitle); ?>