<?php
function get_bulan($bln) {
	switch ($bln) {
		case 1 :
		return "January";
		break;
		case 2 :
		return "February";
		break;
		case 3 :
		return "March";
		break;
		case 4 :
		return "April";
		break;
		case 5 :
		return "May";
		break;
		case 6 :
		return "June";
		break;
		case 7 :
		return "Juli";
		break;
		case 8 :
		return "Agustus";
		break;
		case 9 :
		return "September";
		break;
		case 10 :
		return "Oktober";
		break;
		case 11 :
		return "November";
		break;
		case 12 :
		return "Desember";
		break;
	}
}
function tgl_indo($tgl) {
	$tanggal = date("j", strtotime($tgl));
	$bulan = get_bulan(date("n", strtotime($tgl)));
	$tahun = date("Y", strtotime($tgl));
	$jam = date("H", strtotime($tgl));
	$menit = date("i", strtotime($tgl));
	return $tanggal.' '.$bulan.' '.$tahun;
}