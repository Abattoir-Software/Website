<?php
include_once 'includes/content/media.php';
head_content("Abattoir Software","This is the home page of Abattoir Software LLC, focusing mainly on game programming as well as other forms of media and design.","Welcome to Abattoir Software");
?>
<div>
	<a href="blankwords.php">BlankWords</a> is available for Android&trade; on Google Play!</p>
	<div style="text-align:center;width:430px;">
		<img style="flost:left;padding-bottom:16px;" src="assets/images/blankwords/114x114.png"><br/>
		<div style="float:left;">
			Buy BlankWords<br/>
			<a href="https://play.google.com/store/apps/details?id=com.abattoirsoftware.BlankWords" target="_blank" style="padding:0;"><img src="assets/images/google-play-badge.png" width="215" height="83" style="width:215px;height:83px;"/></a>
		</div>
		<div style="float:left;">
			Or try BlankWords Free<br/>
			<a href="https://play.google.com/store/apps/details?id=com.abattoirsoftware.BlankWordsFree" target="_blank"><img src="assets/images/google-play-badge.png" width="215" height="83" style="width:215px;height:83px;"/></a>
		</div>
		<br clear="all"/>
		<br/>
	</div>
	<p><span class="small">Android, Google Play and the Google Play logo are trademarks of Google Inc.</span>
</div>
<hr/>
<?php
write_media("Games", "Various game projects that are in different states of development.", "games.php", write_splat(3));
write_media("Portfolio", "A listing of several recent jobs that have been worked on.", "portfolio.php", write_splat(2));
write_media("Archive", "Various computer projects from programming, to icons, to resources for games that seem like they were created eons ago.", "archive.php", write_splat(4));
write_media("Resume", "Current resume for Christopher Pollati, owner of Abattoir Software LLC", "resume.php", write_splat(1));
end_content();
?>