<?php
function write_header($title, $flashContent = "") {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="assets/styles/theme.min.css" rel="stylesheet">
	<script src="https://use.typekit.net/uub2oyk.js"></script>
	<script>try{Typekit.load({ async: false });}catch(e){}</script>
<!-- <script> (function(d) { var config = { kitId: 'uub2oyk', scriptTimeout: 5000, async: true }, h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s) })(document); </script> -->
	<link href="assets/styles/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="assets/styles/sticky-footer-navbar.css" rel="stylesheet">
	<script src="assets/scripts/ie-emulation-modes-warning.js"></script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link href="assets/styles/customs.css" rel="stylesheet">
</head>
<body>
<?php
}
?>