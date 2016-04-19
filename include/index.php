<?php
	$msg = isset($_GET['editorQR']) ? $_GET['editorQR'] : '';
	if (!$msg) $msg = null;

	$err ='M';
	/*
	isset($_GET['err']) ? $_GET['err'] : 'Q';
	if (!in_array($err, array('L', 'M', 'Q', 'H'))) $err = 'Q'; */
	require_once('qrcode.class.php');
?>

<?php
	$qrcode = new QRcode(utf8_encode($msg), $err);
	$qrcode->displayHTML();
?>
			<center>
			<br>
			<img src="./image.php?msg=<?php echo urlencode($msg); ?>&amp;err=<?php echo urlencode($err); ?>" alt="generation qr-code" style="border: solid 1px black;">
		</center>