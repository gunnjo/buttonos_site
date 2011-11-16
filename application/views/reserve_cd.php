<div id="banner">
	<div id="banner-wrapper">
		<div id="banner-content">
			<h1>Reserve Your CD</h1>
		</div>
	</div>
</div>

<div id="body">
	<div id="body-wrapper">
		<div id="body-content">

			<h1>Get a Free CD</h1>
			<p>Just fill out your name and email address below. We'll be in touch shortly.</p>

			<div>
				<?php if($thanks == 1){ ?>
					<div style="padding: 20px; color: #FFFFFF; background: #32c33d; text-align: center;">
						<p style="font-size: 16px;">Thanks! We'll send you an email in less than 12 hours</p>
					</div>
				<?php }else{ ?>
					<form method="post" action="">
						<p><label for="name"><strong>Name:</strong</label> <input id="name" type="text" name="name" /></p>
						<p><label for="email"><strong>Email:</strong></label> <input id="email" type="text" name="email" /></p>
						<p><input type="submit" name="submit" value="Submit" /></p>
					</form>
				<?php } ?>
			</div>

			<hr />

			<h1>Common Questions</h1>

			<h2>Can I Really Get a Free CD?</h2>
			<p>You sure can! just fill out your name and email address and we'll let you know when your CD is ready. (We hate spam too and will <strong>never</strong> send you any).</p>

			<h2>What's the Catch?</h2>
			<p>There isn't one. The CD will be professionally manufactured and sent to you at absolutely no charge.<br />Although, we are going to wait until we have 100 people signed up before we actually make the discs.</p>

			<h2>Can My Friends Get One Too?</h2>
			<p>Absolutely. Every friend of yours can get one, but we limit the free CDs to one (1) per physical address in the USA.</p>

			<h2>So Why Are You Doing This?</h2>
			<p>We just want to spread the word of the ButtonOS project, and gauge about how many people have an interest in what we're coding over here all night long.</p>

		</div>
	</div>
</div>