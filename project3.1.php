<?php
require_once "project3.php";

$eda = new buku ('Pengabdi Jelema','Mang udin','airlinggih','2003');
	echo "==============================".'<br>';
 	echo "Judul buku ".$eda->judul.'<br>';
 	echo "Pengarang ".$eda->pengarang.'<br>';
 	echo "Penerbit ".$eda->penerbit.'<br>';
 	echo "Tahun ".$eda->tahun.'<br>';
	echo "==============================".'<br>';
$eda = new buku ('Jurig','Mang endang','airlinggih','2006');
 	echo "Judul buku ".$eda->judul.'<br>';
 	echo "Pengarang ".$eda->pengarang.'<br>';
 	echo "Penerbit ".$eda->penerbit.'<br>';
 	echo "Tahun ".$eda->tahun.'<br>';
	echo "==============================".'<br>';
$eda = new buku ('Dajjal','Mang ade','airlinggih','2009');
	echo "==============================".'<br>';
 	echo "Judul buku ".$eda->judul.'<br>';
 	echo "Pengarang ".$eda->pengarang.'<br>';
 	echo "Penerbit ".$eda->penerbit.'<br>';
 	echo "Tahun ".$eda->tahun.'<br>';
	echo "==============================".'<br>';
?>