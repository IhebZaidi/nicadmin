<?php

$langfile="";
if(mlang_getcurrentlang() == "Arabic")
	$langfile="Arabic.php";
if(mlang_getcurrentlang() == "English")
	$langfile="English.php";
if(mlang_getcurrentlang() == "French")
	$langfile="French.php";

if($langfile)
	include(getabspath("include/lang/".$langfile));

function mlang_message($tag)
{
	global $mlang_messages,$mlang_defaultlang;
	return @$mlang_messages[mlang_getcurrentlang()][$tag];
}

?>