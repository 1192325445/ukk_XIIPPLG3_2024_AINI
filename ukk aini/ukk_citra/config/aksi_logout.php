<?php 
session_start();
session_destroy();
echo "<script>
	alert('Logout behasil');
	location.href='../index.php';
	</script>";

 ?>