<?php
	include 'config.php';
	$idurl = md5('id');
	$idget = $_GET[$idurl];
	$id    = base64_decode($idget);
	$sql   = "SELECT * FROM coba WHERE id = '$id'";
	$res   = $conn->query($sql);
	if ($res->num_rows > 0) {
		$row = $res->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit <?php echo $row['nama']; ?></title>
</head>
<body>
	Edit untuk <?php echo $row['nama']; ?>
	<form method="post">
		<input type="text" name="nama" value="<?php echo $row['nama']; ?>"> <br>
		<input type="email" name="email" value="<?php echo $row['email']; ?>"> <br>
		<textarea name="alamat" rows="10"><?php echo $row['alamat'] ?></textarea> <br>
		<input type="submit" name="btn" value="Update">
	</form>

	<?php 
		if (isset($_POST['btn'])) {
			$pre    = $conn->prepare("UPDATE coba SET nama = ?, email = ?, alamat = ? WHERE id = ? ");
			$pre->bind_param("sssi", $nama, $email, $alamat, $id);
			
			$nama   = $_POST['nama'];
			$email  = $_POST['email'];
			$alamat = $_POST['alamat'];

			$pre->execute();

			echo "Sukses";
			echo "<meta http-equiv='refresh' content='1;url=insert.php'>";

			$pre->close();
			$conn->close();
		}
	?>
</body>
</html>