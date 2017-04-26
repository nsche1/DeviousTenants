<?php
//create_cat.php
// create an array to set page-level variables
$page = array();

$page['title'] = 'Category Creation';
$page['type'] = 'Forum';

/* once the file is imported, the variables set above will become available to it */

// include the connection
include 'connection.php';

// include the page header
include 'header2.php';

echo '<tr>';
	echo '<td class="leftpart">';
		echo '<h3><a href="category.php?id=">Category name</a></h3> Category description goes here';
	echo '</td>';
	echo '<td class="rightpart">';
		echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
	echo '</td>';
echo '</tr>';
include 'footer.php';
?>
