<?php

if ($_POST) {
	$a = $_POST['soovL'];
	$b = $_POST['loppL'];
	$c = $_POST['algL'];
	$d = $_POST['algA'];
	

	if ($_POST ['vichislit3']){
		if ($a<=0 ||  $c<=0 || empty($b) || empty($d)){
			echo '<table cellspacing="2" border="1" id="bog" >';
			echo '<tr><th> Viga </th></tr>';
			echo '<tr><td>Sissestage kõik andmed</td></tr>';
			echo '</table>';
		} elseif (is_numeric($a) && is_numeric($c) && !empty($b) && !empty($d)) {
			// g/L ja g puhas aine
			
		
			if ($b == 2 && $d == 1 && !empty($a) && !empty($c)) {
			echo '<table cellspacing="2" border="1" id="bog" >';
			echo '<tr><th> Puhas aine (g) </th> <th> Peate lisama vett (ml) </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
			echo '<tr><td>' . ($c) . '</td><td>' . (($c*100/($a/1000*100))-$c) . '</td> <td>' . ($c*100/($a/1000*100)) . '</td> <td> Lahus '  . $a .  ' g/L </td></tr>';
			echo '</table>';
			//% ja g
			} elseif ($b == 1 && $d == 1 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
			echo '<tr><th> Puhas aine (g) </th> <th> Peate lisama vett (ml) </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
			echo '<tr><td>' . ($c) . '</td><td>' . (($c*100/$a)-$c) . '</td> <td>' . ($c*100/$a) . '</td> <td> Lahus '  . $a .  ' %-ga</td></tr>';
			echo '</table>';
			// promille ja g
			} elseif ($b == 3 && $d == 1 && !empty($a) && !empty($c)) {
				echo '<table cellspacing="2" border="1" id="bog" >';
			echo '<tr><th> Puhas aine (g) </th> <th> Peate lisama vett (ml) </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
			echo '<tr><td>' . ($c) . '</td><td>' . (($c*100/($a/1000*100))-$c) . '</td> <td>' . ($c*100/($a/1000*100)) . '</td> <td> Lahus '  . $a .  ' ‰-ga</td></tr>';
			echo '</table>';
			}
			//% ja %
			elseif ($b == 1 && $d == 2 && !empty($a) && !empty($c)) {
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus % </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/$a)-1) . '</td> <td> Alg lahuse kogus korda '  . ($c/$a) . '</td> <td> Lahus '  . $a .  ' %-ga</td></tr>';
				echo '</table>';
			} 
			//g/l ja %
			elseif ($b == 2 && $d == 2 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus % </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/$a)*10-1) . '</td> <td> Alg lahuse kogus korda '  . ($c/$a)*10 . '</td> <td> Lahus '  . $a .  ' g/L</td></tr>';
				echo '</table>';
			}
			//‰ ja %
			elseif ($b == 3 && $d == 2 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus % </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/$a)*10-1) . '</td> <td> Alg lahuse kogus korda '  . ($c/$a)*10 . '</td> <td> Lahus '  . $a .  ' ‰-ga</td></tr>';
				echo '</table>';
			}
			//% ja g/L
			elseif ($b == 1 && $d == 3 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus, g/L </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/1000)/($a/100)-1) . '</td> <td> Alg lahuse kogus korda '  . (($c/1000)/($a/100)) . '</td> <td> Lahus '  . $a .  ' %-ga</td></tr>';
				echo '</table>';
			}
			//g/L ja g/L
			elseif ($b == 2 && $d == 3 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus, g/L </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/1000)/($a/1000)-1) . '</td> <td> Alg lahuse kogus korda '  . (($c/1000)/($a/1000)) . '</td> <td> Lahus '  . $a .  ' g/L</td></tr>';
				echo '</table>';
			}
			//‰ ja g/L
			elseif ($b == 3 && $d == 3 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus, g/L </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/1000)/($a/1000)-1) . '</td> <td> Alg lahuse kogus korda '  . (($c/1000)/($a/1000)) . '</td> <td> Lahus '  . $a .  ' ‰ ga</td></tr>';
				echo '</table>';
			}
			//% ja ‰
			elseif ($b == 1 && $d == 4 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus, ‰ </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/1000)/($a/100)-1) . '</td> <td> Alg lahuse kogus korda '  . (($c/1000)/($a/100)) . '</td> <td> Lahus '  . $a .  ' % ga</td></tr>';
				echo '</table>';
			}
			//g/L ja ‰
			elseif ($b == 2 && $d == 4 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus, ‰ </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/1000)/($a/1000)-1) . '</td> <td> Alg lahuse kogus korda '  . (($c/1000)/($a/1000)) . '</td> <td> Lahus '  . $a .  ' g/L</td></tr>';
				echo '</table>';
			}
			//‰ ja ‰
			elseif ($b == 3 && $d == 4 && !empty($a) && !empty($c)){
				echo '<table cellspacing="2" border="1" id="bog" >';
				echo '<tr><th> Alg lahus, ‰ </th> <th> Peate lisama osa vett alg lahust </th> <th> Valmis lahuse kogus (g) </th> <th> Valmis lahuse andmed </th></tr>';
				echo '<tr><td>' . ($c) . '</td><td>' . (($c/1000)/($a/1000)-1) . '</td> <td> Alg lahuse kogus korda '  . (($c/1000)/($a/1000)) . '</td> <td> Lahus '  . $a .  ' ‰-ga</td></tr>';
				echo '</table>';
			}
		}
    }
}



    

?>  