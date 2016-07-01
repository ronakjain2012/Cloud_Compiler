<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HTML | Cloud Compiler</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/checkbox_style.css">
<script src="js/script.js"></script>
<script src="jquery/jquery-1.20.min.js"></script>
<script src="ace/ace.js"></script>
<script src="ace/theme-twilight.js"></script>
<script src="ace/mode-ruby.js"></script>
<script src="jquery-ace.min.js"></script>
<script src="js/tooltip.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<?php require('include/fpdf.php'); ?>
<?php include('include/functions.php') ?>
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
      <form action="html_output.php" method="post" target="output" id="myForm">
        <textarea name="editor" id="editor" class="editor editor-style" autofocus>
    <?php 
	if(isset($_GET['loadfile'])){
		$fileName = normalizeString($_GET['loadfile']);
		$filen = "myfiles\\".$fileName;
		if (file_exists($filen)==1) {
			$myFile = fopen($filen,'r') or die(" //No File Available ! Write New Code Here !");
			while (! feof ($myFile)) {
			  echo fgetc($myFile);
  			}
			fclose($myFile);
		} else {
			echo " //No File Available ! Write New Code Here !";
		}
	} else {
echo "
<html>
	<head>
		<title> Test </title>
	</head>
	<body>
		
	</body>
</html>
";
	}
?>
    </textarea>
        <script>
  			$('.editor').ace({ theme: 'chrome', lang: 'ruby' })
		</script>
        <div class="input-group col-lg-12 col-md-12 col-sm-12 buttons"> <BR/>
          <input type="checkbox" id="checkbox1" class="css-checkbox" onClick="fullScreenEditor();"/>
          <label for="checkbox1" class="css-label lite-cyan-check">Result In New TAB</label>
          <input type="submit" value="Result"  class="btn btn-default"/>
        </div>
      </form>
      <div class="col-lg-12 col-md-2 col-sm-1">
        <div class="row text-center">
          <div class="col-lg-1 col-md-1">
            <form method="post" id="buttonForm" target="_blank">
              <input type="hidden" name="editorPDF" id="Input_CodePDF"/>
              <button type="submit" class="btn btn-default btn-fullsize" onClick="return readCode();" data-toggle="tooltip" data-placement="top" title="Download In PDF"> <span class="glyphicon glyphicon-book"> </span> PDF </button>
            </form>
          </div>
          <div class="col-lg-1 col-md-1">
            <form action="include/index.php" method="get" target="_blank">
              <input type="hidden" name="editorQR" id="Input_CodeQR"/>
              <button type="submit" class="btn btn-default btn-fullsize" onClick="return readCode1();" data-toggle="tooltip" data-placement="top" title="Get QR Code"> <span class="glyphicon glyphicon-download"> </span> QR </button>
            </form>
          </div>
          <div class="col-lg-1 col-md-1"> 
            <!-- Trigger the modal with a button -->
              <button type="button" class="btn btn-default btn-fullsize" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-save" onClick="return readCode2();"></span> Save </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Save File</h4>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="saveFile.php" target="_blank">
                      <input type="hidden" value="html" name="fileType" />
                      <input type="hidden" id="fileValue" name="fileValue" />
                      <div class="row">
                        <div class="col-lg-3 col-md-3"><strong>File Name</strong> </div>
                        <div class="col-lg-5 col-md-5">
                          <input type="text" class="form-control free" name="fileName"/>
                        </div>
                        <div class="col-lg-2 col-sm-2">
                          <input type="text" class="form-control free" name="fileExt" value="html" readonly/>
                        </div>
                        <div class="col-lg-2 col-md-2">
                          <button type="submit" onClick="return readCode2();" class="btn btn-success form-control free"> Save </button>
                        </div>
                      </div>
                      <br/>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--END Modal --> 
          </div>
        </div>
        <br/>
      </div>
      <br/>
      <iframe name="output" height="300" width="100%" src="html_output.php" class="output" id="output">
      <iframe>
    </div>
  </div>
</div>
</body>
</html>