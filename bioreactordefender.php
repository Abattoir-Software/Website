<?php
include_once 'includes/content/media.php';
$pageTitle = "Bioreactor Defender";
head_content($pageTitle,"Flash Game");
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
		"This uses Ruffle to emulate Flash! Some fonts aren't rendered properly", $bioreactorCarousel);
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
			<a data-toggle="collapse" id="historyToggle" data-target="#history" href="#history" aria-expanded="false" aria-controls="history">Click to read Post Mortem originally from the Kenyon Hoag Website...</a>
			<div class="collapse" id="history">
				<div class="itemhead">
					<h3>Bioreactor Defender Postmortem</h3>
					<div class="chronodata">March 22nd, 2010</div>
					<div><small>Recovered from <a href="https://web.archive.org/web/20100326144439/http://www.kenyonhoag.com:80/blog/uncategorized/bioreactor-defender-postmortem">https://web.archive.org/web/20100326144439/http://www.kenyonhoag.com:80/blog/uncategorized/bioreactor-defender-postmortem</a></small></div>
					<div class="storycontent">
						<p style="text-align: justify;">
							Wondering why there is a game on our website? In this game postmortem, some of the reasoning behind why a
							game was chosen is explained. It will also let you know some of good times and bad times during the development.
						</p>
						<!--
						<p style="text-align: center;">
							<img class="size-medium wp-image-181 aligncenter" title="BioreactorDefender" src="http://www.kenyonhoag.com/blog/wp-content/uploads/2010/03/BioreactorDefender-300x242.jpg" alt="" width="300" height="242" />
						</p>
						-->
						<p>
							When we were coming up with ideas for a revamp of our website, we had several ideas. The one that struck us was the idea of having a game in the site. This would allow
							us to display a variety of abilities in programming and design. Yet we also wanted to showcase the fact that we have intimate knowledge
							in the field of life science. We also did not want to make the game a separate piece, but have it integrated as part of the site. The game
							was to become the centerpiece of our website. With this in mind, we also decided that we wanted the user to feel free to click on any of
							the links at anytime without interfering with the game. So it was decided that the game should pause if someone clicks a link, and it
							should probably be controlled with the keyboard. We also plan to eventually have different games that users could select and since our
							site was going to be Flash, we might as well build them as separate Flash pieces and have our site load the game.
						</p>
						<p>
							The game development team consisted of one programmer, one artist, and two designers with scientific and marketing knowledge.
							FlexBuilder 3 was used for all the game coding, and all the art assets were made in Illustrator by the designer, and then brought
							into Flash. Audacity was used for modifying and saving sounds. All the work for the game was done on Macs.
						</p>
						<h4>What went wrong:</h4>
						<p><b>1. Not nailing down the concept from the beginning.</b></p>
						<!--
						<p>
							<img class="size-thumbnail wp-image-182 alignright" title="Prototype1" src="http://www.kenyonhoag.com/blog/wp-content/uploads/2010/03/Prototype1-150x150.jpg" alt="" width="135" height="135" />
						</p>
						-->
						<p>
							The hardest part of this project was coming up with the right game design. One of the first ideas for the game was very scientifically
							accurate. The game was simple, float around an agar plate and acquire other cells to grow your culture. However, it was too simple and we
							felt that it was not compelling enough to keep people&#8217;s interest.
						</p>
						<p>
							The next version involved a a mad scientist creating a spaceship that would be teleported into a bioreactor. The scientist would then
							try to collect nutrients to help a hybridoma cell grow while trying to blast away bacteria. Once the hybridoma grew to a certain size, it
							would begin to irradiate antibodies, which the scientist could use to help fend off stray bacteria. These bacteria, which also fed off the
							same nutrients, would try to attack your hybridoma. If the bacteria were to eat too much they would spontaneously begin to
							multiply. Luckily, your mad scientist created a two layered force field to protect it. While it was an interesting concept and fairly
							fun to play, it was more pick and choose which elements of real life science we wanted and making it fit into a fantasy game.
						</p>
						<!--
						<p>
							<img class="size-thumbnail wp-image-183 alignright" title="Prototype2" src="http://www.kenyonhoag.com/blog/wp-content/uploads/2010/03/Prototype2-150x150.jpg" alt="" width="135" height="135" />
						</p>
						-->
						<p>
							This led to what is now Bioreactor Defender. We decided that we needed to try and simplify the game and make it more scientifically
							accurate. Of course we needed to keep some element of fantasy to the game to make it interesting to people who were not scientists. We all
							liked the idea of the spaceship, the antibodies and a growing hybridoma cell. After a few more talks we finally agreed upon the
							game mechanics after spending a good month of working on other things.
						</p>
						<p><b>2. Large span of time not working on game</b> </p>
						<p>
							There was a point of almost 2 months where the project was put on the back burner and no coding was done on the game. Trying to jump
							back into the code after a such a long time is hard to explain to non-programmer. It&#8217;s almost like not riding a bike for a really
							long time, and then having to ride again, uphill while wearing 70 pounds of camping equipment in a back pack. While there may be
							comments and documentation on what something does, you slowly start to put together why you chose to do something one way and not
							another.
						</p>
						<p><b>3. Forgetting about Flash&#8217;s security features</b></p>
						<p>
							We though it would be nice to have the game run in full-screen. So after dropping in the code for full-screen, we thought we would
							finally be done. Then I tried playing the game in full screen and finally remembered that Flash does not allow you to use the entire
							keyboard in full-screen mode. This lead to having to include the volume controls, a pause/resume button, and a quit button to the
							display . Initially, we only wanted the score to be visible, allowing the site to be the only other static visuals on screen. We also had
							to modify our keyboard controls slightly, and modify the instructions. Another thing that had to be changed was that a virtual
							keyboard had to be added for people to enter their initials for those that are playing in full screen.
						</p>
						<h4>What went right:</h4>
						<p><b>1. Having people with knowledge to design concepts</b></p>
						<p>
							It was great to have people experienced with science and marketing involved in the development of the game. Without being focused
							primarily on the game, they brought to the table information about topics that would make this game appeal to both scientist and those
							who work in the life science industry.
						</p>
						<p><b>2. Working with the right tools for the right job</b></p>
						<p>
							Working in Illustrator helped our artist create the assets quickly. Using Flash to import them and set them up to be used with
							FlexBuilder made getting them to interact smooth and simple. Also, when I started programming this project I decided to use Subversion
							to keep track of all the files involved in this project. Since the concept changed a few times, it was nice to be able to go back
							through previous revisions and pluck out useful code from the few prototypes that were made.
						</p>
						<p><b>3. Total project management</b></p>
						<p>
							After working at a large console game studio, it was so nice to get away from having status meetings regarding bugs or what needs to be
							worked on now. For the most part, all I had to do was program and know where I was going with the code.
						</p>
						<p><b>4. Ability to work on other projects</b></p>
						<p>
							Since we are not a game company, it was nice to be able to work on other types of projects when this one started getting frustrating.
							While at one point this became a big negative, it was nice that there was an ability to take a break from the programming. Sometime being
							able to &#8220;not think&#8221; about a project can help your subconscious time to secretly work out a brilliant solution.
						</p>
						<h4>Conclusion</h4>
						<p>
							The game adds a certain flair to the website. Not only do we have 4 cute little bacterium mascots now, we also have a
							working web site which shows our technical prowess and displays our creativity. Two very important talents that any marketing/advertising
							company needs to have in the 21st century.
						</p>
						<p>
							<strong>Game Data:</strong>
						</p>
						<ul>
							<li>Platform: Flash Player 9</li>
							<li>Developers: 4</li>
							<li>Length of Development: Around 3 months over a span of six months.</li>
							<li>Hardware: Mac Pro</li>
							<li>Software: FlexBuilder 3, Adobe Flash, Adobe Illustrator,
								Audacity, SVN</li>
							<li>Initial Release Date: 12/2009</li>
							<li>Final Release Date: 3/2010</li>
							<li>Size: About 6700 lines of code</li>
						</ul>
					</div>
				</div>
			</div>
<?php end_content(); ?>