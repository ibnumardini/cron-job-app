<?php
$sekarang = date('d M Y H:i:s', strtotime('now'));
// buat string buat message
$message =  "Dijalankan pada : " . $sekarang . "\n";

$file = fopen('dataCron.txt', 'a') or die("Gagal");
fwrite($file, $message);
fclose($file);
