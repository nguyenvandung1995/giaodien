 <div class="menu">
    	<div class="menu_listds">
        	<?php
            	foreach($arr_menu as $menu)
				{
					$id=$menu["pk_menu_id"];
					$subs=get_id($id);
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
                  		<?php if($sub["c_status"]==1){?>
                         <div class="box_special">
							<div class="position_special">Special</div>
                           	<div class="box_name"><?php echo $sub["c_name"]?></div>
                            <div class="box_gia"><?php echo $sub["c_price"]?>$</div>
                            <div class="box_gachchan"></div>
                            <div class="box_desciption1"><?php echo $sub["c_description"]?></div>
				</div>
                        <?php }?>
                        <?php if($sub["c_status"]==0) {?>
                        <div style="margin-bottom:20px">
                        <div class="box_name"><?php echo $sub["c_name"]?></div>
                        <div class="box_gia"><?php echo $sub["c_price"]?>$</div>
                        <div class="box_gachchan" style=""></div>
                        <div style="font-size:15px;color:#4c4c4c;font-family: 'Open Sans', sans-serif "><?php echo $sub["c_description"]?></div>
                    </div>
                        <?php }?>
			<?php }?>
            <?php }?>
              
            </div>
            
            <?php }?>
            
            
            
           
            
        </div>
        <div style="clear:both;"></div>
    </div>