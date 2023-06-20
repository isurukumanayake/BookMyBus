<?php

	//Linking the connection object
	require "config.php";

	$fn = $_POST["fname"];
	$ln = $_POST["lname"];
	$eml = $_POST["email"];
	$gen = $_POST["gender"];
	$adr = $_POST["address"];

	$sql = "UPDATE registration SET FirstName = '$fn', LastName = '$ln', Address = '$adr' WHERE Email = '$eml'";


	if($conn->query($sql))
	{
		header("Location:myprofile.php?updatedprofile");
	}

	else
	{
		echo "Error : " . $conn->error;
	}

	$conn->close();
?>