<?php

$mysqli = new mysqli("localhost", "root", "", "dbretail");
if ($mysqli->connect_error){
    die("koneksi gagal :".$mysqli->error);
}

?>