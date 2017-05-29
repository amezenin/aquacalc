<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="sooda.css"  />
    <meta charset="utf-8"/>
	<title>Lahuste valmistamine</title>
	
  </head>
  <body id="b">
 
  
  <div class="proov"><h1>Lahuste valmistamise kalkulaator </h1></div>
  
  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
  <div class="soodapohi">
  <form method="POST" action=''>
  <table>
  <tr><td>Soovitud lahuse andmed </td><td> <input TYPE="number" name="soovL"  placeholder="10" min="0"  max="1000000" step="0.001" style="width:200px;" <?php if(!empty($_POST["soovL"]))
	  echo "value=\"" . htmlspecialchars($_POST["soovL"])."\" "; ?>/></td><td>
 <select name="loppL" <?php if(isset($_POST["loppL"])) echo 'value="' . $_POST["loppL"]. '"' ; ?>>
              
                <option value="1">%</option>
                <option value="2">g/L </option>
                <option value="3">‰</option>
            </select> <br>
 </td>
 </tr>

 <tr><td>Alg aine või lahuse andmed </td><td> <input TYPE="number" name="algL"  placeholder="10" min="0"  max="1000000" step="0.001" style="width:200px;" <?php if(!empty($_POST["algL"]))
	  echo "value=\"" . htmlspecialchars($_POST["algL"])."\" "; ?>/></td><td>
 <select name="algA" >
                <option value=1>g</option>
                <option value=2>%</option>
                <option value="3" >g/L</option>
                <option value="4">‰</option>
            </select> 
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