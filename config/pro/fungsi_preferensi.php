<?php 

function NilaiPreferensi($tp='', $f_jka, $f_q, $f_p='', $f_bobot)
{
	$f_np = 0;

	switch ($tp) {
		case '2':
			if($f_jka < -$f_q | $f_jka > $f_q){
				$f_np = 1;
			}else{
				$f_np = 0;
			}

			break;
		case '4':
			if($f_jka > $f_p){
				$f_np = 1;
			}
			else if($f_jka <= $f_q){
				$f_np = 0;
			}else{
				$f_np = 0.5;
			}

			break;
		
		default:
			# code...
			break;
	}

	$hasil = $f_np*$f_bobot;

	return $hasil;
}

 ?>