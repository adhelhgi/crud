<!DOCTYPE html>
<html>
<head>
	<title>Data Pengguna</title>
</head>
<body>
	<h2></h2>
	
	<p><a href="index.php">Home</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah User</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="UserName" required></td>
			</tr>
			<tr>
				<td>Attribute</td>
				<td>:</td>
				<td><input type="text" name="Attribute" required></td>
			</tr>
			<tr>
				<td>op</td>
				<td>:</td>
				<td>
					<input name="op" required></td>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="text" name="Value" required></td>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>