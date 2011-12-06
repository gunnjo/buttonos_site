<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title><?php echo $page_title; ?></title>


	<meta charset="utf-8" />

	<link rel="stylesheet" href="/media/start/css/min/reset.css" />
	<link rel="stylesheet" href="/media/start/css/min/text.css" />
	<link rel="stylesheet" href="/media/start/css/min/960.css" />
	<link rel="stylesheet" href="/media/start/css/colorbox.css" />

	<style type="text/css">

		body {
			background: blue;
			background-image: url(/media/start/img/blue_noise.jpg);
		}

		.container_12 .grid_4 {
			width: 290px;
			margin-top: 20px;
			background: #FFFFFF;
			border-radius: 10px;
			border: 5px solid #EDEDED;
			box-shadow: 0 0 0 1px #A0A0A0;
		}

		.container_12 .grid_4 img {
			float: left;
			margin: 10px;
		}

		.container_12 .grid_4 h3 {
			margin: 0px;
			margin-top: 15px;
		}

		.container_12 .grid_4 p {
			margin: 0px;
		}

		a.task_button {
			display: block;
			color: #000000;
		}

		div#ddg_search_container {
			margin-top: 20px;
			background: #EDEDED;
			padding: 15px;
			border-radius: 10px;
		}

		input#ddg_query {
			float: left;
			width: 790px;
			height: 50px;
			background: #FFFFFF;
			border: 1px solid #000000;
			font-size: 26px;
			padding: 0px 10px 0px 10px;
			border-top-left-radius: 10px;
			border-bottom-left-radius: 10px;
		}

		button#ddg_search_submit {
			background: url("/media/start/img/search_button.gif") repeat-x scroll 0 0 transparent;
			border-width: 1px 1px 1px 0px;
			border-color: -moz-use-text-color -moz-use-text-color -moz-use-text-color #000000;
			border-style: solid solid solid none;
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px;
			font-size: 26px;
			height: 52px;
			margin: 0;
			padding: 0;
			width: 98px;
		}

		div.runway_picture {
			margin-top: 15px;
			border-radius: 10px;
			border: 5px solid #EDEDED;
			box-shadow: 0 0 0 1px #A0A0A0;
		}

		div.runway_picture img {
			border-radius: 10px;
		}

	</style>

</head>
<body>

		<?php if(isset($body)){ echo $body; } ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="/media/start/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/media/start/js/external_links.js"></script>
<script type="text/javascript">

$(document).ready(function(){

	$("input#ddg_query").focus(function(){
		text_input = $(this);
		if(text_input.val() == "Type here to search for something"){
			$(this).val("");
		}
	});

	$("input#ddg_query").blur(function(){
		text_input = $(this);
		if(text_input.val() == ""){
			text_input.val("Type here to search for something");
		}
	});

	$("a#skype_link").colorbox({
		transition:"none",
		inline:true,
		width:"50%"
	})

	$("a#customize_links_link").colorbox({
		transition:"none",
		inline:true,
		width:"50%"
	})

});

</script>

</body>
</html>
