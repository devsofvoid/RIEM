<?php
/*
██████╗ ██╗███████╗███╗   ███╗
██╔══██╗██║██╔════╝████╗ ████║
██████╔╝██║█████╗  ██╔████╔██║
██╔══██╗██║██╔══╝  ██║╚██╔╝██║
██║  ██║██║███████╗██║ ╚═╝ ██║
╚═╝  ╚═╝╚═╝╚══════╝╚═╝     ╚═╝
*/

require '../riem.php';

$string = $_GET['string'];
$key = $_GET['key'];
if(!$string || !$key) die('Проверьте наличие query GET запросов string и key');
$riem = new riem;
$encrypted = $riem->encrypt($string, $key);



header('Content-Disposition: attachment; filename="data.riem"');
header('Content-Type: text/plain');
header('Content-Length: ' . strlen($encrypted));
header('Connection: close');


echo $encrypted;
