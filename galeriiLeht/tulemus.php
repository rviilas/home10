
	<h3>Valiku tulemus</h3>
	<p>
	
	<?php if (isset($_SESSION['pic'])){ 
	$dos = 'Valisite pildi nr '. $_SESSION['pic'];
	echo $dos;
	} else {
	echo 'Te pole pilti valinud';
	} 
	?>

	</p>
