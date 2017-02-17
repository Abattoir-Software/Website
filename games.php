<?php
include_once 'includes/content/media.php';
$pageTitle = "Games";
head_content($pageTitle);
write_media("Snake In The Grass!", "A simple snake game that has grown into a beast. Originally written with AMOS Professional, then in C, then C++, and now in ActionScript 3.", "snake-in-the-grass.php", "assets/images/computer-works/snake-in-the-grass_icon.jpg",true);
write_media("Bioreactor Defender", "An old school shooter Flash game.", "bioreactordefender.php", "assets/images/computer-works/bioreactordefender_icon.jpg", true);
write_media("BrickBuster", "A break out type game, made with Flash.", "brickbuster.php", "assets/images/computer-works/brickbuster_icon.jpg", true);
?>
<hr/>
<?php
write_media("BlankWords", "A Java based word game to keep you guessing.", "blankwords.php", "assets/images/computer-works/blankwords_icon.jpg",true);
write_media("Galaxy Arena Earth", "A 3D brawller, that takes place in a futuristic Earth which has become the battle ground for aliens to settle their disputes", "galaxy-arena-earth.php", "assets/images/computer-works/galaxy-arena-earth_icon.jpg",true);
write_media("Escape to New York", "A quick little point-and-click Flash adventure game, done for a final assignment of a class.", "escape-to-new-york.php", "assets/images/computer-works/escape-to-new-york_icon.jpg",true);
end_content($pageTitle); 
?>