
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="sooda.css"  />
    <meta charset="utf-8"/>
	<title>Sooda</title>
	
  </head>
  <body id="b">
 
  
  <div class="proov"><h1>Söödaplaani koostamise kalkulaator </h1></div>
  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
  <div class="soodapohi">
  <form method="POST" action=''>
  <table>
  <tr><td>Biomass (kg) </td><td><input  TYPE="number" name="a" placeholder="1000" min="0" step="0.0001" style="width:200px;" <?php if(!empty($_POST["a"]))
	  echo "value=\"" . htmlspecialchars($_POST["a"])."\" "; ?> /></td><tr/>
 
 <tr><td>Sööda kogus päevas (%)</td><td> <input TYPE="number" name="b"  placeholder="1.2" step="0.01" min="0" max="100" style="width:200px;" <?php if(!empty($_POST["b"]))
	  echo "value=\"" . htmlspecialchars($_POST["b"])."\" "; ?>  /></td></tr>
 <tr><td>Söödakoefitsient (FCR) </td><td> <input TYPE="number" name="c" placeholder="1.2" step="0.01" min="0" max="50" style="width:200px;" <?php if(!empty($_POST["c"]))
	  echo "value=\"" . htmlspecialchars($_POST["c"])."\" "; ?> /></td></tr>
 <tr><td>Päevade arv </td><td> <input TYPE="number" name="n" placeholder="11" min="0"  style="width:200px;" <?php if(!empty($_POST["n"]))
	  echo "value=\"" . htmlspecialchars($_POST["n"])."\" "; ?> /></td></tr>

<tr>
<td><input type='submit' name='vichislit' value='Arvuta' class="button"></td>

<td>
	<a href="makecsv.php"> <!-- tut prishlosj delatj link tak kak formu v forme nelzja  -->
		<input type="button" value='Export to Excel' class="button">
	</a>
</td>
</tr>
</table>
</form>
  
  </div>
	
	<?php endif; ?>
	
	
<?php 
	include("connect.php");
	include("navigation.php");
	include("soodaarvutamine.php");
	include("disconnect.php");
?>
	
	
  </body>
</html>
