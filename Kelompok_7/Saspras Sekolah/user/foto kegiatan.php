<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
<!--
.style1 {
	color: white;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: large;
	font-weight: bold;
}
.style2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FF00FF;
}
body,td,th {
	color:black;
}
body {
	background-color: black;
}
.style3 {
	color: black;
	font-size: large;
}
.style4 {font-family: Georgia, "Times New Roman", Times, serif; color: black; }
.style6 {font-family: Georgia, "Times New Roman", Times, serif; color: black; font-size: large; }
.style7 {font-size: medium}
.style8 {font-family: Georgia, "Times New Roman", Times, serif; color: black; font-size: medium; }
-->
    </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

  <body>
  &nbsp;
  &nbsp;
<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header" align="center"><hr>
									<font color="#7066ff"><h3 class="style1"> FOTO KEGIATAN SEKOLAH </h3>
								<hr></div>
								<center>
								
								
				 <table border="0">				
				<tr>
				<th> <p align="center"><img src=".jpg" width="300" align="middle" class="img-circle"></p><p align="center" class="style2 style3">FUTSAL</p></th>
				<th><p align="center"><img src="" width="300" align="middle" class="img-circle"></p><p align="center" class="style6">BOLA VOLI</p></th> 
				<th><p align="center"><img src=futsal 2.jpg" width="300" align="absmiddle" class="img-circle"></p><p align="center" class="style6">BASKET</p></th>
				</tr>
				<tr> 
                              	<th><p align="center"><img src="" width="300" align="middle" class="img-circle"></p><p align="center" class="style8">PASKIBRA</p></th>
				<th><p align="center"><img src="" width="300" align="middle" class="img-circle"></p><p align="center" class="style4">PRAMUKA</p></th>
				<th><p align="center"><img src="" width="300" align="middle" class="img-circle"></p><p align="center" class="style4">OSIS</p></th></th>
				</tr>
				
			
				</table>
                              	
				                    				
					
                     <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
