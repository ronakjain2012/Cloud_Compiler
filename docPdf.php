<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Text To PDF</title>

<!-- Stylesheet files-->

<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="jquery/jquery-1.20.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $('#CCSearch').keyup(function(){
			var search_string = $('#CCSearch').val();
			if(search_string == '') {
				$('#suggestions').html('');
			} else {
				$.post("search.php",
				{
					searchString: search_string
				}, function(data,status){
            		$('#suggestions').html(data);
					//alert(status);
        		});
			}
		});
});
</script>
</head>

<?php require('include/fpdf.php'); ?>
<?php

	if(isset($_POST['editorPDF']) and (strlen($_POST['editorPDF']) >= 1)) {
		$temp = htmlspecialchars_decode($_POST['editorPDF']);
		ob_start();
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',10);
		$pdf->Multicell(190,5,$temp,'T');
		$pdf->Output();
		ob_end_flush();
	}
	
?>
<body class="main-body">
<!-- Bootstrap div Start -->
<div class="col-lg-12 col-md-12 col-sm-12">
<div>
<?php include('include/nav-header.php');  ?>
<!-- Search START -->
<div class="search col-lg-12 col-md-11 col-sm-11">
  <form method="get" action="searchSource.php">
    <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
    <div class="input-group col-lg-10 col-md-9 col-sm-9"><span class="input-group-addon small-border-search-right" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
      <input list="searches" class="form-control small-border" placeholder="Search" name="CCSearch" id="CCSearch" aria-describedby="basic-addon1" />
      <div id="suggestions">
     
      </div>
    </div>
    <div class="col-lg-12 col-md-11 col-sm-11"><br/>
      <input type="submit" class="btn btn-success form-control" value="Search" />
    </div>
  </form>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 text-left">
<div class="col-lg-12 col-md-12 col-sm-12 text-center">
	 <form method="Post" target="_blank">
              <textarea name="editorPDF" class="form-control" rows="15" style="margin:15px 0px 0px 0px;" autofocus></textarea>
              <button type="submit" class="btn btn-default" style="width:150px;margin:15px 0px 0px 0px;" data-toggle="tooltip" data-placement="top" title="Get QR Code"> <span class="glyphicon glyphicon-download"> </span> Text to PDF </button>
      </form>
</div>
</div>
</div>
</body>
</html>