<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title><?php echo $page_title; ?></title>

	<link rel="shortcut icon" href="/favicon.ico" />
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

			<ul id="navigation">
				<li><a href="/about">About</a></li>
				<li><a rel="external" href="http://blog.buttonos.org">Blog</a></li>
				<li><a rel="external" href="https://github.com/curlycloud/ButtonOS-Build/wiki/ButtonOS-Features">Features</a></li>
				<li><a href="/community">Community</a></li>
				<li><a href="/community/contribute">Contribute</a></li>
				<li><a class="download" href="/download">Download</a></li>
			</ul>

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

		<div>
			<a rel="external" href="http://github.com/curlycloud">
				<img style="position: absolute; top: 0; left: 0; border: 0;" src="/media/img/fork-on-github.png" alt="Fork us on GitHub" />
			</a>
		</div>


		<?php

			if(isset($script_container))
			{

			foreach($script_container as $script)
			{

				echo $script;

			}
			}

		?>
		<script type="text/javascript" src="/media/js/analytics.js"></script>

	</body>
</html>
