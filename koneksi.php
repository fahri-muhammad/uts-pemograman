<?php
class Connection
{
 public function get_connection()
 {
 $host = "localhost";
 $database = "absensi";
 $username = "root";
 $password = "";
 $connect = new mysqli($iddosen, $tglabsen, $masuk, $keluar,$kodeabsen, $sesi, $kelassesi,);
 return $connect;
 }
}