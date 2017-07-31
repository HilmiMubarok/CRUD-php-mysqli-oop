<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nama" placeholder="nama"> <br>
		<input type="email" name="email" placeholder="email"> <br>
		<textarea name="alamat" rows="10" placeholder="alamat"></textarea> <br>
		<input type="submit" name="btn" value="Simpan">
	</form>

	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT * FROM coba";
				$res = $conn->query($sql);
				if ($res->num_rows > 0) {
					while ($row = $res->fetch_assoc()) { ?>
					<tr>
						<td><?php echo $row["nama"]; ?></td>
						<td><?php echo $row["email"]; ?></td>
						<td><?php echo $row["alamat"]; ?></td>
						<td>
							<a href="edit.php?<?php echo md5("id"); ?>=<?php echo base64_encode($row["id"]); ?>">Edit</a>
							<a href="hapus.php?<?php echo md5("id"); ?>=<?php echo base64_encode($row["id"]); ?>" onclick="return confirm('Yakin Ingin Hapus ?')">Hapus</a>
						</td>
					</tr>	
				<?php }
				}
			?>
		</tbody>
	</table>

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