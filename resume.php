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
	<h4 class="no-transform">Remote Full-Stack Developer | PHP, JavaScript, Unity (WebGL) | EdTech & Game Dev | OAuth2, Web APIs</h4>
	<p>Passionate about crafting immersive learning experiences and building clean, efficient systems — from back-end APIs (PHP, SlimAPI, OAuth2) to interactive front-ends (JavaScript, Unity, WebGL).</p>
	<p>A patent-holding innovator and remote-ready leader with deep experience in FERPA/COPPA compliance, development pipeline optimization, and cross-platform architecture.</p>
	<p>Looking for a full-time remote opportunity in games or edtech, to apply my skills to help teams education, interactivity, and web tech.</p>
	<h4>Skills</h4>
<?php
$skillItems = array (
	new Skills("Programming", array("PHP","Javascript","C#","Java","ActionScript 3","Python","C/C++")),
	new Skills("Development Software", array("Panic <i>Nova</i>, <i>Visual Studio Code</i>","<i>Visual Studio</i>","<i>Xcode</i>","<i>Eclipse</i>","<i>IntelliJ/Android Studio</i>","Git","<i>GitHub</i>","<i>GitLab</i>","<i>Trello</i>","<i>Slack</i>","<i>Jira</i>")),
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
		"",
		array(
			"Led development of flagship educational XR products including BioDive, WaterWays, and Venom CoLab delivering WebGL, iOS, and Android versions using Unity.",
			"Architected and maintained Linux-based server infrastructure, managing PHP, MySQL, SSL/TLS, and cloud backups using GPG encryption and DigitalOcean Spaces.",
			"Developed a secure account management system integrating OAuth2 SSO (Google, Microsoft) with custom identity solutions, ensuring FERPA/COPPA compliance.",
			"Produced XR experiences for Meta Quest, Google Cardboard, and WebGL platforms, optimizing cross-platform performance.",
			"Wrote technical documentation and application architecture for grant-funded educational initiatives.",
			"Mentored junior developers and interns in Unity best practices, server management, and deployment strategies."
		),
		array(
			"<a href='https://www.killersnails.com/products/venom-colab' target='_blank'>BioDive</a> (Android/iOS/WebGL), " .
			"<a href='https://www.killersnails.com/products/scuba-adventure-philippines' target='_blank'>Scuba Adventure: Phillipines</a> (Android/iOS), " .
			"<a href='https://www.killersnails.com/products/waterways-complete' target='_blank'>WaterWays</a> (Android/iOS/WebGL), " .
			"<a href='https://www.killersnails.com/products/venom-colab' target='_blank'>Venom CoLab</a> (WebGL)",
			"<a href='https://patents.google.com/patent/US11763691B1/en' target='_blank'>U.S. Patent 11763691</a>, <i>&quot;Method and learning system platform for extended reality digital hybrid education&quot;</i>, Sep 2023"
		)
	),

	new WorkExperience("ABATTOIR SOFTWARE LLC","Howell, NJ","Jul 2008 – Present",
		"Owner / Programmer",
		"",
		array(
			"Delivered freelance and contract programming across education, entertainment, and business.",
			"Developed cross-platform applications using Adobe Flex for web, desktop, and mobile environments.",
			"Built PHP/MySQL back-end systems to support Flex/Flash UI integrations."
		),
		array( "BlankWords (Android)" )
	),

	new WorkExperience("BLOOMFIELD COLLEGE","Bloomfield, NJ","Jan 2009 – May 2022",
		"Adjunct Professor",
		"",
		array(
			"Taught undergraduate courses in game development for Unity (beginner through advanced), XNA/C#, Flex, and ActionScript 3.",
			"Mentored student teams through full development cycles, from concept to prototype",
			"Integrated industry-standard practices and project management methodologies into coursework."
		)
	),

	new WorkExperience("PROPELLER COMMUNICATIONS","Summit, NJ","Jun 2016 – Sep 2017",
		"Senior Front End Developer",
		"",
		array(
			"Managed front-end web and iOS application development for major healthcare/pharma clients.",
			"Prototyped VR walkthroughs for Samsung GearVR and Google Cardboard using Unity.",
			"Enhanced web games using Phaser.io."
		)
	),

	new WorkExperience("PEARSON","Hoboken, NJ","Sep 2010 – Feb 2016",
		"Digital Developer",
		"",
		array(
			"Designed and maintained web applications and multimedia content tools.",
			"Automated video processing and multimedia workflows using PHP, MySQL, and FFmpeg.",
			"Streamlined asset management pipelines and static page generation."
		)
	),

	new WorkExperience("KENYON HOAG ASSOCIATES","Upper Saddle River, NJ","Oct 2009 – Aug 2010",
		"Web Developer / Programmer",
		"",
		array(
			"Developed Flash-based games and client websites focused on pharma industry needs.",
			"Integrated web inventory and catalog systems."
		),
		array( "Bioreactor Defender (Web)" )
	),

	new WorkExperience("THQ / KAOS STUDIOS","New York City, NY","Oct 2006 – Apr 2008",
		"Programmer",
		"",
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
