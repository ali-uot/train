<?php
$host_name="localhost";
$host_username="root";
$host_password="";
$host_database="my_db";
$connect=@mysqli_connect($host_name, $host_username, $host_password, $host_database);
if(mysqli_connect_errno()){
    echo "failed ".mysqli_connect_error();
    exit();
}

mysqli_query($connect,
	"
	SET character_set_results = 'utf8',
	character_set_client = 'utf8',
	character_set_connection = 'utf8',
	character_set_database = 'utf8',
	character_set_server = 'utf8'");
?>