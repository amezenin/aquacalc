<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="sooda.css"  />
    <meta charset="utf-8"/>
	<title>Sooda</title>
	
  </head>
  <body id="b">
 
  
  <div class="proov"><h1>Söödaplaani koostamise kalkulaator </h1></div>
  
  <div class="soodapohi">
  <form method="POST" action=''>
  <table>
  <tr><td>Biomass (kg) </td><td><input  TYPE="number" name="a" value="" placeholder="1000" min="0" style="width:200px;" /></td><tr/>
 
 <tr><td>Sööda kogus päevas (%)</td><td> <input TYPE="number" name="b" value="" placeholder="1.2" step="0.01" min="0" max="100" style="width:200px;"  /></td></tr>
 <tr><td>Söödakoefitsient (FCR) </td><td> <input TYPE="number" name="c" value="" placeholder="1.2" step="0.01" min="0" max="50" style="width:200px;"  /></td></tr>
 <tr><td>Päevade arv </td><td> <input TYPE="number" name="n" value="" placeholder="11" min="0"  style="width:200px;"  /></td></tr>

<tr>
<td><input type='submit' name='vichislit' value='Tee elu lihtsam' class="button"></td>
<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> 
<td>
	<a href="makecsv.php"> <!-- tut prishlosj delatj link tak kak formu v forme nelzja  -->
		<input type="button" value='Export to Excel' class="button">
	</a>
</td>
</tr>
</table>
</form>
  
  </div>
	
	
	
	
<?php 
	include("connect.php");
	include("navigation.php");
	include("soodaarvutamine.php");
	include("disconnect.php");
?>
	
	
  </body>
</html>
