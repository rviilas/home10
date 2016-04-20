
<?php $pic = array(
1=>array('src'=>"pildid/nameless1.jpg", 'alt'=>"nimetu 1", 'height'=>"100"),
2=>array('src'=>"pildid/nameless2.jpg", 'alt'=>"nimetu 2", 'height'=>"100"),
3=>array('src'=>"pildid/nameless3.jpg", 'alt'=>"nimetu 3", 'height'=>"100"),
4=>array('src'=>"pildid/nameless4.jpg", 'alt'=>"nimetu 4", 'height'=>"100"),
5=>array('src'=>"pildid/nameless5.jpg", 'alt'=>"nimetu 5", 'height'=>"100"),
6=>array('src'=>"pildid/nameless6.jpg", 'alt'=>"nimetu 6", 'height'=>"100"),
);
?>

	<h3>Vali oma lemmik :)</h3>
	<form action="?mode=tulemus" method="POST">
		<?php $i=1;?>
		<?php foreach($pic as $picture){ ?>
		<p>
			<label for="p<?php echo $i; ?>">
				<img src="<?php echo $picture['src'];?>" alt="<?php echo $picture['alt'];?>" height="<?php echo $picture['height']?>" />
			</label>
			<input type="radio" value="<?php echo $i;?>" id="p<?php echo $i;?>" name="pic"/>
		</p>
		<?php ($i++);?>
		<?php }?>
		<br/>
		<input type="submit" value="Valin!"/>
	</form>


