<?php echo $head; ?><?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Add Employee</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | General Manager</h1>
    </div>
</div>
<div style="width: 100%; background:#0099cc;color: #fff; font-size:32px;text-align:center;">
	Personal Information
</div>
<div class="pure-g" style="text-align: left;">
	<div class="pure-u-1-3" style="width: 100%">
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Employee Barcode(Value):</th>
					<th>Firstname:</th>
					<th>Middlename:</th>
					<th>Lastname:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo Form::input('barcode_val', null, array("placeholder"=>"Barcode","style"=>"width: 98%","maxlength"=>8));?></td>
					<td><?php echo Form::input('firstname', null, array("placeholder"=>"Firstname","style"=>"width: 98%"));?></td>
					<td><?php echo Form::input('middlename', null, array("placeholder"=>"Middlename","style"=>"width: 98%"));?></td>
					<td><?php echo Form::input('lastname', null, array("placeholder"=>"Lastname","style"=>"width:98%"));?></td>
				</tr>
			</tbody>
		</table>
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Address:</th>
					<th>Email Address:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo Form::input('address', null, array("placeholder"=>"Address", "style"=>"width: 98%"));?></td>
					<td><?php echo Form::input('email', null, array("placeholder"=>"Email Address", "style"=>"width: 98%"));?></td>
				</tr>
			</tbody>
		</table>
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Date of Birth</th>
					<th>Department</th>
					<th>Job Position</th>
					<th>Employee Type</th>
					<th>Civil Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
					<?php echo Form::input('birthday', null, array("placeholder"=>"Date of Birth", "class"=>"birthday","style"=>"float:left;width: 80%"));?>
					<div class="ageResponse" style="float:left;">Age:<span class="ageVal"></span></div>
					</td>
					<td>
					<select name="department" style="width: 98%;">
					<?php //array_sort($departments); ?>
					<?php foreach($departments AS $department){ ?>
						<option value="<?php echo $department[
						'dept_no'];?>"><?php echo $department['dept_name'];?></option>
					<?php } ?>
					</select>
					</td>
					<td>
					<span class="spanPositions"></span>
					</td>
					<td>
						<?php foreach($employee_types AS $type_no=>$employee_type){ ?>
						<?php echo Form::radio('employee_type', $type_no) . $employee_type . " ";?>
						<?php } ?>
					</td>
					<td>
						<?php foreach($civil_status AS $key_val=>$civil_stat){ ?>
						<?php echo Form::radio('civil_status', $key_val) . $civil_stat ." ";?>
						<?php } ?>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Place Of Birth</th>
					<th>Religion</th>
					<th>Gender:</th>
					<th>Citizenship</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo Form::input('placeOfBirth', null, array("style"=>"width: 98%", "placeholder"=>"Place of Birth"));?></td>
					<td><?php echo Form::input('religion', null, array("style"=>"width: 98%", "placeholder"=>"Religion"));?></td>
					<td>Male:<?php echo Form::radio('gender', 'm');?>Female:<?php echo Form::radio('gender','f');?></td>
					<td><?php echo Form::input('citizenship', null, array("style"=>"width: 98%", "placeholder"=>"Citizenship"));?></td>
				</tr>
			</tbody>
		</table>
		<div style="width: 100%; background:#0099cc;color: #fff; font-size:32px;text-align:center;">
			Emergency Contact Information
		</div>
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Name</th>
					<th>Contact #</th>
					<th>Secondary Contact #</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo Form::input('emg_name_one', null, array('style'=>'width: 98%;', 'placeholder'=>'Name'));?></td>
					<td><?php echo Form::input('emg_contact_one',null, array('style'=>'width: 98%;', 'placeholder'=>'Contact No.','maxlength'=>'11'));?></td>
					<td><?php echo Form::input('emg_sec_contact_one', null, array('style'=>'width:98%;','placeholder'=>'Secondary contact No.','maxlength'=>'11')); ?></td>
				</tr>
			</tbody>
		</table>
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Name</th>
					<th>Contact #</th>
					<th>Secondary Contact #</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo Form::input('emg_name_two', null, array('style'=>'width: 98%;', 'placeholder'=>'Name'));?></td>
					<td><?php echo Form::input('emg_contact_two',null, array('style'=>'width: 98%;', 'placeholder'=>'Contact No.','maxlength'=>'11'));?></td>
					<td><?php echo Form::input('emg_sec_contact_two', null, array('style'=>'width:98%;','placeholder'=>'Secondary contact No.','maxlength'=>'11')); ?></td>
				</tr>
				<tr class='msgAddEmployee'>
				</tr>
				<tr>
					<td colspan='4'><button id="addEmployeeBtn" class="approve">Add Employee</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<script>
$(document).ready(function(){
	$(".birthday").datepicker({
		dateFormat: 'yy-mm-dd',
		maxDate: 0,
		minDate:"-59Y",
		changeYear: true,
		changeMonth: true
	});
	$("input[name='birthday']").change(function(){
		$.ajax({
			url:'<?php echo URL::site('ems/compute_age',null, true);?>',
			type: 'POST',
			data: { birthdate:$(this).val() },
			success: function(ageResponse){
				$(".ageVal").html(ageResponse);
			}
		});
	});
	$("#addEmployeeBtn").on('click', function(){

		$.ajax({
			url: '<?php echo URL::site('ems/adding_employee',null, true);?>',
			type: 'POST',
			data: {
				barcode_val: $("input[name='barcode_val']").val(),
				firstname: $("input[name='firstname']").val(),
				middlename: $("input[name='middlename']").val(),
				lastname: $("input[name='lastname']").val(),
				address: $("input[name='address']").val(),
				email: $("input[name='email']").val(),
				birthdate: $("input[name='birthday']").val(),
				job_position: $("select[name='position']").val(),
				employee_type: $("input[name='employee_type']").val(),
				civil_status: $("input[name='civil_status']").val(),
				gender:$("input[name='gender']").val(),
				place_of_birth: $("input[name='placeOfBirth']").val(),
				religion: $("input[name='religion']").val(),
				citizenship: $("input[name='citizenship']").val(),
				// emergency information
				emg_name_one: $("input[name='emg_name_one']").val(),
				emg_contact_one: $("input[name='emg_contact_one']").val(),
				emg_sec_contact_one: $("input[name='emg_sec_contact_one']").val(),
				emg_name_two: $("input[name='emg_name_two']").val(),
				emg_contact_two: $("input[name='emg_contact_two']").val(),
				emg_sec_contact_two: $("input[name='emg_sec_contact_two']").val()
				 
			},
			success: function(responseInsertEmployee){
				$(".msgAddEmployee").html(responseInsertEmployee);
			}
		});
	});
	
	// changes department
	$("select[name='department']").change(function(){
		var dept  = $(this).val();
		//alert(dept);
		$.ajax({
			url: '<?php echo URL::site('ems/get_position_by_dept', null, true);?>',
			type: 'POST',
			data: { department: dept },
			success: function(htmlResponseSelect){
				$(".spanPositions").html(htmlResponseSelect);
			}
		});
	});
});
</script>
