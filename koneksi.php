<?php 
$connetion = mysqli_connect("localhost","","root","lostandfound");

if(mysqli_connect_errno()) {
    echo "WOI KONEKSINYA ILANG!". mysqli_connect_error();
}
?>