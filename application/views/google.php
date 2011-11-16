<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />

<title>Runway - Google Search</title>

<link type="text/css" rel="stylesheet" href="{{%theme%/css/google/reset.css}}" />
<link type="text/css" rel="stylesheet" href="{{%theme%/css/google/google.css}}" />

</head>
<body>

<div id="wrapper">

	<div id="search_bar">
		<form target="_blank" action="http://www.google.com/cse" id="cse-search-box">
			<div id="search_area">
				<fieldset class="search">
					<div style="float: left;">
						<input autocomplete="off" id="q" type="text" name="q" size="55" />
					</div>
					<button id="search_button" name="sa">Search</button>
					<input type="hidden" name="cx" value="partner-pub-9883028355064712:5278697747" />
					<input type="hidden" name="ie" value="UTF-8" />
				</fieldset>
			</div>
		</form>
	</div>
	<button id="clear">Clear</button>

</div>
{$data.webroot1}
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="{{%theme%/js/google/google.js}}"></script>
<script type="text/javascript">
{literal}
<!--

	$(document).ready(function(){
		$("form#cse-search-box").submit(function(){
			var query = $("input#q").val();
			$.post("{/literal}{$data.webroot}{literal}/data/gather.php", { "type":"search", "value":query }, function(data){});
		});
		$("button#clear").click(function(){
			$("input#q").val("");
			$("input#q").focus();
		});
	});

-->
{/literal}
</script>

</body>
</html>