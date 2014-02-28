<?php echo $head; ?>
<?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Dashboard</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | Payroll Personnel</h1>
    </div>
</div>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;">
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>ID Code</th>
					<th>Employee</th>
					<th>Position</th>
					<th>Department</th>
					<th>Hours</br>Worked</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($employees AS $employee){?>
				<tr>
					<td><?php echo $employee['employee_id']; ?></td>
					<td style="text-align: left; padding-left:10px;">
						<?php echo $employee['lastname'] . ', ' .$employee['firstname'] . ' ' . ucfirst(substr($employee['middlename'], 0,1)) . '.';?>
					</td>
					<td><?php echo $employee['pos_name'];?></td>
					<td><?php echo $employee['department'];?></td>
					<td><?php echo round($employee['total_hours']);?></td>
					<td>
					<button id="showEmployeeLogs<?php echo $employee['employee_id'];?>" class="approve">Employee Logs</button>
					<button class="approve" onClick="self.location='<?php echo URL::site('pms/print_payslip?employee_id='.$employee['employee_id']);?>'">Print Payslip</button>
					<div id="employeeLogs<?php echo $employee['employee_id'];?>" class="reveal-modal">
						<p class="close-reveal-modal">close[x]</p>
						<table class="InquiryDocumentsSales">
						<thead>
							<tr><th colspan='2'>Employee Time Logs</th></tr>
						</thead>
						<tbody>
						</tbody>
						</table>
						<table class="InquiryDocumentsSales">
							<thead>
								<tr><th>Date</th><th>Time In</th><th>Time Out</th><th>Hours Worked</th></tr>
							</thead>
							<tbody>
								<?php foreach($employee['employee_logs'] AS $logs){ ?>
									<tr>
										<td><?php echo date_format(date_create($logs['time_in']), "m/d/Y");?></td>
										<td><?php echo date_format(date_create($logs['time_in']), "g:i A");?></td>
										<td><?php echo date_format(date_create($logs['timeout']), "g:i A");?></td>
										<td><?php echo round((strtotime($logs['timeout']) - strtotime($logs['time_in']))/3600, 1);?></td>
										
									</tr>
								<?php } ?>
								<tr>
									<td colspan='5'>
										<button id='printlogs<?php echo $employee['employee_id'];?>' class='approve' style='padding-top: 5px;padding-bottom:5px;width:98%;font-size:18px;'>Print Log Records</button>
										<script type='text/javascript'>
										$(document).ready(function(){
											$('#printlogs<?php echo $employee['employee_id'];?>').on('click', function(){
												self.location = '<?php echo URL::site('pms/print_logs?employee_id='. $employee['employee_id'],null,true);?>';
											});
										});
										</script>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<script type="text/javascript">
					$(document).ready(function(){
						$("#showEmployeeLogs<?php echo $employee['employee_id'];?>").on('click', function(){
							$("#employeeLogs<?php echo $employee['employee_id'];?>").reveal();
						});
					});
					</script>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script text="text/javascript">
$(document).ready(function(){
	
	$("#datetimepickbabeh").datetimepicker({
		timeFormat: "hh:mm tt",
		dateFormat: "yy-mm-dd",
		maxDate: "0"
	});
});
</script>
</body>
</html>

