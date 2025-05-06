<center>
<?php  
       error_reporting(0);
    $lemineral = $_POST['lemineral'];
    $jumlahLemineral = $_POST['jumlahLemineral'];
    $ukuranLemineral = $_POST['ukuranLemineral'];
    $aqua = $_POST['aqua'];
    $jumlahAqua = $_POST['jumlahAqua'];
    $ukuranAqua = $_POST['ukuranAqua'];
    $kawakawa = $_POST['kawakawa'];
    $jumlahKawaKawa = $_POST['jumlahKawaKawa'];
    $ukuranKawaKawa = $_POST['ukuranKawaKawa'];
    $hargaAqua = 0;
    $hargaKawaKawa = 0;
    $hargaLemineral = 0;

    
       
    if ($lemineral) {
        if ($ukuranLemineral == "kecil") {
            $hargaLemineral = 40000;
        } else if ($ukuranLemineral == "besar") {
            $hargaLemineral = 50000;
        } else {
            $hargaLemineral = 0;
        }
    }
    if($aqua){
       if ($ukuranAqua == "kecil") {
              $hargaAqua = 70000;
          } else if ($ukuranAqua == "besar") {
              $hargaAqua = 90000;
          } else {
              $hargaAqua = 0;
          } 
    }
    if($kawakawa){
       if ($ukuranKawaKawa == "kecil") {
              $hargaKawaKawa = 15000;
          } else if ($ukuranKawaKawa == "besar") {
              $hargaKawaKawa = 20000;
          } else {
              $hargaKawaKawa = 0;
          } 
    }
        $stLemineral = $hargaLemineral * $jumlahLemineral;
        $stAqua = $hargaAqua * $jumlahAqua;
        $stKawaKawa = $hargaKawaKawa * $jumlahKawaKawa;

        $totalHarga = $stAqua + $stKawaKawa + $stKawaKawa;
    if ($totalHarga >= 40000) {
       $diskon = 0.1 * $totalHarga;
    } else {
       $diskon = 0.05 * $totalHarga;
    }
    $bayar = $totalHarga - $diskon;
        echo "
        <table border='1'>
            <tr>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>Lemineral</td>
                <td>$jumlahLemineral</td>
                <td>$ukuranLemineral</td>
                <td>$hargaLemineral</td>
                <td>$stLemineral</td>
            </tr>
            <tr>
                <td>Aqua</td>
                <td>$jumlahAqua</td>
                <td>$ukuranAqua</td>
                <td>$hargaAqua</td>
                <td>$stAqua</td>
            </tr>
            <tr>
                <td>KawaKawa</td>
                <td>$jumlahKawaKawa</td>
                <td>$ukuranKawaKawa</td>
                <td>$hargaKawaKawa</td>
                <td>$stKawaKawa</td>
            </tr>
            <tr>
              <td colspan=4>Total Harga</td>
              <td>$totalHarga</td>
            </tr>
            <tr>
              <td colspan=4>Diskon 10 %</td>
              <td>$diskon</td>
            </tr>
            <tr>
              <td colspan=4>Bayar</td>
              <td>$bayar</td>
            </tr>
        </table>
        ";
?>
</center>
