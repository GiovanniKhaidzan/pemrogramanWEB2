<?php 

error_reporting(0);

$namaPegawai = $_POST['namaPegawai'];
$bagian = $_POST['bagian'];
$tjMakan = $_POST['Makan'];
$tjTrans = $_POST['Transport'];
$tjAnak = $_POST['Anak'];
$sarjana = $_POST['sarjana'];

if ($bagian == "HRD")                      {
       $gajiPokok = 8000000;
} else if ($bagian == "IT"){
       $gajiPokok = 7000000;
} else if ($bagian == "PEMASARAN"){
       $gajiPokok = 5000000;
}

if ($sarjana == "s1"){
       $pendidikan = 1000000;
} else if ($sarjana == "s2"){
       $pendidikan = 2500000;
} else if ($sarjana == "s3"){
       $pendidikan = 3000000;
}

$tunjanganMkn = 0;
$tunjanganTrans = 0;
$tunjanganAnak = 0;

if ($tjMakan){
       $tunjanganMkn = 0.1 * $gajiPokok;
}
if ($tjTrans){
       $tunjanganTrans = 0.15 * $gajiPokok;
}
if ($tjAnak){
       $tunjanganAnak = 0.05 *  $gajiPokok ;
}

$total = $gajiPokok + $pendidikan + $tunjanganMkn + $tunjanganTrans + $tunjanganAnak;

echo " 
<center>
<h1>Gaji loo</h1>
<table>
       <tr>
              <td><hr></td>
              <td><hr></td>
       </tr>
       <tr>
              <td>Nama Pegawai</td>
              <td>: $namaPegawai</td>
       </tr>
       <tr>
              <td>Bagian</td>
              <td>: $bagian</td>
       </tr>
       <tr>
              <td>Pendidikan</td>
              <td>: $sarjana</td>
       </tr>
        <tr>
              <td>Gaji</td>
              <td>: Rp.$gajiPokok</td>
       </tr>
       <tr>
              <td><hr></td>
              <td><hr></td>
       </tr>
       <tr>
              <td>Tunjangan</td>
       </tr>
       <tr>
              <td><hr></td>
              <td><hr></td>
       </tr>
       <tr>
              <td>Makan 10%</td>
              <td>: $tunjanganMkn</td>
       </tr>
       <tr>
              <td>Transport 15%</td>
              <td>: $tunjanganTrans</td>
       </tr>
       <tr>
              <td>Anak 5%</td>
              <td>: $tunjanganAnak </td>
       </tr>
       <tr>
              <td>Pendidikan</td>
              <td>: $pendidikan</td>
       </tr>
              <tr>
              <td><hr></td>
              <td><hr></td>
       </tr>
       <tr>
              <td>Total Gaji</td>
              <td>: $total</td>
       </tr>
</table>
</center>
";

?>
