// JavaScript Document
$.datetimepicker.setLocale('vi');
$('#datetimepicker2').datetimepicker({
	lang:'vi',
	timepicker:false,
	format:'d/m/Y',
	formatDate:'Y/m/d',
	minDate:new Date(), // yesterday is minimum date
	//maxDate:'+1970/01/02', // and tommorow is maximum date calendar
	//startDate:new Date(),
	//defaultDate:new Date()
});
$('#mo').click(function(){
	$('#datetimepicker2').datetimepicker('show');
	
});