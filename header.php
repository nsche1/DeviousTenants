<html>

<head>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title><?php echo $page['title'];?></title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body

<!-- top menu bar -->

<table width="90%" border="0" cellspacing="5" cellpadding="5">

<tr>

<td><a href="#">Home</a></td>

<td><a href="#">Site Map</a></td>

<td><a href="#">Search</a></td>

<td><a href="#">Help</a></td>

</tr>

</table>

<?php
	if($page['type'] == "Forum"){ ?>
			<table width="90%" border="0" cellspacing="5" cellpadding="5">
			<tr>
			<td><a href="#">New Category</a></td>
			<td><a href="#">New Post</a></td>
			<td><a href="#">Search</a></td>
			<td><a href="#">Help</a></td>
			</tr>
			</table>
<?php	} ?>
<l name="Title"> <?php echo $page['title'];?> </l><br>
<br>
<!-- header ends -->