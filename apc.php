<?php
$res=apc_fetch('upload_1243');
apc_delete('upload_1243');
if($res[total])
 	$total=($res[current]/$res[total]);
 echo $total;

