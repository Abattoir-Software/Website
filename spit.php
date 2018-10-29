<?php
include_once 'includes/content/media.php';
$pageTitle = "Spit!";
head_content($pageTitle,"for JavaME cell phones");
?>
			<p>Here is a JavaME game designed for Java cell phones. It is based on the card game called &quot;Spit&quot;. The object to to discard all your stock cards as fast as possible. Once the players turns over
			a card from their draw piles, they must try to place a card either one higher or one lower on top of the discard pile. Both player complete simultaneously to get rid of their cards, one card at a time.
			Players continue to &quot;spit&quot; a draw card and get rid of their stock piles until they have none left and ultimately have no cards in their draw and discard piles.</p>
<?php images_captioned("assets/images/spit/spit_p910_ss01.jpg","Spit! demo screen shot 1","<i>Spit!</i> running from KToolbar on an emulated Sony Ericcson P910","assets/images/spit/spit_p910_ss02.jpg","Spit! demo screen shot 2","Early developement shots of showing two sets of card types and card backings.");?>
			Some features of the game:
			<ul>
				<li>Two different styles of cards, classic and multi-color deck, with numbering as either Ace through King or 1 through 13</li>
				<li>Stylus/touch screen support</li>
				<li>Hi-score table</li>
			</ul>
			<p>The game originally started as a reason to learn JavaME and use the touch screen of the phone. The
			game is currently in the works, several features need to be done before a release can be done. Currently,
			the game is designed for the Sony Ericsson P910, but should work on the P800, P900, and P990. Other cell-phone (with
			touch screen support) that are Java based should be able to run it. Work is being done to allow the game to be played
			with the phone keys. The game right now is limitted to a screen size of 180 x 120 due to the size of the cards, but
			there will be versions with smaller and larger cards. One key feature needed is to procedurally generate the cards.
			Loading all the images for the different card set and background is taking up a lot of space. This should be able to
			make the JAR file much smaller.</p>
<?php end_content(); ?>