<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title><?php echo $page_title; ?></title>

	<link rel="shortcut icon" href="/media/img/favicon.ico" />
	<link type="text/css" rel="stylesheet" href="/media/css/style.css" />

</head>
<body>

<div id="header">
	<div id="header-wrapper">
		<div id="header-content">

			<div id="header-logo">
				<div style="float: left;"><a href="/"><img src="/media/img/buttonos-logo-75.png" alt="ButtonOS Logo" /></a></div>
				<div style="float: left; margin: 0px 0px 0px 20px;">
					<h1><a style="color: #FFFFFF; text-decoration: none;" href="/">ButtonOS</a></h1>
				</div>
			</div>

			<?php
			/*
			<div id="header-profile">
				<div id="header-profile-information">
					<h3><strong>Welcome, Ryan!</strong></h3>
					<span><a href="#">Account</a> - <a href="#">Settings</a></span>
				</div>
				<div id="header-profile-picture" class="round-picture">
					<img src="http://graph.facebook.com/ryanlelek/picture" alt="" />
				</div>
			</div>
			*/
			?>

			<ul id="navigation">
				<li><a href="/about">About</a></li>
				<li><a rel="external" href="http://blog.buttonos.org">Blog</a></li>
				<li><a rel="external" href="https://github.com/curlycloud/ButtonOS-Build/wiki/ButtonOS-Features">Features</a></li>
				<li><a href="/community">Community</a></li>
				<li><a href="/community/contribute">Contribute</a></li>
				<li><a class="download" href="/download">Download</a></li>
				<?php
				/*
				<li><a href="{$data.system.urlroot}/signup">Sign Up</a></li>
				<li><a href="{$data.system.urlroot}/login">Login</a></li>
				*/
				?>
			</ul>

			<!--
			<div id="header-search">
				<input type="text" name="search" value="Search..." />
			</div>
			-->

		</div>
	</div>
</div>

		<?php if(isset($body)){ echo $body; } ?>

		<div id="footer">
			<div id="footer-wrapper">
				<div id="footer-content">

					<div class="footer-column">
						<h3>About ButtonOS</h3>
						<ul>
							<li><a href="/goals">Goals</a></li>
							<li><a href="/team">Team</a></li>
							<li><a rel="external" href="http://blog.buttonos.org">Blog</a></li>
						</ul>
					</div>
					<div class="footer-column">
						<h3>Why ButtonOS?</h3>
						<ul>
				<li><a rel="external" href="https://github.com/curlycloud/ButtonOS-Build/wiki/ButtonOS-Features">Features</a></li>
							<li><a href="/security">Security</a></li>
							<?php /*<li>Simplicity</li>*/ ?>
						</ul>
					</div>
					<div class="footer-column">
						<h3>ButtonOS Community</h3>
						<ul>
							<li><a href="/community/contribute">Contribute</a></li>
							<li><a rel="external" href="http://github.com/curlycloud">GitHub</a></li>
							<li><a rel="external" href="http://github.com/curlycloud/ButtonOS-Build/wiki/License">License</a></li>
							<?php /*<li>Forum</li>*/ ?>
						</ul>
					</div>
					<div class="footer-column">
						<h3>ButtonOS Help</h3>
						<ul>
							<li><a rel="external" href="http://www.wikihost.org//w/buttonos/">Wiki/Docs</a></li>
							<?php /*<li>Tutorials</li>*/ ?>
							<?php /*<li>Contact</li>*/ ?>
						</ul>
					</div>
	
					<hr style="clear: both;" />

					<p>ButtonOS Project - Open Source Live CD Web Browser Operating System <span class="right">&copy; 2009-2011 <a rel="external" href="http://www.curlycloud.com">Curly Cloud</a> - Some Rights Reserved</span></p>

				</div>
			</div>
		</div>

		<?php

			if(isset($script_container))
			{

			foreach($script_container as $script)
			{

				echo '<script type="text/javascript" src="'.$script->src.'"></script>';

			}
			}

		?>

		<div>
			<a rel="external" href="http://github.com/curlycloud">
				<img style="position: absolute; top: 0; left: 0; border: 0;" src="/media/img/fork-on-github.png" alt="Fork us on GitHub" />
			</a>
		</div>

		<script type="text/javascript" src="/media/js/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="/media/js/jquery.coda-slider-2.0.js"></script>
		<script type="text/javascript" src="/media/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="/media/js/nivo.js"></script>
		<script type="text/javascript" src="/media/js/cufon.js"></script>
		<script type="text/javascript" src="/media/js/enigmatic.cufonfonts.js"></script>
		<script type="text/javascript" src="/media/js/analytics.js"></script>
		<script type="text/javascript" src="/media/js/cloudmenu.js"></script>
		<script type="text/javascript" src="/media/js/external_links.js"></script>
		<script type="text/javascript" src="/media/js/scripts.js"></script>

	</body>
</html>
