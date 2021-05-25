<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Hello there! There are your credentials! </h1>
    <h2>We provided the plaintext and the ciphertext for you!</h2>

	<br>
	Welcome back, <?php echo $user_data['user_name']; ?>
    <br>
    <p>There are your credentials. You are secure in our database :D</p>
    Password in plaintext mode: <?php echo $user_data['password']; ?>
    <br>
    After encryption your password is <?php echo hash('sha512', $user_data['password']);?>
    <br>
    <br>
    Also your email is secure inside our database. 
    <br>
    Your email encrypted is <?php echo hash('sha512', $user_data['user_name']);?>


</body>
</html>