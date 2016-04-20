
<?php $pic = array(
1=>array('src'=>"pildid/nameless1.jpg", 'alt'=>"nimetu 1"),
2=>array('src'=>"pildid/nameless2.jpg", 'alt'=>"nimetu 2"),
3=>array('src'=>"pildid/nameless3.jpg", 'alt'=>"nimetu 3"),
4=>array('src'=>"pildid/nameless4.jpg", 'alt'=>"nimetu 4"),
5=>array('src'=>"pildid/nameless5.jpg", 'alt'=>"nimetu 5"),
6=>array('src'=>"pildid/nameless6.jpg", 'alt'=>"nimetu 6"),
);
?>
	<h3>Fotod</h3>
	<div id="gallery">
	<?php foreach($pic as $picture) {?>
    <img src="<?php echo $picture['src'];?>" alt="<?php echo $picture['alt'];?>"/>
    <?php } ?>
	</div>



