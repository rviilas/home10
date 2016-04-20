<?php 
session_start();
if (isset($_POST['esita'])) {
	$_SESSION['tekst'] = $_POST['tekst'];
	$_SESSION['tcol'] = $_POST['tcol'];
	$_SESSION['bgcol'] = $_POST['bgcol'];
	$_SESSION['bocol'] = $_POST['bocol'];
	$_SESSION['quantity'] = $_POST['quantity'];
	$_SESSION['quantity2'] = $_POST['quantity2'];
	$_SESSION['bstyle'] = $_POST['bstyle'];
}

if (isset($_POST['reset'])) {
	$_SESSION = array();
	  if (isset($_COOKIE[session_name()])) {
	setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
}

$tekst='See siin on näite tekst';
if (isset($_POST['tekst']) && $_POST['tekst']!='') {
    $tekst=htmlspecialchars($_POST['tekst']);
} 
$tcol='#33cc33'; 
if (isset($_POST['tcol']) && $_POST['tcol']!='') {
    $tcol=htmlspecialchars($_POST['tcol']);
} 
$bgcol='#cc0066'; 
if (isset($_POST['bgcol']) && $_POST['bgcol']!='') {
    $bgcol=htmlspecialchars($_POST['bgcol']);
} 
$bocol='#003300'; 
if (isset($_POST['bocol']) && $_POST['bocol']!='') {
    $bocol=htmlspecialchars($_POST['bocol']);
} 
$quantity='5';
if (isset($_POST['quantity']) && $_POST['quantity']!='') {
    $quantity=htmlspecialchars($_POST['quantity']);
} 
$quantity2='5';
if (isset($_POST['quantity2']) && $_POST['quantity2']!='') {
    $quantity2=htmlspecialchars($_POST['quantity2']);
} 
$bstyle='solid';
if (isset($_POST['bstyle']) && $_POST['bstyle']!='') {
    $bstyle=htmlspecialchars($_POST['bstyle']);
} 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>Home10</title>
<style type='text/css'>
#result
{
color: <?php echo $tcol;?>;
background: <?php echo $bgcol; ?>;
border-color: <?php echo $bocol;?>;
border-width: <?php echo $quantity; ?>px;
border-radius: <?php echo $quantity2; ?>px;
border-style: <?php echo $bstyle; ?>;
}
</style>
</head>
<body>
<div id='result' style='height:120px;width:400px;text-align:center;'>
<?php echo $tekst;?>;
</div>
 <?php 
    $borders=array('solid', 'dotted solid', 'dotted', 'double', 'dotted solid double dashed');
 ?>
  
<hr>
<form action='h8.php?esita' method='POST'>
	<input type='text' name='tekst' style='height:50px;width:200px;' value='<?php if (isset($_SESSION['tekst'])){echo ($_SESSION['tekst']);} else{ echo  $tekst; } ?>'> <br><br>
	<div><input type='color' name='tcol' value='<?php if (isset($_SESSION['tcol'])){echo ($_SESSION['tcol']);} else{ echo  $tcol; } ?>'> - Tekstivärvus</div><br>
	<div><input type='color' name='bgcol' value='<?php if (isset($_SESSION['bgcol'])){echo ($_SESSION['bgcol']);} else{ echo  $bgcol; } ?>'/> - Tasutavärvus</div><br>
	<hr>
	<div>Piirjoon</div>
	<hr>	
	<div><input type='color' name='bocol' value='<?php if (isset($_SESSION['bocol'])){echo ($_SESSION['bocol']);} else{ echo  $bocol; } ?>'/> - Piirjoone värvus</div><br>
	<div><input type='number' name='quantity' value='<?php if (isset($_SESSION['quantity'])){echo ($_SESSION['quantity']);} else{ echo $quantity; } ?>' min='1' max='20'> - Piirjoone laius (1-20px)</div><br>
	<div><input type='number' name='quantity2' value='<?php if (isset($_SESSION['quantity2'])){echo ($_SESSION['quantity2']);} else{ echo  $quantity2; } ?>' min='0' max='100'> - Piirjoone raadius (0-100px)</div><br>
	<div>
  <select id='bstyle' name='bstyle' value='bp'>
    <option selected='<?php if (isset($_SESSION['bstyle'])){echo ($_SESSION['bstyle']);} else{ echo  $bstyle; } ?>'>
	<?php if (isset($_SESSION['bstyle'])) echo ($_SESSION['bstyle']); ?></option>
	<?php foreach($borders as $border):?>
	<option ><?php echo $border; ?></option>
	<?php endforeach; ?>
	</div><br>
	<hr>
	<input type='submit' value='esita'/>
</form>
<form action='h8.php?reset' method='POST'>
<input type='submit' name='reset' value='Reset'/>
</form>
</p>
</body>
</html>