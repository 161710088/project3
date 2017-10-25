<?php
class buku{
		public $judul;
 		public $pengarang;
 		public $penerbit;
 		public $tahun;	
 		//KONSTRAKTOR
 		public function __construct($a,$b,$c,$d)
 		{
			$this->judul = $a;
			$this->pengarang = $b;
			$this->penerbit = $c;
			$this->tahun = $d;			
 		}
}
?>