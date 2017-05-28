<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="sooda.css"  />
    <meta charset="utf-8"/>
	<title>Biofilter</title>
	
  </head>
  <body id="b">
 
  
  <div class="proov"><h1>Biofiltri võimsuse kalkulaator </h1></div>
  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
  <div class="soodapohi">
  <form method="POST" action=''>
  <table>
  <tr><td>Maksimaalne biomass (kg) </td><td><input TYPE="number" name="maxBio"  placeholder="1000" min="0" step="0.1" style="width:200px;" <?php if(!empty($_POST["maxBio"]))
	  echo "value=\"" . htmlspecialchars($_POST["maxBio"])."\" "; ?>/></td><tr/>
 
 <tr><td>Maximaalne söödakogus päevas (%)</td><td> <input TYPE="number" name="maxSooda"  placeholder="1.2" min="0"  max="100" step="0.01" style="width:200px;" <?php if(!empty($_POST["maxSooda"]))
	  echo "value=\"" . htmlspecialchars($_POST["maxSooda"])."\" "; ?>/></td></tr>
 <tr><td>Proteini sisalduse protsent </td><td> <input TYPE="number" name="prot"  placeholder="50" min="0"  max="100" step="0.1" style="width:200px;" <?php if(!empty($_POST["prot"]))
	  echo "value=\"" . htmlspecialchars($_POST["prot"])."\" "; ?> /></td></tr>
 <tr><td>Elemendi tööpindala (m2/m3) </td><td> <input TYPE="number" name="element"  placeholder="450" min="0"  style="width:200px;"  <?php if(!empty($_POST["element"]))
	  echo "value=\"" . htmlspecialchars($_POST["element"])."\" "; ?> /></td></tr>
 <tr><td>Temperatuur süsteemis (C) </td><td> 
 <select name="temp">
                <option value="0.3">5</option>
                <option value="0.5">10</option>
                <option value="0.8">15</option>
                <option value="1.0">20</option>
            </select> <br>
 </td></tr>
<tr>
<td><input type='submit' name='vichislit' value='Arvuta' class="button"></td>
<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
</tr>
</table>
</form>
  
  </div>
   <?php endif; ?> 
	
	
	
	
	
	
	
	
	<?php 
	
	include("navigation.php");
	include("bioarvutamine.php");
	
?>
	
	
  </body>
</html>