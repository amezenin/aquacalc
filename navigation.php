<link rel="stylesheet" type="text/css" href="navigation2.css"  />

<nav role='navigation'>
  <ul>
		<li><a href="?mode=p">Pealeht</a></li>
		<li><a href="#">Kalkulaatorid</a>
			<ul>
				<li><a href="?mode=s">Söödaplaani koostamine</a></li>
				<li><a href="?mode=b">Biofiltri võimsus</a></li>
				<li><a href="?mode=la">Lahuste valmistamine</a></li>
				<li><a href="?mode=li">Lihtsustatud kalkulaator</a></li>
			</ul>
		</li>
		<li><a href="?mode=k">Kontakt</a></li>
		<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
		<li><a href="?mode=l">Välja logimine</a></li>
		<?php endif; ?>
		<?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false): ?>
		<li><a href="?mode=l">Sisse logimine</a></li>
		<?php endif; ?>
  </ul>
</nav> 

<div class="autor" >
	&copy; 2017 Anton
	</div>