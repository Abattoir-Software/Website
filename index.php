<?php
include_once 'includes/content/media.php';
head_content("Abattoir Software","This is the home page of Abattoir Software LLC, focusing mainly on game programming as well as other forms of media and design.","Welcome to Abattoir Software");
?>
<div class="panic-nova">
	<h3><a href="https://nova.app/" target="_blank"><img src="assets/images/nova.png"> Nova</a> Extensions</h3>
	<br/>
	Here are the extensions for Panic's Nova IDE that I have made:
<?php
write_media(
	"ActionScript 3",
	"ActionScript 3 &amp; MXML language extension for Panic Nova. LSP powered by Bowler Hat LLC's vscode-as3mxml. Develop apps for Adobe AIR, Adobe Flash Player (and maybe Apache Royale).",
	"https://extensions.panic.com/extensions/com.abattoirsoftware/com.abattoirsoftware.actionscript3/",
	"https://extensions.panicfiles.com/extensions/logos/actionscript3.novaextension/extension2x.png",
	false,true);
write_media(
	"Ant",
	"Sidebar extension for Nova's Panic to view and run Apache Ant builds",
	"https://extensions.panic.com/extensions/com.abattoirsoftware/com.abattoirsoftware.Ant/",
	"https://extensions.panicfiles.com/extensions/logos/Ant.novaextension/extension.png",
	false,true);
write_media(
	"OmniSharp - C#",
	"Uses OmniSharp Roslyn LSP for C# in Nova",
	"https://extensions.panic.com/extensions/com.abattoirsoftware/com.abattoirsoftware.omnisharp/",
	"https://extensions.panicfiles.com/extensions/logos/omnisharp.novaextension/extension.png",
	false,true);
?>
</div>
<hr/>
<div>
	<h3><p><a href="blankwords.php">BlankWords</a> is available for Android&trade; on Google Play!</p></h3>
	<p>BlankWords is a simple word guessing game, where you will have five chances to guess 5 five-letter words. For each guess, you will get twenty five seconds.</p>
	<div style="text-align:center;width:230px;">
		<img style="padding-bottom:16px;" src="assets/images/blankwords/114x114.png"><br/>
		<div style="float:left;">
			Buy BlankWords<br/>
			<a href="https://play.google.com/store/apps/details?id=com.abattoirsoftware.BlankWords" target="_blank" style="padding:0;"><img src="assets/images/google-play-badge.png" width="215" height="83" style="width:215px;height:83px;"/></a>
		</div>
		<br clear="all"/>
		<br/>
	</div>
	<p><span class="small">Android, Google Play and the Google Play logo are trademarks of Google Inc.</span></p>
	<p>Recent updates that were posted to Google Play were made with Panic Nova and the ActionScript 3 extension!</p>
</div>
<hr/>
<?php
write_media("Games", "Various game projects that are in different states of development.", "games.php", write_splat(3));
write_media("Portfolio", "A listing of several recent jobs that have been worked on.", "portfolio.php", write_splat(2));
write_media("Archive", "Various computer projects from programming, to icons, to resources for games that seem like they were created eons ago.", "archive.php", write_splat(4));
write_media("Resume", "Current resume for Christopher Pollati, owner of Abattoir Software LLC", "resume.php", write_splat(1));
end_content();
?>
