<?php
	include('db/conn.php');
	if(isset($_POST['memid'])){
		$memid=$_POST['memid'];

		$conn->query("DELETE FROM member WHERE memberid='$memid'");
	}
?>