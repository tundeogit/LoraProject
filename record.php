<?php 

$req_dump = print_r($_REQUEST['test'], TRUE);
$my_file = 'request.log';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);

fwrite($handle, $req_dump);
?>