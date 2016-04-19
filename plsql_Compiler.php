<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PL/SQL SQL | CC</title>
<!-- Stylesheet files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/checkbox_style.css">

<script src="js/script.js"></script>
<script src="jquery/jquery-1.8.3.min.js"></script>
<script src="ace/ace.js"></script>
<script src="ace/theme-twilight.js"></script>
<script src="ace/mode-ruby.js"></script>
<script src="jquery-ace.min.js"></script>
<script src="js/tooltip.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<?php require('include/fpdf.php'); ?>
</head>
<body>
<div class="col-lg-12 col-md-12 col-sm-12">
<div>
<?php 
	include('include/nav-header.php'); 
	if(isset($_POST['editorPDF'])) {
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
<div class="edit">
  <form action="plsql_output.php" method="post" target="output" id="myForm">
    <textarea name="editor" id="editor" class="editor editor-style" autofocus>
select table_name from user_tables;
	</textarea>
    <script>	
	$('.editor').ace({ theme: 'chrome', lang: 'ruby' });	
	</script>
    <div class="input-group col-lg-12 col-md-12 col-sm-12 buttons">
      <BR/>
    
      <input type="checkbox" id="checkbox1" class="css-checkbox" onClick="fullScreenEditor();"/>
      <label for="checkbox1" class="css-label lite-cyan-check">Result In New TAB</label>
      <input type="submit" value="Result" class="btn btn-success" />
    </div>
  </form>
  <div class="col-lg-12 col-md-2 col-sm-1">
      <div class="row">
        <div class="col-lg-1 col-md-1">
        <form method="post" id="buttonForm" target="_blank">
          <input type="hidden" name="editorPDF" id="Input_CodePDF"/>
          <button type="submit" class="btn btn-default" onClick="return readCode();" data-toggle="tooltip" data-placement="top" title="Download In PDF"> <span class="glyphicon glyphicon-download"> </span> PDF </button>
        </form>
        </div>
        <div class="col-lg-1 col-md-1">
        <form action="include/index.php" method="get" target="_blank">
          <input type="hidden" name="editorQR" id="Input_CodeQR"/>
          <button type="submit" class="btn btn-default" onClick="return readCode1();" data-toggle="tooltip" data-placement="top" title="Get QR Code"> <span class="glyphicon glyphicon-download"> </span> QR Code </button>
        </form>
        </div>
        <br/>
        </div>
      </div>
  <iframe name="output" height="300" width="100%" src="php_output.php" class="output" id="output">
  <iframe>
</div>
</div>
</div>

</body>
<script src="js/bootstrap.js"></script>
</html>
