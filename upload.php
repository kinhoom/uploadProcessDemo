<?php
var_dump($_FILES);
if($_FILES[file1][error]==UPLOAD_ERR_OK){
	$name=basename($_FILES[file1][name]);
	copy($_FILES[file1][tmp_name],$name);
}
