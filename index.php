<!DOCTYPE HTML>
<html>
<head>
	<title>Dragtest</title>
	<style type="text/css" media="screen">
		.pod {
			width: 98px;
			height: 98px;
			border: 1px solid white;
			position: absolute;
			z-index: 20;
			background: -webkit-gradient(linear, left top, left bottom, from(#ddd), to(#eee));
		}
		.pod:hover {
			border: 1px solid green;
		}
	</style>
	<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
</head>
<body>
<div>
	<div class="pod"></div>
	<div class="pod"></div>
	<div class="pod"></div>
	<div class="pod"></div>
	<div class="pod"></div>
</div>
<script>
$(function(){
	$('.pod').draggable({
		cls: {
			snapTarget: false,
			snapped: false
		},
		placeholder: "#customplaceholder",
		destroyHelper: false,
		opacity: 0.5,
		grid: [50,50]
	}).resizable({
		grid: 50,
		handles: 'sw,se'
	});;
});
</script>
</body>
</html>