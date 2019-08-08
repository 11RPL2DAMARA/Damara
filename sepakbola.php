<?php
class sepakbola{
	var $club;
	var $jumlah_trofi;
	var $warna_seragam;
	var $liga;
	public function setclub($club=''){
		$this->club= $club;
	}

	public function setjumlah_trofi($jumlah_trofi=''){
		$this->jumlah_trofi= $jumlah_trofi;
	}

	public function setwarna_seragam($warna_seragam=''){
		$this->warna_seragam= $warna_seragam;
	}

	public function setliga($liga=''){
		$this->liga= $liga;
	}

	public function cetak(){
		echo'club :'.$this->club;
		echo'<br>';
		echo'jumlah_trofi :'.$this->jumlah_trofi;
		echo'<br>';
		echo'warna_seragam :'.$this->warna_seragam;
		echo'<br>';
		echo'liga :'.$this->liga;
		echo'<br>';
	}
} 

$chelsea =new sepakbola();
$chelsea->setclub('chelsea');
$chelsea->setjumlah_trofi('5');
$chelsea->setwarna_seragam('biru');
$chelsea->setliga('inggris');
$chelsea->cetak();

$liverpol =new sepakbola();
$liverpol->setclub('liverpol');
$liverpol->setjumlah_trofi('6');
$liverpol->setwarna_seragam('merah');
$liverpol->setliga('inggris');
$liverpol->cetak();
