<html>

<head>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title><?php echo $page['title'];?></title>
	<link rel="stylesheet" href="style.css" type="text/css">
<!-- 	<script>
	$(document).ready(function() {
		$("#content").delegate("form","submit", function(event) {
			$ajax({
				data: $(this).serialize(),
				type: $(this).attr('method'),
				url: $(this).attr('action'),
				success: function(response) {
					$("#content").slideUp(500, function() {
						$("#content").html(response);
						$("#content").slideDown(500);
					});
				}
			});
			return false;
		});
	});
	</script> -->
</head>

<body
	<div name="Site_Title"><h1>Devious Tenants</h1></div>
	<div name="Title"><h2> <?php echo $page['title'];?> </h2> </div><br>
<!-- top menu bar 
	<div id="wrapper"> -->
	<div id="menu">
		<a class="menu_button" href="">Home</a> 
		<?php
			if($page['type'] == "Forum"){ ?>
			<a class="menu_button" href="#">New Category</a>
			<a class="menu_button" href="#">New Post</a>
			<?php } ?>
		<a class="menu_button" href="">Site Map</a> 
		<a class="menu_button" href="">Search</a> 
		<a class="menu_button" href="">Help</a>
		
		<div id="userbar">
		<div id="userbar">Hello ''. Not you? Log out.</div>
	</div>


<br>
<!-- header ends

<div id ="content> -->