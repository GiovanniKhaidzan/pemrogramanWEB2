<form action="prosesBiayaKuliah.php" method=POST>
<center>
	<h2>Buat program biaya kuliah</h2>
	<hr>
	<table>
		<tr>
			<td>Nama Mahasiswa </td>
			<td>
				<input type=text name="namaMhs" size=20>
			</td>
		</tr>		
		<tr>
			<td>Prodi </td>
			<td>
				<select name="prodi">
					<option>Teknik informatika</option>
					<option>Akuntansi</option>
					<option>Sastra inggris</option>
					<option>Manajemen</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Masuk</td>
			<td>
				<input type="text" name="masuk" size=20>
			</td>
		</tr>
	</table>
	<hr>
	<input type=submit value="PROSES">
	<input type=reset value="RESET">
</center>
</form>
