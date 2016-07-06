<?php 

$path = "/Applications/MAMP/htdocs/logs/";
$file = fopen($path.time().".txt", "w");
fwrite($file, print_r($_REQUEST,1));
fwrite($file, print_r(getallheaders(),1));
fclose($file);
exit;