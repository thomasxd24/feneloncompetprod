<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'competences');
define('DB_PASSWORD', 'Fn8vHtjRgOjRNcu9');
define('DB_DATABASE', 'competences');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($db, 'utf8');
mysqli_query($db, "SET collation_connection = utf8_unicode_ci");
