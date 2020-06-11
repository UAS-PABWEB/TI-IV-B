<?php
//koneksi ke database
include "config/koneksi.php";
 
//mengambil data dari tabel
$name = "Detail Umum";
$token = $_GET['token'];
$cek = $mysqli->query("SELECT *  FROM lap_sm2 WHERE NO_AGENDASM ='$token'");
$data = array();
 while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
    array_push($data, $row);
     $photo                	= $row['photo'];
     $NO_AGENDASM   = $row['NO_AGENDASM'];
     $ID      = $row['ID'];
     $JENIS_SURAT   = $row['JENIS_SURAT'];
     $TANGGAL_KIRIM   = $row['TANGGAL_KIRIM'];
     $TANGGAL_TERIMA   = $row['TANGGAL_TERIMA'];
     $NO_SURAT    = $row['NO_SURAT'];
     $PENGIRIM   = $row['PENGIRIM'];
     $PERIHAL   = $row['PERIHAL'];
   
} 
   header("Cache-Control: ");// leave blank to avoid IE errors
        header("Pragma: ");// leave blank to avoid IE errors
         header("Content-type: application/octet-stream");
       
  header("Content-Disposition: attachment; filename=".$name.".doc");
  header("Content-type: application/download");
  
  //echo "<pre>\n"; //start preformatted output
  echo ' <h2 style="font-size:19px;">Detail Data Umum</h2>
 <hr>'; //write "intro" ;)
  echo '<table class="table     table-hover" border="0">
                              
                              <tr>
                                  <td><label>NO AGENDASM</label></td>
                                  <td><label>: </label></td>
                                  <td><label>'.$NO_AGENDASM.'</label></td> 
                              </tr>
                              <tr>
                                  <td><label>ID PETUGAS</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$ID.'</label></td> 
                              </tr>
							  
							
                               <tr>
                                 <td><label>JENIS SURAT MASUK</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$JENIS_SURAT.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>TANGGAL KIRIM SURAT</label></td>
                                  <td><label>: </label></td>
                                  <td><label>'.$TANGGAL_KIRIM.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>TANGGAL TERIMA SURAT</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$TANGGAL_TERIMA.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>NO SURAT MASUK</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$NO_SURAT.'</label></td> 
                              </tr>
                               	           <tr>
                                 <td><label>PENGIRIM SURAT MASUK</label></td>
                                  <td><label>: </label></td>
                                   <td><label>'.$PENGIRIM.'</label></td> 
                              </tr>
							  
                               <tr>
                                 <td><label>PERIHAL SURAT MASUK</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$PERIHAL.'</label></td> 
                              </tr>
                              
                                  
                          </table>';
    echo '<img src="C:/xampp/xampp/htdocs/toko/admin/'.$photo.'">';
  
   
  
  echo "\n\n"; //write "outtro" :)

?>