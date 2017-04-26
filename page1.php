<?php

// create an array to set page-level variables
$page = array();

$page['title'] = 'Member Registration';
$page['type'] = 'Forum';

/* once the file is imported, the variables set above will become available to it */

// include the page header

include('header2.php');

?>
<?php

// check for submit

if (!isset($_POST['submit'])) {

    // and display form

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	First Name:<br>
    <input type="text" name="user[first_name]"><br>
	Last Name:<br>
	<input type="text" name="user[last_name]"><br>
	User Name:<br>
	<input type="text" name="user[user_name]"><br>
	Password:<br>
	<input type="password" name="user[password]"><br>

    <input type="submit" name="submit" value="Select">

    </form>

<?php

    }
 
else {
	
    // or display the selected artists

    // use a foreach loop to read and display array elements

    if ($_POST['user']['first_name']!= '' &
		$_POST['user']['last_name'] != '' &
		$_POST['user']['user_name'] != '' &
		$_POST['user']['password'] != ''){
		
       // echo 'You selected: <br />';

       // foreach ($_POST['user'] as $a) {
			
			$a = $_POST['user']['user_name'];
            echo "<b>$a</b> is now registered on devioustenants.com.  Welcome!<br />
			Remember all new members must submit an application to the guild. <br /> 
			Click here to go to the new member application. <br />
			Click here to go to the home page. <br />";

   //         }

        }

    else {
		$value = '';
		$missing = array_keys($_POST['user'], $value);
		echo "You must enter a valid value for: </br>";
		foreach($missing as $c){
			echo "<p name = 'missing_data'>$c</p></ br>";
		}
        //echo "<p>$b</p>";

    }

}

?>


<!-- HTML content here -->

<?php

// include the page footer

include('footer.php');

?>