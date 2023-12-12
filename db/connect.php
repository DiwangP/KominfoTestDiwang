<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'sekolah');

$con = mysqli_connect(HOST, USER, PASS, DB) or die('tidak bisa konek');

?>