<?php
define('DB_NAME', 'uas_ionic');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$kon = mysqli_connect("localhost", "root", "", "uas_ionic") or die(mysqli_error());
