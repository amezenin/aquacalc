<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="sooda.css"  />
    <meta charset="utf-8"/>
	<title>Lihtsustatud</title>
	
  </head>
  <body id="b">
 
  
  <div class="proov"><h1>Lihtsustatud kalkulaator </h1></div>
  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
  <div class="soodapohi">
	<form method="POST" action=''>
	<table>
		<tr><td></td><td>Biomassi arvutamine</td></tr>
		<tr><td>Kala kesmine kaal (kg): </td><td><input TYPE="number" name="kesk"  placeholder="1000" min="0" step="0.001" style="width:200px;" <?php if(!empty($_POST["kesk"]))
	  echo "value=\"" . htmlspecialchars($_POST["kesk"])."\" "; ?>/></td><tr/>
 
		<tr><td>Kalad kokku (tk):</td><td> <input TYPE="number" name="kalad"  placeholder="1000" min="0"  max="100000" step="1" style="width:200px;" <?php if(!empty($_POST["kalad"]))
	  echo "value=\"" . htmlspecialchars($_POST["kalad"])."\" "; ?>/></td></tr>
	<tr><td>Biomass (kg): </td><td> 
		<div id="textArea">
			<?php echo round($biomass,3);?>
		</div>
		</td></tr>
		<tr>
		<td><input type='submit' name='vichislit' value='Arvuta' class="button"></td>
<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
	</tr>
	</table>
	
	<table>
		<tr><td></td><td>Juurdekasvu arvutamine</td></tr>
		<tr><td>Algne biomass (kg): </td><td><input TYPE="number" name="Jbio"  placeholder="1000" min="0" step="0.001" style="width:200px;" <?php if(!empty($_POST["Jbio"]))
	  echo "value=\"" . htmlspecialchars($_POST["Jbio"])."\" "; ?>/></td><tr/>
 
		<tr><td>Kalad kokku (tk):</td><td> <input TYPE="number" name="Jkalad"  placeholder="1000" min="0"  max="100000" step="1" style="width:200px;" <?php if(!empty($_POST["Jkalad"]))
	  echo "value=\"" . htmlspecialchars($_POST["Jkalad"])."\" "; ?>/></td></tr>
	
		<tr><td>Kontrollitud keskmine kaal (kg):</td><td> <input TYPE="number" name="Jkesk"  placeholder="1000" min="0"  max="100000" step="0.001" style="width:200px;" <?php if(!empty($_POST["Jkesk"]))
	  echo "value=\"" . htmlspecialchars($_POST["Jkesk"])."\" "; ?>/></td></tr>
  
 
	
	<tr><td>Juurdekasv (kg): </td><td> 
		<div id="textArea">
			<?php echo round($juurde,3);?>
		</div>
		</td></tr>
		<tr>
		<td><input type='submit' name='vichislit2' value='Arvuta' class="button"></td>
<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
	</tr>
	</table>
	
	<table>
		<tr><td></td><td>FCRi arvutamine</td></tr>
		<tr><td>Algne biomass (kg): </td><td><input TYPE="number" name="Fbio"  placeholder="1000" min="0" step="0.001" style="width:200px;" <?php if(!empty($_POST["Fbio"]))
	  echo "value=\"" . htmlspecialchars($_POST["Fbio"])."\" "; ?>/></td><tr/>
 
		<tr><td>Kalad kokku (tk):</td><td> <input TYPE="number" name="Fkalad"  placeholder="1000" min="0"  max="100000" step="1" style="width:200px;" <?php if(!empty($_POST["Fkalad"]))
	  echo "value=\"" . htmlspecialchars($_POST["Fkalad"])."\" "; ?>/></td></tr>
	
		<tr><td>Kontrollitud keskmine kaal (kg):</td><td> <input TYPE="number" name="Fkesk"  placeholder="1000" min="0"  max="100000" step="0.001" style="width:200px;" <?php if(!empty($_POST["Fkesk"]))
	  echo "value=\"" . htmlspecialchars($_POST["Fkesk"])."\" "; ?>/></td></tr>
  
  <tr><td>Kulutatud sööt (kg):</td><td> <input TYPE="number" name="Fsoot"  placeholder="1000" min="0"  max="100000" step="0.001" style="width:200px;" <?php if(!empty($_POST["Fsoot"]))
	  echo "value=\"" . htmlspecialchars($_POST["Fsoot"])."\" "; ?>/></td></tr>
 
	
	<tr><td>FCR: </td><td> 
		<div id="textArea">
			<?php echo round($fcr, 3);?>
		</div>
		</td></tr>
		<tr>
		<td><input type='submit' name='vichislit3' value='Arvuta' class="button"></td>
<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
	</tr>
	</table>
	
</form>
  
  
  </div>
    
	
	<?php endif; ?>
	
	
	
	
	
	
	<?php 
	include("navigation.php");
	
	?>
	
	
  </body>
</html>