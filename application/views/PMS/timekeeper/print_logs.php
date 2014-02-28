<style type='text/css'>
*{ text-align:center; }
.right { text-align: right;}
table {width:100%;border: 1px solid #000;}
table tr {border: 1px solid #000;}
table tr th,td{border: 1px solid #000;padding: 6px 6px 6px 6px;text-align:left;}
</style>
<page>
	<h1>Teresa Marble Corporation - Employee Logs</h1>
	<table>
		<tr>
			<td>Employee Name:</td>
			<td colspan='7'><?php echo $employee_info[0]['firstname'];?> <?php echo $employee_info[0]['lastname'];?></td>
		</tr>
		<tr>
			<td>Department:</td>
			<td><?php echo $employee_info[0]['dept_name'];?></td>
			<td>Position:</td>
			<td><?php echo $employee_info[0]['pos_name'];?></td>
			<td>Employee Type:</td>
			<td><?php if($employee_info[0]['status'] == 1){ ?>
			<?php echo "Fulltime Worker";?>
			<?php } else { ?>
			<?php echo "Part-Time Worker";?>
			<?php } ?>
			</td>
			<td>Date Printed:</td>
			<td><?php echo date("m/d/Y");?></td>
		</tr>
		<tr>
			<td>No of days Worked</td>
			<td colspan='3'><?php echo count($logs);?></td>
			<td>No of days absent:</td>
			<td colspan='3'><?php echo $absents;?></td>
		</tr>
	</table>
	<h1>Logs Records</h1>
	<table>
		<tr>
			<th>Date</th>
			<th>Timein</th>
			<th>Timeout</th>
			<th>Total Hours Worked</th>
			<th>OT Hours</th>
			<th>Timein status</th>
		</tr>
		<?php foreach($logs AS $log){ ?>
		<tr>
			<td><?php echo date_format(date_create($log['time_in']),"M d Y");?></td>
			<td><?php echo date_format(date_create($log['time_in']),"M d Y g:i A");?></td>
			<td><?php echo date_format(date_create($log['timeout']), "M d Y g:i A");?></td>
			<td><?php echo round((strtotime($log['timeout']) - strtotime($log['time_in']))/3600, 1); ?></td>
			<td><?php echo round((strtotime($log['timeout']) - strtotime($log['time_in']))/3600, 1)-8;?></td>
			<td>Ontime</td>
		</tr>
		<?php } ?>
	</table>
</page>