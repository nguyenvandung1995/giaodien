<div class="col-lg-6 col-xs-offset-3">
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>

                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="index.php?controller=add_edit_menu&act=add" class="btn btn-info" role="button"><i class="fa fa-menu-plus" aria-hidden="true"></i> Thêm</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=menu">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                        	<th><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th>
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_menu as $menu)
										{
											$stt++;
									?>
                                        <tr class="odd gradeX">
                                        <th><input class="item" type="checkbox" value="<?php echo $menu["pk_menu_id"]?>" name="menu_id[]" class="ckeckbox"/></th>
                                            <th><?php echo $stt;?></th>
                                            <th><?php echo $menu["c_name"]?></th>
                                            
                                            
                                           
                                            
                                            <th>
                                            	<a onclick="return window.confirm('Bạn muốn xóa?');" href="index.php?controller=menu&act=delete&id=<?php echo $menu["pk_menu_id"]?>" class="btn btn-warning" role="button">Xóa</a>
                                            <a href="index.php?controller=add_edit_menu&act=edit&id=<?php echo $menu["pk_menu_id"]?>" class="btn btn-primary" role="button">Sửa</a>
                                            </th>
                                        </tr>
                                       
                                    <?php }?> 
                                     <tr class="odd gradeX">
                                        	<th><input type="submit" value="Xóa" class="btn btn-primary"/></th>
                                        </tr>
                                    </tbody>
                                </table>
                                </form>
                            </div>
                            <div>
                            <ul class="pagination" style="padding:0px; margin:0px;">
                                <?php for($i = 1; $i <= $so_trang; $i++){ ?>
                                <li><a href="index.php?controller=menu&p=<?php echo $i;?>">
                                    <?php echo $i;?></a>
                            </li>
                                <?php } ?>
                            </ul>
				</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>