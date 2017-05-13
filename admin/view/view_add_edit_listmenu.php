<div class="col-lg-6 col-xs-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
			<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Tên menu</div>
				<div class="col-lg-8">
					<input value="<?php if(isset($arr["c_name"])) echo $arr["c_name"]?>" type="text" name="c_name" class="form-control" >
				</div>
			</div>
			<!-- end row -->
            
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Thuộc Menu</div>
				<div class="col-lg-8">
                	<select name="fk_menu_id">
                    <?php 
						$arr1=$this->model_add_edit_listmenu->get_menu();
						foreach($arr1 as $menu)
						{
					?>
 					<option <?php echo isset($arr["fk_menu_id"])&&$arr["fk_menu_id"]==$menu["pk_menu_id"]?"selected":"";?> value="<?php echo $menu["pk_menu_id"] ?>"><?php echo $menu["c_name"]?></option>
                    <?php }?>
                    </select>
                   
					
				</div>
			</div>
			<!-- end row -->
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Mô Tả</div>
				<div class="col-lg-8">
					<input value="<?php if(isset($arr["c_description"])) echo $arr["c_description"]?>" type="text" name="c_description" class="form-control" >
				</div>
			</div>
			<!-- end row -->
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Giá</div>
				<div class="col-lg-8">
					<input value="<?php if(isset($arr["c_price"])) echo $arr["c_price"]?>" type="text" name="c_price" class="form-control" >
				</div>
			</div>
			<!-- end row -->
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Trạng Thái</div>
				<div class="col-lg-8">
					
                    <select name="c_status">
                    	<option <?php echo isset($arr["c_status"])
						&&$arr["c_status"]==0?"selected":"";?> value="0">Normal</option>
                        <option <?php echo isset($arr["c_status"])
						&&$arr["c_status"]==1?"selected":"";?> value="1">Special</option>
                    </select>
				</div>
			</div>
			<!-- end row -->
          
			<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<input type="submit" name="btn" class="btn btn-primary" value="Process">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>