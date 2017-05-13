<div class="col-lg-8 col-xs-offset-2">


                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Reservations
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Ngày Gửi</th>
                                            <th>Số Lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_reservations as $reservations)
										{
											$stt++;
									?>
                                        <tr class="odd gradeX">
                                        
                                            <th><?php echo $stt;?></th>
                                            <th><?php echo $reservations["c_name"]?></th>
                                            <th><?php echo $reservations["c_email"]?></th>
                                            <th><?php echo $reservations["c_date"]?></th>
                                            <th><?php echo $reservations["c_number"]?></th>
                                             
                                        </tr>
                                       
                                    <?php }?> 
                                     
                                    </tbody>
                                </table>
                                <div>
                            <ul class="pagination" style="padding:0px; margin:0px;">
                                <?php for($i = 1; $i <= $so_trang; $i++){ ?>
                                <li><a href="index.php?controller=reservations&p=<?php echo $i;?>">
                                    <?php echo $i;?></a>
                            </li>
                                <?php } ?>
                            </ul>
				</div>
                              
                            </div>
                            <div>
                            
				</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>