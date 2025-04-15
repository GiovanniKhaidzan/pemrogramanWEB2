<?php
$nama = ["Budi", "rina", "santi", "sintia", "dony", "kukubima"];
$prodi = ["Elektro", "informatika", "elektro", "informatika", "manajemen", "kedokteran"];
$matkul = ["teknik radio", "skibidi", "sigma", "yes yes", "dop dop","woi"];
$nilai = ["90","90","80","70","30","100"];
$grade = ["","","","","",""];
$keterangan =  ["","","","","",""];
echo "
<center>		
	<table border=10 width=600px>
			<tr>
					<td>Nama mahasiswa</td>
					<td>prodi</td>
					<td>matakuliah</td>
					<td>nilai</td>
					<td>Grade</td>
					<td>keterangan</td>
					
			</tr>";
	for($i = 0; $i < 6 ; $i++ ){	
	if ($nilai[$i] >= 80){
		$grade[$i] = "A";
		$keterangan[$i] = "Lulus";
	} else if ($nilai[$i] >= 70){
		$grade[$i] = "B";
		$keterangan[$i] = "Lulus";
	} else if ($nilai[$i] >= 30){
		$grade[$i] = "C";
		$keterangan[$i] = "Ulang";
	}
	
	if ($prodi[$i] == "informatika"){
			echo "
			<tr>
				<td>$nama[$i]</td>
				<td>$prodi[$i]</td>
				<td>$matkul[$i]</td>
				<td>$nilai[$i]</td>
				<td>$grade[$i]</td>
				<td>$keterangan[$i]</td>
			</tr>
			";
	}
	
	
	}
	echo "
	 	</table>
		</center>
	"
?>