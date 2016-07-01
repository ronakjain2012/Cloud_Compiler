<?php
function normalizeString($text) {
	$text = stripslashes($text);
    $text = htmlentities($text);
    $text = strip_tags($text);
    return $text;
}
?>