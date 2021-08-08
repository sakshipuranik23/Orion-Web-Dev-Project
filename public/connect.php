<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$pay=$_POST['pay'];
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo ". NAME: $firstName \x20\x20\x20";
		echo $lastName;
		echo "<br>";
		echo "<br>";

		echo "EMAIL: $email";
		echo "<br>";
		echo "<br>";

		echo "GENDER: $gender";
		echo "<br>";
		echo "<br>";

		echo "Payment done successful...";
		$stmt->close();
		$conn->close();
	}
?>
