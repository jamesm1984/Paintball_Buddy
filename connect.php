<?php
	// $db_server = 'localhost';
	// $db_username = 'root';
	// $db_password = 'root';
	// $db_name = 'Paintball_Buddy';

	// $connection = new PDO(
	// 	"mysql:dbname=$db_name;host=$db_server",
	// 	$db_username,
	// 	$db_password
	// );

	$servername = "localhost";
	$username = "root";
	$password = "root";

	try {
    	$connection = new PDO("mysql:host=$servername;dbname=Paintball_Buddy", $username, $password);
    }

	catch(PDOException $e){
    	echo $e->getMessage();
    }

	if (isset($_POST['email']) and isset($_POST['password'])){

		//3.1.1 Assigning posted values to variables.
		$email = $_POST['email'];
		$password = $_POST['password'];

		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);


		//3.1.2 Checking the values are existing in the database or not
		$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
		echo "test " . $query;
		$result = mysql_query($query);
		echo "test " . $result;
		if($result === false) {
		    var_dump("error   ".mysql_error());
		}
		else {
		    $count = mysql_num_rows($result);
		}

		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		// if ($count == 1){

		// 	$_SESSION['email'] = $email;
		// 	print_r($_SESSION);
		// 	echo "Credentials Good.";
		// }else{
		// 	//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
		// 	echo "Invalid Login Credentials.";
		// };



	};
?>