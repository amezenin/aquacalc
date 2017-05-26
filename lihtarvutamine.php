
<?php

if ($_POST) {
	$a = $_POST['kesk'];
	$b = $_POST['kalad'];
	$ja = $_POST['Jbio'];
	$jb = $_POST['Jkalad'];
	$jc = $_POST['Jkesk'];
	$fa = $_POST['Fbio'];
	$fb = $_POST['Fkalad'];
	$fc = $_POST['Fkesk'];
	$fd = $_POST['Fsoot'];
	

	if ($_POST ['vichislit']){
		if ($a<=0 || $b<=0){
		 $biomass = 'Vale algandmed';
		} elseif (is_numeric($a) && is_numeric($b)) {
			
			$biomass = $a * $b;
			
		}
    }
	
	
	if ($_POST ['vichislit2']){
		if ($ja<=0 || $jb<=0 || $jc<=0 ){
		 $juurde = 'Vale algandmed';
		} elseif (is_numeric($ja) && is_numeric($jb) && is_numeric($jc) ) {
			
			$juurde =  $jc * $jb - $ja;
			
			
		}
    }
	
	
		if ($_POST ['vichislit3']){
		if ($fa<=0 || $fb<=0 || $fc<=0 || $fd<=0){
		 $fcr = 'Vale algandmed';
		} elseif (is_numeric($fa) && is_numeric($fb) && is_numeric($fc) && is_numeric($fd) ) {
			
			$fbio =  $fc * $fb;
			$fubio = $fbio - $fa;
			if($fubio == 0){
				$fcr = 'Ei olnud juurdekasvu';
			} else {
				$fcr = $fd/$fubio;
			}
			
			
			
			
		}
    }
}



    

?>  
