<?php 
include "koneksi.php";
$nisn = $_GET['nisn'];
$kelas = $_GET['kelas'];
$tahun = $_GET['tahun'];
$kelasnya = "$kelas";
$pilih = mysql_query("SELECT * FROM siswa WHERE kelas = '$kelas'");
$ambil = mysql_query("SELECT * FROM siswa_has_mata_pelajaran WHERE nisn = '$nisn' ORDER BY thn_ajaran DESC");
?>
<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
function valid(form){
var nisn = form.nisn.value;
if(nisn==""){
	alert('Nama Siswa Belum Dipilih');
	return false;
	}
return true;
}
function printDiv(elementId) {
 var a = document.getElementById('printing-css').value;
 var b = document.getElementById(elementId).innerHTML;
 window.frames["print_frame"].document.title = document.title;
 window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
 window.frames["print_frame"].window.focus();
 window.frames["print_frame"].window.print();
}
</script>
<div align="right" id="print">
<a href="javascript:printDiv('print')">
<h1><div align="center">Laporan Nilai  <?php if($kelas!=""){echo "Kelas ";} ?></div></h1><br />

<hr>
<div align="center">
<table border="0">
  <tr>
    <td width="130">Nama Lengkap </td>
    <td width="11">:</td>
    <td width="207"><?php $sql = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE nisn = '$nisn'"));
	echo $sql['nama_siswa'];
	 ?></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?php echo $sql[nama_kelas];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $sql[alamat_siswa];?></td>
  </tr>
</table><hr />
</div>
<br />
<link rel="stylesheet" href="style2.css" />
<body>
	<div class="page" id="tablewrapper">
		<div id="tableheader"><span class="details">
		<div></div>
   		<div></div>
        	</span>
        </div>
  <table align="center" width="1001" border="0" cellpadding="0" cellspacing="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="42"><h3>No</h3></th>
                  <th width="195"><h3>Mata Pelajaran</h3></th>
				  <th width="95"><h3>KKM</h3></th>
				  <th width="95"><h3>Semester</h3></th>
				  <th width="95"><h3>Tahun Ajaran</h3></th>
                  <th width="95"><h3>Nilai Afektif</h3></th>
                  <th width="95"><h3>Nilai Huruf</h3></th>
				  
				 
				  
				  
                </tr>
            </thead>
            <tbody>
			<?php
			error_reporting(0);
			$kls = join('+',explode(" ",$kelas));
			while ($nilai= mysql_fetch_array($ambil)){
			$plj = mysql_fetch_array(mysql_query("SELECT nama_pelajaran FROM mata_pelajaran WHERE kd_pelajaran = '$nilai[nama_pelajaran]'"));
			$i++;
			echo"<tr align=\"center\">
			<td>$i</td>
			<td>$nilai[nama_pelajaran]</td>
			<td>$nilai[nilai_sk]</td>
			<td>$nilai[semester]</td>
			<td>$nilai[thn_ajaran]</td>
			<td>$nilai[afektif]</td>
			<td>$nilai[nilai_huruf]</td>
		
			<td>";
			
		 
			}
			?>
            </tbody>
      </table>
        <div id="tablefooter">
          <div id="tablenav">
            	
                
                
          </div>
			<div id="tablelocation">
			  <div class="page"></div>
          </div>
        </div>
</div>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
	var sorter = new TINY.table.sorter('sorter','table',{
		headclass:'head',
		ascclass:'asc',
		descclass:'desc',
		evenclass:'evenrow',
		oddclass:'oddrow',
		evenselclass:'evenselected',
		oddselclass:'oddselected',
		paginate:true,
		size:10,
		colddid:'columns',
		currentid:'currentpage',
		totalid:'totalpages',
		startingrecid:'startrecord',
		endingrecid:'endrecord',
		totalrecid:'totalrecords',
		hoverid:'selectedrow',
		pageddid:'pagedropdown',
		navid:'tablenav',
		sortcolumn:0,
		sortdir:1,
		//sum:[8],
		//avg:[6,7,8,9],
		//columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
		init:true
	});
  </script>
</body>