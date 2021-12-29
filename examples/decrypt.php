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

$key = 'DPSv8kdvR49ivZj6JG7nJeg76Z3672Fz';
$riem = new riem;
$encrypted = file_get_contents('../data.riem');
$decrypted = $riem->decrypt($encrypted, $key);
print_r($decrypted);
