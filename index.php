<?php
require "log.php";	
if (@$_GET["redirect"]){
	header("Location: ".$_GET["redirect"]);
} else {
	echo "Error 404: Not found";
}?>
