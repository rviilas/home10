	<h3>Valiku tulemus</h3>
	<p>
	<?php
	$dos = 'Teie olete juba oma valiku teinud ning valisite pildi nr '. $_SESSION['pic'];
	echo $dos;
	?>
	<form method='post' action='kontroller.php'>
	<input type='submit' value='Valiku t�histamine' name='reset'>
	</form>

	</p>
