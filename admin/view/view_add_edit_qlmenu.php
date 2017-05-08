<div class="col-lg-6 col-xs-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
			<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-5">Tên Menu</div>
				<div class="col-lg-7">
					<input value="<?php if(isset($arr_qlmenu["c_name"])) echo $arr_qlmenu["c_name"]?>" type="text" name="c_name" class="form-control" >
				</div>
			</div>
			<!-- end row -->
           <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-5">Liên Kết</div>
				<div class="col-lg-7">
					<input value="<?php if(isset($arr_qlmenu["c_link"])) echo $arr_qlmenu["c_link"]?>" type="text" name="c_link" class="form-control" >
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