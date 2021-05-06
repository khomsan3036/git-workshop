<?php
$host='localhost';
$user='user';
$pass='password_db';
$dbname= 'db';
mysqli_connect($host,$user,$pass,$dbname);
echo "connect success";