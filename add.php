<?php
	include('db/conn.php');
	if(isset($_POST['firstname'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];

		$conn->query("INSERT INTO member (firstname, lastname) VALUES ('$firstname', '$lastname')");
	}

?>