<?php

	include_once 'db.php';

	$joke = mysqli_real_escape_string($conn, $_POST['joke']);
	$status = mysqli_real_escape_string($conn, $_POST['rating']);
	
	$sql = "INSERT INTO jokes(joke, rating) VALUES ('$joke', '$rating');";

	mysqli_query($conn, $sql);

	header("Location: ../index.php?send=success");