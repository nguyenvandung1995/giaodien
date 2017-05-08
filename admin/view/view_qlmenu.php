<div class="col-lg-10 col-md-offset-1">


                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Quản lý Menu
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="index.php?controller=add_edit_qlmenu&act=add" class="btn btn-info" role="button"><i class="fa fa-qlmenu-plus" aria-hidden="true"></i> Thêm</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=qlmenu">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>liên kết</th>
                                            <th style="width:15%">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_qlmenu as $qlmenu)
										{
											$stt++;
									?>
                                        <tr class="odd gradeX">
                                            <th><?php echo $stt;?></th>
                                            <th><?php echo $qlmenu["c_name"]?></th>
                                            <th><?php echo $qlmenu["c_link"]?></th>
                                            <th>
                                            	<a onclick="return window.confirm('Bạn muốn xóa?');" href="index.php?controller=qlmenu&act=delete&id=<?php echo $qlmenu["pk_qlmenu_id"]?>" class="btn btn-warning" role="button">Xóa</a>
                                            <a href="index.php?controller=add_edit_qlmenu&act=edit&id=<?php echo $qlmenu["pk_qlmenu_id"]?>" class="btn btn-primary" role="button">Sửa</a>
                                            </th>
                                        </tr>
                                       
                                    <?php }?> 
                                     
                                    </tbody>
                                </table>
                                </form>
                            </div>
                           
                    </div>
                    <!--End Advanced Tables -->
                </div>