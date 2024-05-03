<?php 
include 'koneksi.php';

$username = $_POST['Username'];
$password = md5($_POST['Password']);
$email = $_POST['Email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['Alamat'];

$sql = "INSERT INTO user (Username, Password, Email, namalengkap, Alamat) VALUES ('$username','$password','$email','$namalengkap','$alamat')";
$result = mysqli_query($koneksi, $sql);

if ($result) {
	echo "<script>
	alert('Pendaftaran akun berhasil');
	location.href='../login.php';
	</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
?>
