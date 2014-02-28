<?php echo $head; ?>
<?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;background:#6F4E37;color:white;">
		<h1>Employee Leave Request Form</h1>
	</div>
</div>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;">
		<table id="careerApplicantForm">
			<thead>
				<tr><th colspan='4'>Employee Leave Form</th></tr>
			</thead>
			<tbody>
				<tr><td class="label" style="text-align:center;" colspan='4'><p>Fields with (<font color='red'>*</font>) are <b>required fields</b>.</p></td></tr>
				<tr>
				<td class="label">Employee Name:</td>
				<td class="input" colspan='3'><?php echo $employee_info[0]['firstname'];?> <?php echo $employee_info[0]['lastname'];?></td>
				</tr>
				<tr>
				<td class="label">Forwarding Address:</td>
				<td class="input"><?php echo Form::input('address', null, array('class'=>'applicant_input','style'=>'width:98%;','placeholder'=>'Address to be forward'));?></td>
				<td class="label">Type of Leave:</td>
				<td class="input">
				<select name="leave_type" style='width: 98%;'>
				<?php foreach($leave_types AS $leave_type){ ?>
				<option value="<?php echo $leave_type;?>"><?php echo $leave_type; ?></option>
				<?php } ?>
				</select>
				</td>
				</tr>
				<tr>
				<td class="label">Date of Leave:</td>
				<td class="input"><?php echo Form::input('date_leave', null, array("class"=>"applicant_input","style"=>"width:98%;","placeholder"=>"Date of Leave"));?></td>
				<td class="label">Number of Days:</td>
				<td class="input">
				<select name="no_of_days">
				<?php for($days = 1; $days <= 20; $days++){ ?>
				<option value="<?php echo $days; ?>"><?php echo $days;?></option>
				<?php } ?>
				</select>
				</td>
				</tr>
				<tr>
				<td class="label" colspan='4'>Reason</td>
				</tr>
				<tr>
				<td class="input" colspan='4' style='text-align: center;'>
				<textarea name="reason" style="width: 98%; height: 100px;"></textarea>
				</td>
				</tr>
				<tr id='responseLeave'></tr>
				<tr>
				<td class="label" style='text-align: center;' colspan='4'><button id='submitLeave' class="submitbtn">Submit Leave</button></td>
				</tr>
			</tbody>
		</table>
	</div>	
</div>
<div class="pure-g">
	<div class="pure-u-1-3" style="width: 100%;">
		
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#submitLeave").on('click', function(){
		if($("input[name='date_leave']").val() == null){
			alert("Please specify the date you'll be leaving.");
		}

		if($("textarea[name='reason']").val() == null){
			alert("Please state your reason why you'll be leaving.");
		}

		if($("input[name='date_leave']").val() != null && $("textarea[name='reason']").val() != null){
			$.ajax({
				url: '<?php echo URL::site('ems/submit_leave');?>',
				type: 'POST',
				data: {
					employee_id: '<?php echo $employee_info[0]['employee_id'];?>',
					address: $("input[name='address']").val(),
					leave_type: $("select[name='leave_type']").val(),
					date_leave: $("input[name='date_leave']").val(),
					no_of_days: $("select[name='no_of_days']").val(),
					reason: $("textarea[name='reason']").val()
				},
				success: function(responseLeave){
					$("#responseLeave").html(responseLeave);
				}
			});
		}
	});
	
	$("input[name='date_leave']").datepicker({ minDate:0, dateFormat:'yy-mm-dd' });
});
</script>