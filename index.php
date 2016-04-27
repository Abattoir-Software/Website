<?php
include_once 'includes/content/media.php';
head_content("Abattoir Software","This is the home page of Abattoir Software LLC, focusing mainly on game programming as well as other forms of media and design.","Welcome to Abattoir Software");
?>
<p><span class="badge">2016-04-26</span> V0.01 demo of <a href="snake-in-the-grass.php">Snake In The Grass!</a> is now available</p>
<hr/>
<?php
write_media("Games", "Various game projects that are in different states of development.", "games.php", write_splat(3));
write_media("Portfolio", "A listing of several recent jobs that have been worked on.", "portfolio.php", write_splat(2));
write_media("Archive", "Various computer projects from programming, to icons, to resources for games that seem like they were created eons ago.", "archive.php", write_splat(4));
write_media("Resume", "Current resume for Christopher Pollati, owner of Abattoir Software LLC", "resume.php", write_splat(1));

end_content();
?>