<?php
$user="secret";
$password="secret";
$host="localhost";
$db="secret";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh,$user,$password);