<form action="prosesPenjualan.php" method="POST">
           <center>
        <table border="1" cellpadding="5">
            <tr>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Ukuran</th>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="lemineral" value="lemineral"> Lemineral
                </td>
                <td>
                    <select name="jumlahLemineral">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
                <td>
                    <input type="radio" name="ukuranLemineral" value="kecil"> Kecil
                    <input type="radio" name="ukuranLemineral" value="besar"> Besar
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox" name="aqua" value="aqua"> Aqua
                </td>
                <td>
                    <select name="jumlahAqua">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
                <td>
                    <input type="radio" name="ukuranAqua" value="kecil"> Kecil
                    <input type="radio" name="ukuranAqua" value="besar"> Besar
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox" name="kawakawa" value="kawakawa"> KawaKawa
                </td>
                <td>
                    <select name="jumlahKawaKawa">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
                <td>
                    <input type="radio" name="ukuranKawaKawa" value="kecil"> Kecil
                    <input type="radio" name="ukuranKawaKawa" value="besar"> Besar
                </td>
            </tr>
            
        </table>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
       </center>
    </form>
