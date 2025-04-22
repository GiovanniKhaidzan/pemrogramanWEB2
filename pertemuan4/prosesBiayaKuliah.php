<center>
	<table>
	<tr>
		<h2>Biaya Kuliah Anda</h2>
	</tr>
		<?php 
			$namaSiswa = $_POST['namaMhs'];
			$prodi = $_POST['prodi'];
			$masuk = $_POST['masuk'];
			$lamaKuliah = date("Y") - $masuk ;
			
			if ($prodi == "Teknik informatika"){
				$spp = 7000000;
				$biayaBuku = 500000;
				$registrasi = 400000;
			} else if ($prodi == "Akuntansi"){
				$spp = 5000000;
				$registrasi = 400000;
				$biayaBuku = 300000;
			} else if ($prodi == "Sastra inggris"){
				$spp = 4500000;
				$biayaBuku = 200000;
				$registrasi = 250000;
			} else if ($prodi == "Manajemen"){
				$spp = 5000000;
				$biayaBuku = 500000;
				$registrasi = 200000;
			}
			$diskon = $lamaKuliah * 0.1;
			$registrasiAwal = $registrasi * $diskon;
			$registrasiAkhir = $registrasi - $registrasiAwal ;
			$total = $spp + $biayaBuku + $registrasiAkhir;
			
			
			echo "
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: $namaSiswa</td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>: $prodi</td>
			</tr>
			<tr>
				<td>Masuk</td>
				<td>: $masuk</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>Lama Kuliah</td>
				<td>: $lamaKuliah tahun</td>
			</tr>
			<tr>
				<td>Biaya Buku</td>
				<td>: Rp.$biayaBuku</td>
			</tr>
			<tr>
				<td>Spp</td>
				<td>: Rp.$spp</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>Biaya Registrasi</td>
				<td>: Rp.$registrasiAkhir</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>Total Pembayaran</td>
				<td>: Rp.$total</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			
			";
		?>
	</table>
</center>
