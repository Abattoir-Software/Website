<?php
include_once 'includes/content/media.php';

class Skills {
	public $title;
	public $skills;

	function __construct($title, array $skills) {
		$this->title = $title;
		$this->skills = $skills;
	}
}

class WorkExperience {
	public $company;
	public $location;
	public $dates;
	public $title;
	public $description;
	public $bullets;
	public $projects = "";

	function __construct($company, $location, $dates, $title, $description, array $bullets, $projects = "") {
		$this->company = $company;
		$this->location = $location;
		$this->dates = $dates;
		$this->title = $title;
		$this->description = $description;
		$this->bullets = $bullets;
		$this->projects = $projects;
	}
}

function doEntry($name,$type,$location,$dates,$descrip) {
?>
			<div class="row">
				<div class="col-sm-6 col-md-6"><b><?=$name?></b>, <?=$location?></div>
				<div class="col-sm-6 text-right hidden-xs visible-sm-block visible-md-block visible-lg-block"><b><?=$dates?></b></div>
				<div class="col-xs-12 visible-xs-block"><b><?=$dates?></b></div>
			</div>
			<div class="row">
				<div class="col-md-12"><b><?=$type?></b></div>
			</div>
<?php if($descrip!="") {?>
			<div class="row">
				<div class="col-md-12"><?=$descrip?></div>
			</div>
<?php }
}

function doLineItems($items){
?>
	<div class="row">
			<ul>
<?php
	foreach ($items as $item) {
		echo "\t\t\t\t<li>" . $item . "</li>";
	}
?>
			</ul>
	</div>
<?php
}

function doItems($items,$projects = "") {
	if($projects!="") { echo "<i>" . $projects . "</i><br/>"; }
?>
	<div class="row">
		<ul>
<?php
	foreach ($items as $item) {
		echo "<li>" . $item . "</li>";
	}
?>
		</ul>
	</div>
<?php
}

function doRunningList($title, $items) {
	echo "<b>$title:</b> ";
echo '<ul class="list-inline runningList">';
	foreach ($items as $item) {
		echo "<li>$item</li>";
	}
echo '</ul></br>';
}

head_content("Resume","");
?>
<div class="resumeArea container-fluid">
	<div class="row">
		<div class="col-xs-12 ">
			<div style="font-weight: bold;">
				<span class="pull-right">
					<a href="http://www.abattoir-software.com">www.abattoir-software.com</a>
				</span>
				<h3>Christopher Pollati <span class="text-muted">(formerly Kossa)</span></h3>
				<hr style="margin: 3px 0 8px 0; border-top: 3px solid black;"/>
				Clifton, NJ 07011-2302
				<span class="pull-right">
					973.931.3693<br/>
				</span>
				<br/>
				<a href="http://www.linkedin.com/in/christopherpollati">www.linkedin.com/in/christopherpollati</a>
				<span class="pull-right">
					<a href="mailto:&#099;&#104;&#114;&#105;&#115;&#116;&#111;&#112;&#104;&#101;&#114;&#046;&#112;&#111;&#108;&#108;&#097;&#116;&#105;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">&#099;&#104;&#114;&#105;&#115;&#116;&#111;&#112;&#104;&#101;&#114;&#046;&#112;&#111;&#108;&#108;&#097;&#116;&#105;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a>
				</span>
				<br/>
				<a href="http://www.github.com/AmigaAbattoir">www.github.com/AmigaAbattoir</a>
				<br/>
			</div>
		</div>
	</div>
	<h3>Renaissance Programmer</h3>
	<h4>Game and Application Development | Workflow Performance Improvement</h4>
	<p>Programmer with a specialty in digital, as well as traditional art, skilled in developing games or products to increase efficiencies. Thrive on learning how things work, how to make better, and how to educate or inform others. Experienced with various types of programming languages and software for art, 3D modeling, video editing, and office software, as well as several operating systems. Enjoy new challenges to enhance skill set.</p>
	<h3>Skills</h3>
<?php
$skillItems = array (
	new Skills("Programming", array("ActionScript 3","Flex","C#","PHP","Javascript","Java","Python","C/C++")),
	new Skills("Development Software", array("<i>Eclipse</i>", "<i>MonoDevelop</i>", "<i>Visual Studio</i>", "<i>XCode</i>", "<i>GitHub</i>", "<i>Jira</i>", "<i>Trac</i>", "<i>Git</i>", "<i>SVN</i>")),
	new Skills("Other Software",array("includes Adobe <i>Creative Cloud</i>","Document Foundation's <i>LibreOffice</i>","Microsoft <i>Office</i>","some experience in 3D modeling, like <i>Maya</i>", "<i>Cinema4D</i>", "video editing", "<i>Ubuntu</i> Linux"))
);

foreach ($skillItems as $skill) {
	doRunningList($skill->title,$skill->skills);
}
?>
	<h3>Work Experience</h3>
