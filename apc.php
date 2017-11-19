<?php
$res=apc_fetch('upload_1243');
// apc_delete('upload_1243');
if($res[total])
 	$total=round($res[current]*100/$res[total]);
 echo $total;
 if($total==0)
 	echo 3333;
