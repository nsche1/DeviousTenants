<?php
//signup.php
// create an array to set page-level variables
$page = array();

$page['title'] = 'Website Sign Up';
$page['type'] = 'Join';

/* once the file is imported, the variables set above will become available to it */

// include the connection
include 'connection.php';

// include the page header
include 'header2.php';

echo '<h3>Sign up</h3>';

if (!isset($_POST['submit'])) 
{ ?>
	<!--the form hasn't been posted yet, display it
	note that the action="" will cause the form to post to the same page it is on -->
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		First Name:<br>
		<input type="text" name="first_name"><br><br>
		Last Name:<br>
		<input type="text" name="last_name" /><br><br>
		Username:<br>
		<input type="text" name="user_name" /><br><br>
		Password:<br>
		<input type="password" name="user_pass"><br><br>
		Password again:<br>
		<input type="password" name="user_pass_check"><br><br>
		E-mail:<br>
		<input type="email" name="user_email"><br><br>
		<input type="submit" name="submit" value="Register" />
	</form>
<?php 
}
else
{
	/* so, the form has been posted, we'll process the data in three steps:
		1. Check the data
		2. Let the user refill the wrong fields (if necessary)
		3. Save the data
	*/
	$errors = array(); /* declare the array for later use */
	if(isset($_POST['first_name']))
	{
		//the user name exists
		if(!ctype_alnum($_POST['first_name']))
		{
			$errors[] = 'Please enter a first name with letters only.';
		}
		if(strlen($_POST['first_name']) > 30)
		{
			$errors[] = 'The first name cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The first name field must not be empty.';
	}
	if(isset($_POST['last_name']))
	{
		//the user name exists
		if(!ctype_alnum($_POST['last_name']))
		{
			$errors[] = 'Please enter a last name with letter only.';
		}
		if(strlen($_POST['last_name']) > 30)
		{
			$errors[] = 'The last name cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The last name field must not be empty.';
	}	
	
	if(isset($_POST['user_name']))
	{
		//the user name exists
		if(!ctype_alnum($_POST['user_name']))
		{
			$errors[] = 'The username can only contain letters and digits.';
		}
		if(strlen($_POST['user_name']) > 30)
		{
			$errors[] = 'The username cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The username field must not be empty.';
	}
	
	if(isset($_POST['user_pass']))
	{
		if($_POST['user_pass'] != $_POST['user_pass_check'])
		{
			$errors[] = 'The two passwords did not match.';
		}
	}
	else
	{
		$errors[] = 'The password field cannot be empty.';
	}
	
	if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array*/
	{
		echo 'Uh-oh.. a couple of fields are not filled in correctly..';
		echo '<ul>';
		foreach($errors as $key => $value) /* walk through the array so all the errors get displayed*/
		{
			echo '<li>' . $value . '</li>'; /* this generates an error list */
		}
		echo '<ul>';
	}
	else
	{
		//the form has been posted without errors, so save it
		$stmt = $conn->prepare("INSERT INTO
			Users(Username, First_Name, Last_Name, User_Password, User_email, User_Join_Date, User_Rank) 
			VALUES(:username, :first_name, :last_name, :password, :email, :join_date, :rank)");
		$stmt->execute(array(':username' => $_POST['user_name'],':first_name' => $_POST['first_name'], ':last_name' => $_POST['last_name'],':password' => $_POST['user_pass'], ':email' => $_POST['user_email'], ':join_date' => date('Y-m-d H:i:s'), ':rank' => 0));
		$affected_rows = $stmt->rowCount();

		if($affected_rows<1)
		{
			//something went wrong, display the error
			echo 'Something went wrong.  Please try again later.';
			//echo mysql_error(); //debugging purposes, uncomment when needed
		}
		else
		{
			echo 'Successfully registered. You can now <a href="signin.php">sign in</a> and start posting!';
		}
	}
}

include 'footer.php';

?>