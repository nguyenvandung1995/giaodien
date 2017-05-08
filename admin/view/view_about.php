<div class="col-lg-12">


                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             About
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="index.php?controller=add_about&act=add" class="btn btn-info" role="button"><i class="fa fa-listabout-plus" aria-hidden="true"></i> Thêm</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Nội Dung</th>
                                            <th>Ảnh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_listabout as $listabout)
										{
											$stt++;
									?>
                                        <tr class="odd gradeX">
                                        
                                            <th><?php echo $stt;?></th>
                                            <th><?php echo $listabout["c_name"]?></th>
                                            <th><?php echo $listabout["c_content"]?></th>
                                            <th><img src="../<?php echo $listabout["c_img"]?>"/></th>
                                             
                                        </tr>
                                       
                                    <?php }?> 
                                     
                                    </tbody>
                                </table>
                              
                            </div>
                            <div>
                            
				</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>