<?php
	$namaBarang[1] = "spidol";
	$namaBarang[2] = "penghapus";
	$harga[1] = 10000;
	$harga[2] = 15000;
	$jumlah[1] = 3;
	$jumlah[2] = 5;
	$total[1] = $harga[1] * $jumlah[1];
	$total[2] = $harga[2] * $jumlah[2];
	$total[3] = $total[1] + $total[2];
	

	echo "
		<table>
			<tr>
				<td>
					namaBarang  
				</td>
				<td>
					harga
				</td>
				<td>
					jumlah  
				</td>
				<td>
					total  
				</td>
			</tr>
			<tr>
				<td>
					$namaBarang[1]
				</td>
				<td>
					$harga[1]
				</td>
				<td>
					$jumlah[1]
				</td>
			</tr>
			
		<table/>
	";
	
	echo "barang 1 <br>";
	echo "nama = $namaBarang[1] <br>";
	echo "harga = $harga[1] <br>";
	echo "jumlah = $jumlah[1] <br>";
	echo "<hr>";
	echo "total barang 1 = $total[1]<br>";
	echo "<hr>";
	
	echo "barang 2 <br>";
	echo "nama = $namaBarang[2] <br>";
	echo "harga = $harga[2] <br>";
	echo "jumlah = $jumlah[2] <br>";
	echo "<hr>";
	echo "total barang 2 = $total[2]<br>";
	echo "<hr>";
	echo "total semua $total[3]";
?>