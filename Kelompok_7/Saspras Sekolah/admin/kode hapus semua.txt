<script language="javascript">
function check_all()
{
    var chk = document.getElementsByName('check_list[]');
    for (i = 0; i < chk.length; i++)
    chk[i].checked = true ;
}

function uncheck_all()
{
    var chk = document.getElementsByName('check_list[]');
    for (i = 0; i < chk.length; i++)
    chk[i].checked = false ;
}
</script>

  <form method="post" action="?page=deleteallguru">

 <td><input type="checkbox" name="check_list[]" value="<?php echo $tampil['id_siswa'];?>" /></td>

<tr>
  
      <td style="padding-bottom:30px;"><a href="#" onClick="check_all()">Chek all</a>&nbsp;&nbsp; <a href="#" onClick="uncheck_all()">Unchek all</a>
        <input type="submit" name="hapus" value="HAPUS" onClick="return confirm('Hapus yang ditandai?')" />
        &nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>

<?php
include "koneksi.php";


$jumlah = count($_POST["check_list"]);
for($i=0; $i < $jumlah; $i++) 
{
    $kd_guru=$_POST["check_list"][$i];
	$myquery = "DELETE FROM siswa WHERE id_siswa = '$kd_guru'  LIMIT 1";
	$hapus = mysql_query($myquery);
	?><script language="javascript">alert ("Data yang ditandai Berhasil dihapus !"); location.href="javascript:history.back();";</script><?php
}
 ?>