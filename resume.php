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
	public string $company;
	public string $location;
	public string $dates;
	public string $title;
	public string $description;
	public array $bullets;
	public array $projects;

	function __construct($company, $location, $dates, $title, $description, array $bullets, array $projects = []) {
		$this->company = $company;
		$this->location = $location;
		$this->dates = $dates;
		$this->title = $title;
		$this->description = $description;
		$this->bullets = $bullets;
		$this->projects = $projects;
	}
}

function doEntry($name,$type,$location,$dates,$projects,$descrip) {
?>
			<div class="row">
				<div class="col-sm-6 col-md-6"><b><?=$name?></b>, <?=$location?></div>
				<div class="col-sm-6 text-right hidden-xs visible-sm-block visible-md-block visible-lg-block"><b><?=$dates?></b></div>
				<div class="col-xs-12 visible-xs-block"><b><?=$dates?></b></div>
			</div>
			<div class="row">
				<div class="col-md-12"><b><?=$type?></b></div>
			</div>
<?php foreach ($projects as $project) { ?>
		<div class="row">
			<div class="col-md-12"><?=$project?></div>
		</div>
<?php } ?>
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
				<h4 class="no-transform">Christopher Pollati <span class="text-muted">(formerly Kossa)</span></h4>
				<hr style="margin: 3px 0 8px 0; border-top: 3px solid black;"/>
				Howell, NJ 07731-2869
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
	<h4 class="no-transform">Game and Application Development | Workflow Performance Improvement</h4>
	<p>Programmer specializing in digital and traditional art, skilled in developing games and applications to increase efficiency and enhance learning. Thrives on understanding how things work, optimizing processes, and educating others. Experienced with diverse programming languages, development environments, and software tools. Adept at solving challenges and delivering innovative solutions.</p>
	<h4>Skills</h4>
<?php
$skillItems = array (
	new Skills("Programming", array("PHP","Javascript","C#","Java","ActionScript 3","Python","C/C++")),
	new Skills("Development Software", array("<i>Visual Studio Code</i>","<i>Visual Studio</i>","<i>Xcode</i>","<i>Eclipse</i>","<i>IntelliJ/Android Studio</i>","Git","<i>GitHub</i>","<i>GitLab</i>","<i>Trello</i>","<i>Slack</i>","<i>Jira</i>)")),
	new Skills("Other Software",array("<i>Ubuntu</i> Linux","<i>Figma</i>","Adobe <i>Creative Cloud</i>","<i>Google Workspace</i>","Microsoft <i>Office</i>","Document Foundation's <i>LibreOffice</i>"))
);

foreach ($skillItems as $skill) {
	doRunningList($skill->title,$skill->skills);
}
?>
	<h4>Work Experience</h4>
<?php
$workExperienceItems = array(
	new WorkExperience("KILLER SNAILS","Brooklyn, NY","Sep 2017 – Present",
		"Director of Software Development",
		"Develop educational games and tools for evaluating their efficacy.",
		array(
			"Produced XR experiences using Unity that target Google Cardboard on iOS and Android.",
		    "Developed systems connecting XR & websites to allow real-time monitoring of student learning.",
		    "Integrated third-party APIs for classroom management systems."
		),
		array(
			"BioDive (Android/iOS/WebGL), WaterWays (Android/iOS/WebGL)",
			"U.S. Patent 11763691, <i>&quot;Method and learning system platform for extended reality digital hybrid education&quot;</i>, Sep 2023"
		)
	),

	new WorkExperience("ABATTOIR SOFTWARE LLC","Howell, NJ","Jul 2008 – Present",
		"Owner / Programmer",
		"Remote contract programming and consulting services.",
		array(
			"Modified Flash UIs, allowing communication with other SWFs.",
			"Developed PHP scripts connecting Flex interfaces to MySQL databases.",
			"Created cross-platform applications using Flex for web, desktop, and mobile"
		),
		array( "BlankWords (Android)" )
	),

	new WorkExperience("BLOOMFIELD COLLEGE","Bloomfield, NJ","Jan 2009 – May 2022",
		"Adjunct Professor",
		"Taught game programming courses including Unity, XNA/C# and to ActionScript 3 for Flex, Flash and AIR to adapt to current languages and tools.",
		array(
			"Led Unity classes from beginner to advanced levels, covering AI and gameplay mechanics.",
			"Guided students in group projects simulating real-world game development workflows.",
			"Provided insight into industry-standard software and practices."
		)
	),

	new WorkExperience("PROPELLER COMMUNICATIONS","Summit, NJ","Jun 2016 – Sep 2017",
		"Senior Front End Developer",
		"Oversaw front end of web site development and iOS applications for various clients.",
		array(
			"Prototyped VR walkthroughs using Unity for Samsung GearVR and Google Cardboard.",
			"Maintained programming projects across varied technologies.",
			"Enhanced web-based games with Phaser.io."
		)
	),

	new WorkExperience("PEARSON","Hoboken, NJ","Sep 2010 – Feb 2016",
		"Digital Developer",
		"Designed and maintained web applications and content production tools.",
		array(
			"Streamlined multimedia asset management with MySQL-integrated desktop apps.",
			"Simplified video re-encoding and caption embedding with custom tools.",
			"Automated static web page generation using spreadsheets and PHP scripts."
		)
	),

	new WorkExperience("KENYON HOAG ASSOCIATES","Upper Saddle River, NJ","Oct 2009 – Aug 2010",
		"Web Developer / Programmer",
		"Front end web development and animation focused on advertising for the pharma industry.",
		array(
			"Developed Flash game demonstrating company’s knowledge of the industry.",
			"Created tools for client websites tying their inventory and product catalogue.",
			"Designed client websites based around corporate identities."
		),
		array( "Bioreactor Defender (Web)" )
	),

	new WorkExperience("THQ / KAOS STUDIOS","New York City, NY","Oct 2006 – Apr 2008",
		"Programmer",
		"Developed tool to help developers the PC / Xbox 360 executables and game modifications.",
		array(
			"Wrote tools allowing installation and build processes to be more efficient.",
			"Modified Unreal 3 Engine’s Kismet to be used to control Bink video playback.",
			"Merged updates from newer Unreal builds into older code base."
		),
		array( "Frontlines: Fuel of War (Xbox360, PC)" )
	)
);

foreach ($workExperienceItems as $item) {
	doEntry($item->company, $item->title, $item->location, $item->dates, $item->projects, $item->description);
	doLineItems($item->bullets);
}

$recognitions = array(
	"Member of the International Game Developers Association (IGDA) since 2006",
	"Presenter, New Jersey Chapter of the IGDA",
	"IGDA Game Developers Conference 2007 Scholarship recipient",
);
$achievments = array(
	"<b>Bachelor of Arts (BA)</b>, Game Development – Programming, Bloomfield College, Bloomfield, NJ, <i>summa cum laude</i>, GPA: 3.894<ul><li>Dean’s List</li><li>Developed a playable demo of a 3D, multiplayer game with Torque Game Engine in three months for Capstone Project</li></ul>",
	"<b>Associate of Applied Science (AAS)</b>, Commercial Graphics / Computer Animation, Bergen Community College, Paramus, NJ<ul><li>Curricular Award of Excellence in Computer Animation</li></ul>"
);
?>
	<h4>Professional Memberships and Recognitions</h4>
<?php
	doLineItems($recognitions);
?>
	<h4>Education and Achievements</h4>
<?php
	doLineItems($achievments);
?>
</div>
<div class="container-fluid">
	<div>
		<p class="text-muted">Page last update: <?php echo date("F d, Y"/* H:i"*/, getlastmod()); ?></p>
	</div>
	<hr/>
	<div>
		<a class="pull-right" href="https://get.adobe.com/reader/"><img src="assets/images/layout/Get_Adobe_Acrobat_Reader_DC_web_button_158x39.fw.png"></a>
		<h4>One Page</h4>
		<a href="assets/downloads/resume/Resume-ChristopherPollati-OnePage.pdf" target="_blank"><img src="assets/images/layout/icons/pdf.png"/> Christopher Pollati's One Page Resume (PDF)</a>
		<p class="text-muted">Last updated: <?php echo date("F d, Y"/* H:i"*/, filemtime("assets/downloads/resume/Resume-ChristopherPollati-OnePage.pdf")); ?></p>
		<a href="assets/downloads/resume/Resume-ChristopherPollati-OnePage.docx" target="_blank"><img src="assets/images/layout/icons/word.png"/> Christopher Pollati's One Page Resume (Word Docx)</a>
		<p class="text-muted">Last updated: <?php echo date("F d, Y"/* H:i"*/, filemtime("assets/downloads/resume/Resume-ChristopherPollati-OnePage.docx")); ?></p>
		<h4>Full</h4>
		<a href="assets/downloads/resume/Resume-ChristopherPollati.pdf" target="_blank"><img src="assets/images/layout/icons/pdf.png"/> Christopher Pollati's Resume (PDF)</a>
		<p class="text-muted">Last updated: <?php echo date("F d, Y"/* H:i"*/, filemtime("assets/downloads/resume/Resume-ChristopherPollati.pdf")); ?></p>
		<a href="assets/downloads/resume/Resume-ChristopherPollati.docx" target="_blank"><img src="assets/images/layout/icons/word.png"/> Christopher Pollati's Resume (Word Docx)</a>
		<p class="text-muted">Last updated: <?php echo date("F d, Y"/* H:i"*/, filemtime("assets/downloads/resume/Resume-ChristopherPollati.docx")); ?></p>
	</div>
	<div></div>
</div>
<?php end_content(); ?>