<?php
	

	include_once 'db.php';

	$sql = "SELECT * FROM jokes;";
	$result = mysqli_query($conn, $sql);
	$checkResult = mysqli_num_rows($result);

	if($checkResult > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['joke'];
		}
	}
