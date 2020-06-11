<div style="background-image: url(images/in.jpg);" data-stellar-background-ratio="0.10">
			<div class="overlay"></div>
			<div class="container-login100">
				<div class="row">
					<div class="col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 ">
<?php
error_reporting(0);
$ambil = mysql_query("SELECT MAX(NO_DISPOSISI) AS NO_DISPOSISI FROM disposisi");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['NO_DISPOSISI'];
$nourut = (int)substr($id, 4, 8);
$nourut++;
$char = "DP.";
$NO_DISPOSISI = $char . sprintf("%02s", $nourut);
?>
</script>
<section id="main-slider1" class="carousel">

        </section><!--/#main-slider-->
		 
<section ="main-slid_bukuer1" class="carousel">
 <br>
<br>
<br>         
    </section><!--/#main-slid_bukuer-->

    <section id_buku="services">
        <div class="container">
            <div style="color:#000000;" class="box first">
            <marquee behavior="scroll" ><img src="images/put.png" width="500" height="200"></marquee>
                <div class="row">


    <section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                 <header class="panel-heading">
                              <h3 align="center"><font face="Times New Roman">Input Data Disposisi</font></h3><br>
                             
                          </header>
<form class="form-horizontal form-label-center" id="form1" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row" align="center">
    <div class="col-md-6 col-sm-6 col-xs-12" align="center">
            <div class="item form-group" align="center">
			
				<div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO DISPOSISI : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
				<input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="NO_DISPOSISI"  required type="text" required="required" value="<?php echo $NO_DISPOSISI ?>"/></td>
                </div>
				</div>
				
				<div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO AGENDA SM :  <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            

    <td>
<?php    
			// Koneksi  
			mysql_connect("localhost","root","");    
			mysql_select_db("kelsembilan");    
			$result = mysql_query("select * from surat_masuk");  
			$jsArray = "var prdNam = new Array();\n";  
			echo '<select class="form-control col-md-8 col-xs-12" style="color:#000000;" name="NO_AGENDASM" onchange="document.getElementById(\'prd_nam\').value = prdNam[this.value]">';  
			echo'<option>Pilih</option>'; 
			while ($row = mysql_fetch_array($result)) {  
			echo '<option value="' . $row['NO_AGENDASM'] . '">' . $row['NO_AGENDASM'] . '</option>';  
			$jsArray .= "prdNam['" . $row['NO_AGENDASM'] . "'] = '" . addslashes($row['NO_AGENDADP']) . "';\n";  
			}  
			echo '</select>';  
?>
				 </td>
    </tr>
    <tr>
</div>
   </div>



	<div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO AGENDA : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="NO_AGENDADP"  required type="text">
                </div>
            </div>
	
	<div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO SURAT : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="NO_SURAT"  required type="text">
                </div>
            </div>

		<div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KEPADA : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="KEPADA"  required type="text">
                </div>
            </div>
		   
		   <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KETERANGAN: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <textarea input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="KETERANGAN"  required type="text"></textarea>
                </div>
            </div>
		   
		   <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">STATUS SURAT: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="STATUS_SURAT"  required type="text">
                </div>
            </div>
		   
		  <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAPAN: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="TANGGAPAN"  required type="text">
                </div>
            </div>
   
    <tr>
        <td colspan="3">
		<a href="javascript:history.back()"  class="btn btn-warning">Batal</a>  
            <button class="btn btn-primary" name="tbSimpan" type="submit"  value="Simpan"  ><i class="fa fa-save"></i> Simpan</button>
       
        </td>
    </tr>
	

                                                                                      
  </div>
</form>

<br>
<br>
<br>
<br>
<?php
error_Reporting(0);
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("salsa") or die(mysql_error());
if($_POST['tbSimpan']){
   $NO_DISPOSISI=$_POST['NO_DISPOSISI'];
   $NO_AGENDASM=$_POST['NO_AGENDASM'];
   $NO_AGENDADP=$_POST['NO_AGENDADP'];
   $NO_SURAT=$_POST['NO_SURAT'];
   $KEPADA=$_POST['KEPADA'];
   $KETERANGAN=$_POST['KETERANGAN'];
   $STATUS_SURAT=$_POST['STATUS_SURAT'];
   $TANGGAPAN=$_POST['TANGGAPAN'];
   
    $sql="INSERT INTO disposisi SET NO_DISPOSISI='$NO_DISPOSISI',NO_AGENDASM='$NO_AGENDASM',NO_AGENDADP='$NO_AGENDADP',NO_SURAT='$NO_SURAT',KEPADA='$KEPADA',KETERANGAN='$KETERANGAN',STATUS_SURAT='$STATUS_SURAT',TANGGAPAN='$TANGGAPAN'";
     echo "<script>alert('Data  Berhasil di simpan')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=data_dp'>";
    $query=mysql_query($sql) or die(mysql_error());
    }
    
?>
	