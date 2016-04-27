<?php
include_once 'includes/content/media.php';
head_content("Archive", "Here are some old projects that I had worked on in my spare time.");
write_media("Games","","",write_splat(1));
write_media("Spit!","First dive into the world of Java 2 ME. Based upon the card game &quot;Spit&quot;, this game is what I have been learning to program
					J2ME games. It was being designed for the Sony Ericsson P910i Smart Phone in mind, but designed so that it would be easy to port to a wider variety of phones.","spit.php","assets/images/computer-works/spit_icon.jpg",true);
write_media("Programming","","",write_splat(2));
write_media("Project ALF","No, it's not about contacting furry aliens from Melmac. It's not about the Animal Liberation Front, it stands for AMOS Like Functions. The goal was to make functions that were similar to those in AMOS Professiona BASIC in C so that it could be ported from AmigaOS to PC or Mac or Linux.","alf.php","assets/images/computer-works/alf_icon.jpg",true);
write_media("MODs","","",write_splat(3));
write_media("South Park - 007","Hello Chil'ren! Here is an incomplete MOD for the Amiga game by Mantasoft's <i>James Bond: You Only Live Twice.</i>","south-park-007.php","assets/images/computer-works/south-park_icon.jpg",true);
write_media("Amiga Images and Icons","","",write_splat(4));
write_media("GlowSWAT","Images for use with SAMBA's SWAT web interface. Designed around the Amiga's GlowIcons look.","glowswat.php","assets/images/computer-works/glowswat_icon.jpg",true);
write_media("FlySWAT","Replacement images for SWAT, the SAMBA web configuration tool.","flyswat.php","assets/images/computer-works/flyswat_icon.jpg",true);
write_media("CrystalSWAT","Another version of SWAT images, but based upon the Crystal styled images.","crystalswat.php","assets/images/computer-works/crystalswat_icon.jpg",true);
write_media("Network Icons","Some networked icons for Amiga OS 3.5+ using the GlowIcons look.","network-icons.php","assets/images/computer-works/network-icons_icon.jpg",true);
end_content();
?>