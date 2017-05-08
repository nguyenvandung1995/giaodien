 <div class="menu">
    	<div class="menu_listds">
        	<?php
            	foreach($arr_menu as $menu)
				{
					$id=$menu["pk_menu_id"];
					$subs=fetch("select * from tbl_listmenu where fk_menu_id=$id limit 0,3 ");
					$rows["subs"]=$subs;
					//$monan=fetch
			?>
           
            <div class="box_menu1">
            	<div class="box_menu1_title"><?php echo $menu["c_name"]?></div>
                <div class="box_duongvien"><img src="public/image/menu_duongvien.png" /></div>
                 <?php 
                          
					  if(!empty($rows["subs"]))
					  {
                                  
                    ?>
                    <?php 
						foreach($rows["subs"] as $sub)
						{
					?>
                  <div class="box_special">
                  			<?php if($sub["c_status"]==1){?>
							<div class="position_special">Special</div>
                            <?php }?>
                           <div class="box_name"><?php echo $sub["c_name"]?></div>
                            <div class="box_gia"><?php echo $sub["c_price"]?>$</div>
                            <div class="box_gachchan"></div>
                            <div class="box_desciption1" style="font-size:15px;color:4c4c4c;font-family: "Open Sans", sans-serif"><?php echo $sub["c_description"]?></div>
						</div>
			<?php }?>
            <?php }?>
               
            </div>
            <?php }?>
            
            
            
           
            
        </div>
        <div style="clear:both;"></div>
    </div>