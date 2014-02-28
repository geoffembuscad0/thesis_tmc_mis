<?php echo $head; ?>
<?php echo $page_header; ?>
<?php //echo $verify_applicant_form; ?>
<div class='pure-g'>
	<div class='pure-u-1-3' style='width: 100%;'>
		<h1 style='font-size: 46px;'>Employee Time Monitoring</h1>
	</div>
</div>
<div class="pure-g">
	<div class="pure-u-1-3" style="width: 50%;">
		<h1>Time Monitoring Form</h1>
		<label>Employee No:</label><?php echo Form::input('employee_id'); ?></br>
		<button id='employeeLogin' class='pure-button pure-button-primary'>Login</button>
		<button id='employeeLogout' class='pure-button pure-button-primary'>Logout</button>
		<div class='timeMonitoringMsg'></div>
	</div>
	<div class="pure-u-1-3" style="width: 50%;">
		<div class='calendaryo'>
		</div>
	</div>
</div>
<script type='text/javascript'>
$(document).ready(function(){
	$("input[name='employee_id']").focus();

	$("#employeeLogin").on('click', function(){
		$.ajax({
			url: '<?php echo URL::site('pms/get_employee_log', null, true); ?>',
			data: { employee_id: $("input[name='employee_id']").val(), login:1,logout:null },
			type: 'POST',
			success: function(responseLogin){
				$(".timeMonitoringMsg").html(responseLogin);
			}
		});
	});

	$("#employeeLogout").on('click', function(){
		$.ajax({
			url: '<?php echo URL::site('pms/get_employee_log', null, true); ?>',
			data: { employee_id: $("input[name='employee_id']").val(),login:null,logout:1 },
			type: 'POST',
			success: function(responseLogout){
				$(".timeMonitoringMsg").html(responseLogout);
			}
		});
	});
	
	$(".calendaryo").datepicker({
		numberOfMonths: 2,
		showButtonPanel: true
	});
});
</script>
</body>
</html>