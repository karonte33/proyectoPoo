<?php
require('core/core.php');

if (isset($_GET['view']) and file_exists('core/controllers/'.$_GET['view'].'.php') ) {
	include('core/controllers/'.$_GET['view'].'.php');
}else{
	include('core/controllers/index.php');
}

?>
