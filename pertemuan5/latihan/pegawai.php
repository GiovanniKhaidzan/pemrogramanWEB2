<form action="prosesGaji.php" method="post"> 
       <center>
              <h1>FORM PEGAWAI</h1>
              
              <table >
                     <tr>
                            <td><hr></td>
                            <td><hr></td>
                     </tr>
                     <tr>
                            <td>Nama Pegawai</td>
                            <td>: <input type="text" name="namaPegawai" id=""></td>
                     </tr>
                     <tr>
                            <td>Bagian</td>
                            <td>: 
                                   <select name="bagian" id="">
                                          <option value="HRD">HRD</option>
                                          <option value="IT">IT</option>
                                          <option value="PEMASARAN">PEMASARAN</option>
                                   </select>
                            </td>
                     </tr>
                     <tr>
                            <td>Tunjangan</td>
                            <td>:
                                   <input type="checkbox" name="Makan" value="Makan">Makan
                                   <input type="checkbox" name="Transport" value="Transport">Transport
                                   <input type="checkbox" name="Anak" value="Anak">Anak
                            </td>
                     </tr>
                     <tr>
                            <td>Pendidikan</td>
                            <td>:
                                   <input type="radio" name="sarjana" id="" value="s1" >S1
                                   <input type="radio" name="sarjana" id="" value="s2" >S2
                                   <input type="radio" name="sarjana" id="" value="s2" >S3 
                            </td>
                            
                     </tr>
              </table>
              <input type="submit" value="PROSES">
              <input type="reset" value="RESET">
       </center>             
</form>

