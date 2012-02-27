<?php
	// Get and start up crud SDK
	require('crud.php');
$crud = new CRUD(array(
	// The URL of your CRUD.io server instance
	'url' => "http://crud.io:4000"
));
?><!DOCTYPE html>
<html>
	<head>
		<title>Unwired Nation</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link rel="stylesheet" type="text/css" href="stylesheets/reset.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/unwired.css">
	
	
		<link rel="stylesheet" href="stylesheets/mediaelementplayer.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
		<style type="text/css">
			video.featured-video {
				display:block;
				margin: 0 auto 0;
				width: 320px;
			}
		</style>
		
		<!-- Only required for older Android support and for other desktop browsers -->
		<script src="scripts/mediaelement-and-player.min.js"></script>

	</head>
	<body>
		<div id="uwn-topbar">
			<a href="./" class="uwn-branding">
				<h1>Unwired Nation</h1>
				<h2 id="navigation-sub-header">mobile apps from the cloud</h2>
				
			</a>
				<h3>HTML 5 Video Example</h3>
		</div>
		
		
		<!--
  
		---------------------------------------------------------------
		- Example built using the mediaelement video player
		- John Dyer
		- http://j.hn
		- 
		- MediaElementJS
		- http://mediaelementjs.com/
		- https://github.com/johndyer/mediaelement
		- 
		----------------------------------------------------------------
		-->
		<video class="featured-video" width="320" height="240" poster="<?php $crud->read('vidpon jpg') ?>" controls="controls" preload="none">
			<!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
			<source type="video/mp4" src="<?php $crud->read('vidpon mp4') ?>" />
			<!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
			<source type="video/webm" src="<?php $crud->read('vidpon webm') ?>" />
			<!-- Ogg/Vorbis for older Firefox and Opera versions -->
			<source type="video/ogg" src="<?php $crud->read('vidpon ogv') ?>" />
			<!-- Flash fallback for non-HTML5 browsers without JavaScript -->
			<object width="320" height="240" type="application/x-shockwave-flash" data="flashmediaelement.swf">
				<param name="movie" value="flashmediaelement.swf" />
				<param name="flashvars" value="controls=true&file=<?php $crud->read('vidpon mp4') ?>" />
				<!-- Image as a last resort -->
				<img src="<?php $crud->read('vidpon jpg') ?>" width="320" height="240" title="No video playback capabilities" />
			</object>
		</video>
		
	</body>
</html>
