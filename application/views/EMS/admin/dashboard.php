<?php echo $head; ?>
<?php echo $page_header; ?>
<?php echo $verify_applicant_form; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Dashboard</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | General Manager</h1>
    </div>
</div>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:100%;">
    	<h1>Employee Lists<a href="<?php echo URL::site('ems/export_employees',null,true);?>" class="export-button">Export Employee Lists</a></h1>    	
    </div>
</div>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;">
		<table id="employeeListahan" class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Employee Name</th>
					<th>Position</th>
					<th>Department</th>
					<th>Type</th>
					<th>Date Changed</th>
					<th><div id="searchbabe">
					<input type="text" name="search_query" placeholder="Search here..."/>
					</div>
					</th>
				</tr>
			</thead>
			<tbody>
	<tr id="filterEmployeeList"><td><?php echo Form::select('name_query',$sort_queries['name'],$filter_data['name']); ?></td>
		<td><?php echo Form::select('position_query',$sort_queries['position'],$filter_data['position']); ?></td>
		<td><?php echo Form::select('department_query',$sort_queries['department'],$filter_data['department']); ?></td>
		<td>
		<select name='type_query'>
		<?php foreach($sort_queries['type'] AS $type_key => $type){?>
		<option value='<?php echo $type_key;?>'><?php echo $type;?></option>
		<?php } ?>
		</select>
		</td>
		<td><?php echo Form::select('date_modified', $sort_queries['date_modified'], $filter_data['date_modified']); ?></td>
		<td><input type="button" id="filterEmpList" class="approve" value="Sort"/></td>
	</tr>
			<?php if(count($employees) > 0) { ?>
				<?php foreach($employees AS $employee){ ?>
					<tr>
						<td style="text-align: left; padding-left: 15px;"><?php echo $employee['lastname'];?>, <?php echo $employee['firstname'];?></td>
						<td><?php echo $employee['pos_name'];?></td>
						<td><?php echo $employee['dept_name'];?></td>
						<td><?php echo $employee['type'];?></td>
						<td><?php echo date('d/m/Y g:i A',strtotime($employee['date_modified'])); ?></td>
						<td>
							<button id="viewEmployeeBtn<?php echo sha1($employee['employee_id']);?>" class="view">View Employee</button>
							<button id="editEmployeeBtn<?php echo sha1($employee['employee_id']);?>" class="approve">Edit Employee</button>
							<button id="deleteEmp<?php echo $employee['employee_id'];?>" class="deny">Resign Employee</button>
							
							<div class="reveal-modal" id="viewEmployeeModal<?php echo sha1($employee['employee_id']);?>">
							<p class='close-reveal-modal'>close[x]</p>
							<div style="width:100%;height: 240px;overflow:auto;">
							<table id="careerApplicantForm">
							<thead>
							<tr><th colspan='4'>View Employee</th></tr>
							</thead>
							<tbody>
							<tr>
								<td class='label'>Firstname:</td>
								<td class='input'><?php echo $employee['firstname'];?></td>
							</tr><tr>
								<td class='label'>Middlename:</td>
								<td class='input'><?php echo $employee['middlename'];?></td>
							</tr><tr>
								<td class='label'>Lastname:</td>
								<td class='input'><?php echo $employee['lastname']; ?></td>
							</tr><tr>
								<td class='label'>Department:</td>
								<td class='input'>
									<?php echo $employee['dept_name'];?>
								</td>
							</tr><tr>
								<td class='label'>Position:</td>
								<td class='input'>
									<?php echo $employee['pos_name'];?>
								</td>
							</tr><tr>
								<td class='label'>Position:</td>
								<td class='input'>
									<?php echo $employee['pos_name'];?>
								</td>
							</tr><tr>
								<td class='label'>Employee Type:</td>
								<td class='input'>
									<?php echo $employee['type']; ?>
								</td>
							</tr><tr>
								<td class='label'>Relationship Status:</td>
								<td class='input'>
									<?php if($employee['relation_stat'] == 1){ ?>
									<?php echo "Single";?>
									<?php } else { ?>
									<?php echo "Married";?>
									<?php } ?>
								</td>
							</tr><tr>
								<td class='label'>Birthdate:</td>
								<td class='input'>
									<?php echo date_format(date_create($employee['birthdate']),'F d Y');?>
								</td>
							</tr><tr>
							<td>Absents:</td>
							<td><?php echo $employee['absents'];?></td>
							</tr><tr>
							<td>Employee Rate(Payroll):</td>
							<td><?php echo $employee['employee_rate'];?></td>
							</tr>
							<tr id="reponseUpdatedEmp<?php echo md5($employee['employee_id']);?>">
							</tr><tr>
								<td colspan='2'></td>
							</tr>
							</tbody>
							</table>
							</div>
							</div>
							
							<div class="reveal-modal" id="editEmployeeModal<?php echo md5($employee['employee_id']);?>">
							<p class="close-reveal-modal">close[x]</p>
							<div style="width: 98%;height: 360px;overflow:auto;">
							<?php echo Form::hidden('employeeID', $employee['employee_id']);?>
							<table id="careerApplicantForm">
							<thead>
							<tr><th colspan='4'>Edit Employee</th></tr>
							</thead>
							<tbody>
							<tr>
								<td class='label'>Firstname:</td>
								<td class='input'><?php echo Form::input('empFname',$employee['firstname'],array('id'=>'editFnameEmp' . sha1($employee['employee_id']),'class'=>'applicant_input','style'=>'width:98%'));?></td>
							</tr><tr>
								<td class='label'>Middlename:</td>
								<td class='input'><?php echo Form::input('empMname',$employee['middlename'], array('id'=>'editMnameEmp' . sha1($employee['employee_id']),'class'=>'applicant_input','style'=>'width:98%'));?></td>
							</tr><tr>
								<td class='label'>Lastname:</td>
								<td class='input'><?php echo Form::input('empLname',$employee['lastname'], array('id'=>'editLnameEmp' . sha1($employee['employee_id']),'class'=>'applicant_input','style'=>'width:98%')); ?></td>
							</tr><tr>
								<td class='label'>Position:</td>
								<td class='input'>
									<select id='empJobPosition<?php echo md5($employee['employee_id']);?>' class='applicant_input' style='width:98%;'>
									<?php foreach($job_positions AS $job_position){ ?>
									<?php if($job_position['pos_name'] == $employee['pos_name']){?>
									<option selected><?php echo $job_position['dept_name'] . ' Dept.';?> - <?php echo $job_position['pos_name'];?></option>
									<?php } else { ?>
									<option><?php echo $job_position['dept_name'] . ' Dept.';?> - <?php echo $job_position['pos_name'];?></option>
									<?php } ?>
									<?php } ?>
									</select>
								</td>
							</tr><tr>
								<td class='label'>Marital Status:</td>
								<td class='input'>
									<?php foreach($marital_statuses AS $marital_stat => $marital_status){ ?>
									<?php if($employee['relation_stat'] == $marital_stat){ ?>
									<?php echo Form::radio('marital_status', $marital_stat, true);?>:<?php echo $marital_status; ?>
									<?php } else { ?>
									<?php echo Form::radio('marital_status', $marital_stat);?>:<?php echo $marital_status; ?>
									<?php } ?>
									<?php }?>
								</td>
							</tr><tr>
								<td class='label'>Employee Rate:</td>
								<td class='input'>
								<?php echo Form::input('employee_rate', $employee['employee_rate'], array("class"=>"applicant_input", "style"=>"width: 98%"));?>
								</td>
							</tr><tr>
							<td colspan='2' id="reponseUpdatedEmp<?php echo md5($employee['employee_id']);?>" style="display:none;"></td>
							</tr><tr>
								<td colspan='2'><button id="saveemployeebtn<?php echo sha1($employee['employee_id']);?>" class="approve" style="width: 30%;padding-top: 6px;padding-bottom: 6px;">Update Employee</button></td>
							</tr>
							</tbody>
							</table>
							</div>
							</div><script>
							$(document).ready(function(){
								$("#viewEmployeeBtn<?php echo sha1($employee['employee_id']);?>").on('click', function(){
									$("#viewEmployeeModal<?php echo sha1($employee['employee_id']);?>").reveal();
								});
								
								$("#saveemployeebtn<?php echo sha1($employee['employee_id']);?>").on('click', function(){
									$.ajax({
										url: '<?php echo URL::site('ems/update_employee',null,true);?>',
										data: {
											emp_id:'<?php echo $employee['employee_id'];?>',
											fname: $("#editFnameEmp<?php echo sha1($employee['employee_id']);?>").val(),
											mname:$("#editMnameEmp<?php echo sha1($employee['employee_id']);?>").val(),
											lname:$("#editLnameEmp<?php echo sha1($employee['employee_id']);?>").val(),
											position:$("#empJobPosition<?php echo md5($employee['employee_id']);?>").val()
										},
										type: 'POST',
										success: function(reponseUpdatedEmployee){
											var responseUpdatedEmployee = reponseUpdatedEmployee;
											if(responseUpdatedEmployee == 1){
												alert("Employee has been successfully updated");
												self.location = '<?php echo URL::site('ems/admin_dashboard',null,true);?>';
											} else {
												alert(responseUpdatedEmployee);
											}
										}
									});
								});
								
								$("#editEmployeeBtn<?php echo sha1($employee['employee_id']);?>").on('click', function(){
									$("#editEmployeeModal<?php echo md5($employee['employee_id']);?>").reveal();
								});
								
								$("#deleteEmp<?php echo $employee['employee_id'];?>").on('click', function(){
									var confDelete = confirm('Are you sure you want to remove <?php echo $employee['firstname'] . ' ' . $employee['lastname']; ?> on the employee lists?');
									if(confDelete){
										$.ajax({
											url:'<?php echo URL::site('ems/delete_employee', null, true);?>',
											data: { employee_id: '<?php echo $employee['employee_id'];?>' },
											type: 'POST',
											success: function(deleteemployeeResponse){
												alert('Employee has been resigned.');
												self.location = '<?php echo URL::site('ems/admin_dashboard', null, true);?>';												
											}
										});
									}
								});
							});
							</script>
						</td>
					</tr>
				<?php } ?>
			<?php } else { ?>
				<tr><td colspan='5'>-No employees-</td></tr>
			<?php }?>
			</tbody>
		</table>
	</div>