<?php
$workExperienceItems = array(
	new WorkExperience("PROPELLER COMMUNICATIONS","Summit, NJ","2016 – Present","Senior Front End Developer","Oversaw front end of web site development and iOS applications for various clients.",
		array(
			"Prototyped a VR walk-through using Unity for Samsung GearVR.",
			"Maintenance of various programming projects across varied technologies.",
			"Developed client websites based on designers vision for web and mobile devices.",
			"Modified and expanded a web baser game built with Phaser.io"
		)
	),

	new WorkExperience("BLOOMFIELD COLLEGE","Bloomfield, NJ","2009 – Present","Adjunct Professor","Teach various classes for game programming ranging from Unity, XNA/C# and to ActionScript 3 for Flex, Flash and AIR to adapt to current languages and tools.",
		array(
			"Led 2 different levels of a classes where student groups created games to facilitate teamwork." ,
			"Instructed class designed to help student learn about software and practices used in the games industry, preparing students for working in a studio environment."
		)
	),

	new WorkExperience("ABATTOIR SOFTWARE LLC","Clifton, NJ","2008 – Present","Owner / Programmer","Executed contract programming, working remotely to assist other companies on game projects.",
		array(
			"Performed modification of Flash UIs, allowing communication with other SWFs.",
			"Developed PHP scripts, bridging communications between Flex interfaces and MySQL databases for client websites.",
			"Developed software using Flex, enabling common code base for web, desktop and mobile."
		)
	),

	new WorkExperience("PEARSON","Hoboken, NJ","2010 – 2016","Digital Developer","Developed and maintained web application for educations purposes, as well as development of tools to help produce content for those products.",
		array(
			"Developed desktop application utilizing MySQL database, streamlining management of tens-of-thousands of multimedia assets.",
			"Created tool, simplifying batch re-encoding of videos and the embedding captions.",
			"Designed web forms and PHP scripts, generating various static web pages from spreadsheets.",
			"Used VMware vCloud Director to configure and set up web and database servers."
		)
	),

	new WorkExperience("KENYON HOAG ASSOCIATES","Upper Saddle River, NJ","2009 – 2010","Web Developer / Programmer","",
		array(
			"Programmed Flash game, demonstrating company’s knowledge of the pharma industry.",
			"Developed Flex tools for client websites, enabling product ordered to be tied to inventory system while streamlining ordering process.",
			"Designed new or modified existing clients website based around corporate identities, increasing brand awareness."
		),"Bioreactor Defender (Web)"
	),

	new WorkExperience("THQ / KAOS STUDIOS","New York City, NY","2006 – 2008","Programmer","Developed and maintained continuous builder for daily compiles of the PC / Xbox 360 executables.",
		array(
			"Wrote Python scripts and C# tools, allowing installation and build processes to be more efficient.",
			"Modified Unreal 3 Engine, enabling Kismet to be used to control Bink video play back.",
			"Merged updates from newer Unreal builds into older code base to add features to game."
		),"Frontlines: Fuel of War (Xbox360, PC)"
	)
);

foreach ($workExperienceItems as $item) {
	doEntry($item->company, $item->title, $item->location, $item->dates, $item->description);
	doItems($item->bullets, $item->projects);
}

$achievments = array(
	"Member of the International Game Developer’s Association (IGDA) since 2006",
	"Presenter, New Jersey Chapter of the IGDA",
	"IGDA Game Developer’s Conference 2007 Scholarship recipient",
	"<b>Bachelor of Arts (BA)</b>, Game Development – Programming, Bloomfield College, Bloomfield, NJ, <i>summa cum laude</i>, GPA: 3.894<ul><li>Dean’s List</li><li>Developed a playable demo of a 3D, multi-player game with Torque Game Engine in three months for Capstone Project</li></ul>",
	"<b>Associate of Applied Science (AAS)</b>, Commercial Graphics / Computer Animation, Bergen Community College, Paramus, NJ<ul><li>Curricular Award of Excellence in Computer Animation</li></ul>"
);
?>
	<h3>Education and Achievements</h3>
<?php
	doLineItems($achievments);
?>
</div>
<div class="container-fluid">
	<div>
		<p class="text-muted">Page last update: <?php echo date("F d, Y"/* H:i"*/, getlastmod()); ?></p>
	</div>
	<div>
		<a class="pull-right" href="https://get.adobe.com/reader/"><img src="assets/images/layout/Get_Adobe_Acrobat_Reader_DC_web_button_158x39.fw.png"></a>
		<a href="assets/downloads/resume/Resume-ChristopherPollati.pdf" target="_blank"><img src="assets/images/layout/icons/pdf.png"/> Christopher Pollati's Resume (PDF)</a>
		<p class="text-muted">Last updated: <?php echo date("F d, Y"/* H:i"*/, filemtime("assets/downloads/resume/Resume-ChristopherPollati.pdf")); ?></p>
		<a href="assets/downloads/resume/Resume-ChristopherPollati.doc" target="_blank"><img src="assets/images/layout/icons/word.png"/> Christopher Pollati's Resume (Word Doc)</a>
		<p class="text-muted">Last updated: <?php echo date("F d, Y"/* H:i"*/, filemtime("assets/downloads/resume/Resume-ChristopherPollati.doc")); ?></p>
	</div>
	<div>
	</div>
</div>
<?php end_content(); ?>