<div class="col-lg-12">


                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List Menu
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="index.php?controller=add_edit_listmenu&act=add" class="btn btn-info" role="button"><i class="fa fa-listmenu-plus" aria-hidden="true"></i> Thêm</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=listmenu">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                        	<th><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th>
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Thuộc Menu</th>
                                            <th>Mô Tả</th>
                                            <th>Giá</th>
                                            <th>Trạng Thái</th>
                                            <th style="width:15%">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_listmenu as $listmenu)
										{
											$stt++;
									?>
                                        <tr class="odd gradeX">
                                        <th><input class="item" type="checkbox" value="<?php echo $listmenu["pk_listmenu_id"]?>" name="listmenu_id[]" class="ckeckbox"/></th>
                                            <th><?php echo $stt;?></th>
                                            <th><?php echo $listmenu["c_name"]?></th>
                                            <th><?php $menu=$this->model_listmenu->get_menu($listmenu["fk_menu_id"]); echo $menu["c_name"]?></th>
                                            <th><?php echo $listmenu["c_description"]?></th>
                                            <th><?php echo $listmenu["c_price"]?>$</th>
                                            <th><?php if($listmenu["c_status"]==1) echo"Special";else ""; ?></th>
                                            
                                            
                                           
                                            
                                            <th>
                                            	<a onclick="return window.confirm('Bạn muốn xóa?');" href="index.php?controller=listmenu&act=delete&id=<?php echo $listmenu["pk_listmenu_id"]?>" class="btn btn-warning" role="button">Xóa</a>
                                            <a href="index.php?controller=add_edit_listmenu&act=edit&id=<?php echo $listmenu["pk_listmenu_id"]?>" class="btn btn-primary" role="button">Sửa</a>
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
                                <li><a href="index.php?controller=listmenu&p=<?php echo $i;?>">
                                    <?php echo $i;?></a>
                            </li>
                                <?php } ?>
                            </ul>
				</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>