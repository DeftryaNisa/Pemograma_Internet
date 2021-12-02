<?php
$conn = mysqli_connect('localhost','root','','data_prodi');
	if (mysqli_connect_error()) {
		printf("Connect Failed", mysqli_connect_error());
		exit();
	}
?>