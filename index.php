<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cloud Compiler</title>

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
<!-- Search END -->
<div class="tabs text-center">
  <div class="nav-center">
    <ul class="nav nav-tabs centered">
      <li class="active tabSize"><a data-toggle="tab" href="#home">Compiler Interfaces</a></li>
      <li class="tabSize"><a data-toggle="tab" href="#menu1">Tools</a></li>
      <li class="tabSize"><a data-toggle="tab" href="#menu2">Tutorials</a></li>
    </ul>
  </div>
</div>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="languages">
      <!-- first Row Start -->
      <div class="row"><a href="PHP_Compiler.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail "><img src="images/1/PHP.png" class="rotate-360" alt="PHP">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="PHP_Compiler.php" class="btn btn-primary  btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a><a href="SQL_Compiler.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/sql.png" class="rotate-360" alt="SQL">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="SQL_Compiler.php" class="btn btn-primary  btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a><a href="plsql_Compiler.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/pl-sql.png" class="rotate-360" alt="PL/SQL">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="plsql_Compiler.php" class="btn btn-primary  btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a><a href="HTML_Compiler.php">
          <div class="col-md-3 col-sm-3">
            <div class="thumbnail"><img src="images/html.png" class="rotate-360" alt="HTML">
              <div class="caption">
                <p><!-- Any Text --></p>
                <p><a href="HTML_Compiler.php" class="btn btn-primary btn-go" role="button">Go</a></p>
              </div>
            </div>
          </div>
        </a></div>
      
      <!-- First Row END -->
      <!-- Second Row Start -->
      
      <div class="row">
      <a href="Javascript_Compiler.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/javascript.png" class="rotate-360" alt="HTML">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="Javascript_Compiler.php" class="btn btn-primary btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a>
        
        <a href="c_Compiler.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/c.png" class="rotate-360" alt="CSS STYLING">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="c_Compiler.php" class="btn btn-primary btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a>
        <a href="C++_Compiler.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/c++.png" class="rotate-360" alt="JAVASCRIPT">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="C++_Compiler.php" class="btn btn-primary btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a>
      	<a href="Java_Compiler.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/java.png" class="rotate-360" alt="BATCH PROGRAMMING">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="Java_Compiler.php" class="btn btn-primary btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
      </div>
      </a>
      <!-- Second Row END -->
      <div class="row">
      <a href="Batch_Compiler.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/Batch.png" class="rotate-360" alt="HTML">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="Batch_Compiler.php" class="btn btn-primary btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a>
      </div>
      </div>
  </div>
  <!-- Tab Data-->
  <div id="menu1" class="tab-pane fade">
    <div class="languages">
      <div class="row">
      <a href="QRcode.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail "><img src="images/QR.png" class="rotate-360" alt="PHP">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="QRcode.php" class="btn btn-primary  btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a>
        <a href="docPdf.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/pdf.png" class="rotate-360" alt="SQL">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="docPdf.php" class="btn btn-primary  btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a><a href="wordPad.php">
        <div class="col-md-3 col-sm-3">
          <div class="thumbnail"><img src="images/wordpad.png" class="rotate-360" alt="PL/SQL">
            <div class="caption">
              <p><!-- Any Text --></p>
              <p><a href="wordPad.php" class="btn btn-primary  btn-go" role="button">Go</a></p>
            </div>
          </div>
        </div>
        </a></div>
    </div>
  </div>
  
  <div id="menu2" class="tab-pane fade">
    <div class="languages">
    	<div class="row"> 
        	<a href="tutec.php" style="font-size:24px;margin-left:30px">
            <span class="glyphicon glyphicon-tree-deciduous">
            <br/> C
            </span>
            </a>
            <a href="tutecss.php">
            <span class="glyphicon glyphicon-tree-deciduous" style="font-size:24px;margin-left:30px">
            <br/> CSS
            </span>
            </a>
        </div>
    </div>
  </div>
  
</div>
</div>
<!-- Container Div END -->
</div>
<!-- Bootstrap div END -->
</body>
<!-- JavaScript Files -->
</html>