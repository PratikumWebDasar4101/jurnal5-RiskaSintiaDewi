<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center">
		<form action="prosesregis.php" method="POST">
			<tr>
				<td>NIM</td> 
				<td>:</td>
				<td> <input type="number" maxlength="10" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td> 
				<td>:</td>
				<td> <input type="text" maxlength="25" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td> 
				<td>:</td>
				<td> <input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Komentar</td> 
				<td>:</td>
				<td> <input type="text" name="komentar"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><br><input type="submit" name="Kirim" value="Kirim"></td>
			</tr>
		</form>
	</table>
</body>
</html>
