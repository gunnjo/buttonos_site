<section id="section-content">

<div style="width: 960px; margin: 0px auto;">

<div class="container_12" style="background: none;">

	<div class="grid_12 runway_picture">
		<img src="/media/start/img/buttonos-start.gif" alt="" />
	</div>

	<div class="grid_12">
		<form method="get" action="https://www.duckduckgo.com/">
			<div id="ddg_search_container">
				<input id="ddg_query" type="text" name="q" value="Type here to search for something" />
				<button id="ddg_search_submit" name="ddg_search_submit">Search</button>
			</div>
		</form>
	</div>

<?php
	$c = 0;
	foreach ( $buttons as $x )
	{
		if (($c++ % 3) == 0)
		{
			echo '<div class="clear"></div>';
		}
		echo '<a class="task_button"';
		if ( $x['id'] != NULL )
		{
			echo ' id="'.$x['id'].'"';
		}
		echo ' rel="'.$x['type'].'" href="'.$x['href'].'">';
		echo '<div class="grid_4">';
		echo '<img src="'.$x['img'].'" alt="'.$x['header'].'" />';
		echo '<h3>'.$x['header'].'</h3>';
		echo '<p>'.$x['description'].'</p>';
		echo '</div> </a>';
	}
?>
	<div class="clear"></div>

	<p style="margin: 10px 0px 10px 0px; text-align: center; font-weight: bold;"><a id="customize_links_link" href="#customize_links" style="color: #000000;">Want to Customize These Links?</a></p>

	<div style="display: none">

		<div id="skype">
			<h1>Ready to take the Next Step?</h1>
			<p>ButtonOS is great, but it can be made better. Download Runway today for enhanced features like Skype, and help support the continued development of ButtonOS!</p>
		</div>

		<div id="customize_links">
			<h1>We're Almost Ready...</h1>
			<p>Thanks for letting us know you'd like to be able to customize the sites on the ButtonOS start page. We'll be adding this very soon, probably within the next week.</p>
		</div>

	</div>

</div>

</div>

</section>


