<?php 
$host = "db_postgres_lab";   
$port = "5432";        
$dbname = "first";  
$user = "pguser";  
$password = "pgpwd";  

$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conn = pg_connect($conn_string);

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}