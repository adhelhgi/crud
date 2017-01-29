<!DOCTYPE html>
<html>
<head>
	<title>Data Pengguna</title>
</head>
<body>
	<h2>DATA Pengguna</h2>
	
	<p><a href="index.php">Home</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data User</h3>
	
	<?php
	
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$show = mysql_query("SELECT * FROM radcheck WHERE id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="UserName" value="<?php echo $data['UserName']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Attribute</td>
				<td>:</td>
				<td><input type="text" name="Attribute" value="<?php echo $data['Attribute']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>op</td>
				<td>:</td>
				<td><input name="op" name="op" value="<?php echo $data['op']; ?>" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="Value" value="<?php echo $data['Value']; ?>" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
