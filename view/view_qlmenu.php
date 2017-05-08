<ul>
	<?php
    	foreach($arr_qlmenu as $qlmuenu)
		{
	?>
    <li><a href="<?php echo $qlmuenu["c_link"]?>"><?php echo $qlmuenu["c_name"]?></a></li>
    <?php }?>
</ul>