<?php
error_reporting (0);
$query1=mysql_query ("SELECT NIP from pegawai");
$query2=mysql_query ("SELECT nopasien from pasien");
$query3=mysql_query ("SELECT kodejadwal from jadwalpraktek");
$nopendaftaran=$_GET['nopendaftaran'];
$qryanggota=mysql_query("select * from pendaftaran where nopendaftaran='$nopendaftaran'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT PENDAFTARAN</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_pendaftaran" method="post">
  <div align="center">
    <table width="80%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:25px;"><div align="center"><strong>SUNTING DATA PENDAFTARAN</strong></div></td>
        </tr>
      <tr>
        <td height="28">NO PENDAFTARAN</td>
          <td>:</td>
          <td><input name="nopendaftaran"  size="10" type="text" required="required" value="<?php echo $tampilsiswa['nopendaftaran'];?>"  /></td>
        </tr>
      <tr>
        <td style="padding-left:1px;">TANGGAL PENDAFTARAN</td>
        <td >:</td>
        <td ><select name="tglpendaftaran" size="1" id="tglpendaftran">
            <?php

		     for ($i=1;$i<=31;$i++)

			 {

			   echo "<option value=".$i.">".$i."</option>";

			 }

		  ?>
          </select>
            <select name="bln" size="1" id="bln">
              <?php

		     $bulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

		     for ($i=1;$i<=12;$i++)

			 {

			   echo "<option value=".$i.">".$bulan[$i]."</option>";

			 }

		  ?>
            </select>
            <select name="thn" size="1" id="thn">
              <?php

		     for ($i=1983;$i<=3000;$i++)

			 {

			   echo "<option value=".$i.">".$i."</option>";

			 }

		  ?>
          </select></td>
      </tr>
	   <tr>
        <td style="padding-left:1px;">NO URUT</td>
        <td>:</td>
        <td><input type="text" name="nourut"  size="10" placeholder="Masukan No Urut " required="required"  value="<?php echo $tampilsiswa['nourut'];?>"  /></td> 
		</tr>
      	  <tr>
        <td style="padding-left:1px;">NIP</td>
        <td>:</td>
        <td><select name="pegawai">
		<?php while ($pegawai=mysql_fetch_array($query1)){
				echo "<option>$pegawai[NIP]</option>";
		}?>
		</select>
		</td>
		  </tr>
            <tr>
        <td style="padding-left:1px;">NO PASIEN</td>
        <td>:</td>
        <td><select name="pasien">
		<?php while ($pasien=mysql_fetch_array($query2)){
				echo "<option>$pasien[nopasien]</option>";
		}?>
		</select>
		</td>
		  </tr>
     		 <tr>
        <td style="padding-left:1px;">KODE JADWAL</td>
        <td>:</td>
        <td><select name="jadwalpraktek">
		<?php while ($jadwalpraktek=mysql_fetch_array($query3)){
				echo "<option>$jadwalpraktek[kodejadwal]</option>";
		}?>
		</select>
		</td>
		  </tr>
       <tr>     
      <td height="25">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" value="UBAH" /> 
            <input type="button" onclick="javascript:history.back();" value="BATAL" /></td>
        </tr>
    </table>
  </div>
</form>
</div>
</body>
</html>
