<?php
	include('db/conn.php');
	if(isset($_POST['efirstname'])){
		$firstname=$_POST['efirstname'];
		$lastname=$_POST['elastname'];
		$memid=$_POST['memid'];

		$conn->query("UPDATE member SET firstname='$firstname', lastname='$lastname' WHERE memberid='$memid'");
	}
?>