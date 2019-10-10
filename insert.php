<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nama" placeholder="nama" required> <br>
		<input type="email" name="email" placeholder="email" required> <br>
		<textarea name="address" rows="10" placeholder="address" required></textarea> <br>
		<input type="submit" name="btn" value="Simpan">
	</form>
	<br>

<?php
	$sql = "SELECT * FROM coba";
	$res = $conn->query($sql);
	if ($res->num_rows > 0) { ?>
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Address</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			
		<?php while ($row = $res->fetch_assoc()) { ?>
		<tr>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["address"]; ?></td>
			<td>
				<a href="edit.php?<?= md5("id"); ?>=<?= base64_encode($row["id"]); ?>">Edit</a>
				<a href="hapus.php?<?= md5("id"); ?>=<?= base64_encode($row["id"]); ?>" onclick="return confirm('Yakin Ingin Hapus ?')">Hapus</a>
			</td>
		</tr>	
	<?php }
	} else { ?>
	<h1>Data kosong</h1>
		</tbody>
	</table>
<?php }?>
	<?php
		if (isset($_POST['btn'])) {
			$pre    = $conn->prepare("INSERT INTO coba (nama, email, alamat) VALUES (?, ?, ?)");
			$pre->bind_param("sss", $nama, $email, $alamat);
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