</div>
<style type='text/css'>
.pager { background: #007FFF; color: #fff; text-align: left; width: 100%; }
.pages-label { font-size: 18px; }
.page-number { cursor: pointer; font-weight: bold; padding: 10px; font-size: 18px; margin: 10px;}
</style>
<script text="text/javascript">
$(document).ready(function(){
	<?php echo $verify_applicant_form_script; ?>
	<?php echo $ajax_validate_hiree; ?>

	$("#filterEmpList").on('click', function(){
		var url = "<?php echo URL::site("ems/admin_dashboard?",null,true); ?>";

		if($("select[name='name_query']").val()){
			url += 'name=' + $("select[name='name_query']").val();
		}

		if($("select[name='position_query']").val()){
			url += '&position='+$("select[name='position_query']").val();
		}

		if($("select[name='department_query']").val()){
			url += '&department='+$("select[name='department_query']").val();
		}

		if($("select[name='type_query']").val()){
			url += '&type='+$("select[name='type_query']").val();
		}

		if($("select[name='date_query']").val()){
			url += '&date='+$("select[name='date_query']").val();
		}

		if($("select[name='date_modified']").val()){
			url += '&date_modified='+$("select[name='date_modified']").val();
		}
		self.location = url;
	});

	$('table#employeeListahan').each(function() {
	    var currentPage = 0;
	    var numPerPage = 100 * 5;
	    var $table = $(this);
	    $table.bind('repaginate', function() {
	        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
	    });
	    $table.trigger('repaginate');
	    var numRows = $table.find('tbody tr').length;
	    var numPages = Math.ceil(numRows / numPerPage);
	    var $pager = $('<div class="pager"><font size=\'4px\'>Pages:</font></div>');
	    for (var page = 0; page < numPages; page++) {
	        $('<span class="page-number"></span>').text(page + 1).bind('click', {
	            newPage: page
	        }, function(event) {
	            currentPage = event.data['newPage'];
	            $table.trigger('repaginate');
	            $(this).addClass('active').siblings().removeClass('active');
	        }).appendTo($pager).addClass('clickable');
	    }
	    $pager.insertBefore($table).find('span.page-number:first').addClass('active');
	});
	$("#datetimepickbabeh").datetimepicker({
		timeFormat: "hh:mm tt",
		dateFormat: "yy-mm-dd",
		maxDate: "0"
	});

	$('#searchbabe').keydown(function (e){
	    if(e.keyCode == 13){
		    self.location = '<?php echo URL::site('ems/admin_dashboard?search_query=',null,true); ?>' + $("input[name='search_query']").val();
	    }
	});
});
</script>
</body>
</html>
