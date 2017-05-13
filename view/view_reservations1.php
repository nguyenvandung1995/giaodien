<script language="javascript" type="text/javascript">
document.forms['addreservation'].name.focus();
function set_focus()
{
   document.forms['addreservation'].name.focus();
}
function check_submit_addnew()
{
   var frm = window.document.addreservation; 	
  //var date=new Date('d-m-Y');
  

    if(frm.c_number.value<=0)
	{
      alert('Số lượng phải lớn hơn 0!');			
     document.forms['addreservation'].c_number.focus();
     return false;
	}
  //var date= new Date();
   var timeInput = new Date(frm.c_date.value).getTime();
   var timeCurr  = (new Date()).now();
   if(timeInput < timeCurr)
   {
     alert('ngay sai!');			
      document.forms['addreservation'].c_date.focus();
      return false;
   }

   else						
      return true;	
}
</script>
<form name="addreservation" method="post" action="index.php?controller=reservations1" onsubmit="return check_submit_addnew()">
<table border="0">
                        	<tr>
                            	<td style="width:200px">
                                <div style="font-family: 'Open Sans', sans-serif;font-size:14px;font-weight:bold;padding-bottom:5px;color:#c9a131">Name</div>
                                <div class="col-md-12" style="padding-left:0"><input type="text" name="c_name" class="form-control" placeholder="Your name *" required="required"/></div>
                            <!--<input class="inputname" type="text" name="c_name" placeholder="   Your name *" required="required"/>-->
                            	</td>
                                <td><div style="font-family: 'Open Sans', sans-serif;font-size:14px;font-weight:bold;padding-bottom:5px;color:#c9a131">Email</div>
                                <div class="col-md-12" style="padding-left:0"><input type="email" name="c_email" class="form-control" placeholder="Your email *" required="required" pattern="^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$" title="abc@gmail.com"/></div>
                            <!--<input class="inputname" type="text" name="c_email" placeholder="   Your email *"  required="required"/>--></td>
                            </tr>
                            <tr>
                            	<td>
                                <div style="margin-top:12px">
                                <div style="font-family: 'Open Sans', sans-serif;font-size:14px;font-weight:bold;padding-bottom:5px;color:#c9a131">Date</div>
                                    <div class="col-md-11 input-group date" style="">
                                        <input type="text" id="datetimepicker2" name="c_date" class="form-control" required="required"/>
                                        <div class="input-group-addon" id="mo">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                        
                                    </div>
                                    <?php echo isset($error['c_date']) ? $error['c_date'] : ''; ?>
                                </div>
                            </td>
                                <td><div style="font-family: 'Open Sans', sans-serif;font-size:14px;font-weight:bold;padding-bottom:5px;color:#c9a131;margin-top:10px"> Party number</div>
                                <div class="col-md-12" style="padding-left:0"><input type="number" name="c_number" class="form-control" placeholder="Party number" required="required"/></div>
                            </td>
                            </tr>
                            <tr>
                            	<td colspan="2" style="text-align:center"><input style="width:150px;height:34px;background:#c9a131;border:0;color:#FFF;margin-top:40px" class="inputsubmit" type="submit" value="Book now!" /></td>
                                
                            </tr>
                            
                        </table>
</form>