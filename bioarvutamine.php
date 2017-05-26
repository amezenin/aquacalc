
<?php

if ($_POST) {
	$a = $_POST['maxBio'];
	$b = $_POST['maxSooda'];
	$c = $_POST['prot'];
	$d = $_POST['element'];
	$e = $_POST['temp'];
	

	if ($_POST ['vichislit']){
		if ($a<=0 || $b<=0 || $c<=0 || $d<=0 || $e<=0){
			echo '<table cellspacing="2" border="1" id="bog" >';
			echo '<tr><th> Viga </th></tr>';
			echo '<tr><td>Sissestage kõik andmed</td></tr>';
			echo '</table>';
		} elseif (is_numeric($a) && is_numeric($b) && is_numeric($c) && is_numeric($d) && is_numeric($e)) {
			
			echo '<table cellspacing="2" border="1" id="bog" >';
			echo '<tr><th> Minimaalne elemendi kogus, m3 </th> <th> Soovitatav elemendi kogus, m3 </th></tr>';
			echo '<tr><td>' . (($a*$b/100)*$c/100/6.25*0.5*1000)/$e/$d . '</td><td>'. (($a*$b/100)*$c/100/6.25*0.5*1000)/$e/$d*2 .'</td></tr>';
			echo '</table>';
		}
    }
}



    

?>  
