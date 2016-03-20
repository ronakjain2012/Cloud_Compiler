<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SQL | Cloud Compiler</title>
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
  <form action="sql_output.php" method="post" target="output" id="myForm">
    <textarea name="editor" id="editor" class="editor editor-style" autofocus>show tables;
    </textarea>
        <script>
  			$('.editor').ace({ theme: 'chrome', lang: 'ruby' })
		</script>
    <div class="input-group col-lg-12 col-md-12 col-sm-12 buttons">
    <BR/>
    
      <input type="checkbox" id="checkbox1" class="css-checkbox" onClick="fullScreenEditor();"/>
      <label for="checkbox1" class="css-label lite-cyan-check">Result In New TAB</label>
      <input type="submit" value="Result"  class="btn btn-default"/>
    </div>
  </form>
  <form method="post" target="new">
        <input type="hidden" name="editorPDF" id="Input_PDF"/>
        <button type="submit" class="btn btn-default" onClick="return readCode();" data-toggle="tooltip" data-placement="top" title="Download In PDF"> <span class="glyphicon glyphicon-download"> </span> PDF </button>
      </form>
  <br/>
  <iframe name="output" height="300" width="100%" src="sql_output.php" class="output" id="output">
  <iframe>
</div>
</div>
</div>
</body>
</html>