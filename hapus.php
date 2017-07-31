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
	$pre = $conn->prepare("DELETE FROM coba WHERE id = ?");
	$pre->bind_param("i", $id);
	$pre->execute();
	echo "Sukses Menghapus ". $row['nama'];
	echo "<meta http-equiv='refresh' content='1;url=insert.php'>";
	$pre->close();
	$conn->close();
?>
