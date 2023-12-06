<?php
 $hostname ="localhost";
 $username ="root";
 $password ="";
 $database ="tokoonline";

 $koneksi =mysqli_connect ($hostname, $username, $password, $database); 

 if($koneksi) {

 }

 else {
    die("koneksi gagal").mysqli_connect_error();
 }

 ?>