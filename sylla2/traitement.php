<?php
header('Content-Type: application/force-download');
header('Content-disposition: attachment; filename=sylla.xls');
//Fix for crappy IE bug in download.
header("Pragma: ");
header("Cache-Control: ");
include("index.php");
?>