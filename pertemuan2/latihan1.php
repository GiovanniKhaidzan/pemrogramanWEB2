	<?php
	$prodi = ["Elektro", "Informatika", "Manajement","Informatika"];
	$nama = ["Gio", "Ramsey", "Jilzz", "Bedil"];
	$tahun = [2022, 2023, 2024,2021];
	$spp = [0, 0, 0, 0];
	$diskon = [0, 0, 0, 0];
	$lamaKuliah = [];

	echo "
	<center>
		<table border=6 width = 800px>
			<tr>
				<td>Nama Mahasiswa</td>
				<td>Prodi</td>
				<td>Masuk</td>
				<td>SPP</td>
				<td>Lama Kuliah</td>
				<td>Pot SPP 10%</td>
				<td>Bayar</td>
			</tr>";

	for ($i = 0; $i < 4; $i++){
		$lamaKuliah[$i] = 2025 - $tahun[$i];
		if($prodi[$i] == "Elektro"){
			$spp[$i] = 3000000;
		} elseif ($prodi[$i] == "Informatika"){
			$spp[$i] = 4000000;
		} elseif ($prodi[$i] == "Manajement") {
			$spp[$i] = 2500000;
		}

    if ($lamaKuliah[$i] >= 2) {
        $diskon[$i] = $spp[$i] * 0.1;
    } else {
        $diskon[$i] = 0;
    }

		$bayar = $spp[$i] - $diskon[$i];

		echo "
			<tr>
				<td>{$nama[$i]}</td>
				<td>{$prodi[$i]}</td>
				<td>{$tahun[$i]}</td>
				<td>{$spp[$i]}</td>
				<td>{$lamaKuliah[$i]}</td>
				<td>{$diskon[$i]}</td>
				<td>$bayar</td>
		
			</tr>";
	}

	echo "</table>
					</center>
	";

	?>
