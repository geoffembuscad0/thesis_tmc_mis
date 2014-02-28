<style type='text/css'>
* { text-align:center; }
.right { text-align: right; }
table { width:100%;border: 1px solid #000; }
table tr { border: 1px solid #000; }
table tr th,td{ border: 1px solid #000;padding: 6px 6px 6px 6px;text-align:left; }
</style>
<page>
	<img src="./assets/reportlogo.png"/>
	<br><br>
	<h1 style="text-align: center;">Leave Information</h1>
	<br><br>
	<table>
		<tr>
			<th>Employee Name:</th>
			<td colspan='5'><?php echo $leave_info[0]['firstname'];?> <?php echo $leave_info[0]['lastname'];?></td>
		</tr>
		<tr>
			<th>Position:</th>
			<td><?php echo $leave_info[0]['pos_name'];?></td>
			<th>Department:</th>
			<td><?php echo $leave_info[0]['dept_name'];?> Department</td>
			<th>Employee Type:</th>
			<td>
			<?php if($leave_info[0]['status'] == 1){ ?>
			<?php echo "Fulltime"; ?>
			<?php } else if($leave_info[0]['lstatus'] == 2){ echo "Part-Time"; } ?>
			</td>
		</tr>
		<tr>
			<th colspan='6'>Leave Information</th>
		</tr>
		<tr>
			<th>Leave Type:</th>
			<td><?php echo $leave_info[0]['leave_type'];?></td>
			<th>Date Leave:</th>
			<td><?php echo date_format(date_create($leave_info[0]['date_leave']),"m/d/Y");?></td>
			<th>No. of Days</th>
			<td><?php echo $leave_info[0]['no_of_days'];?></td>
		</tr>
		<tr>
			<th>Approval Status:</th>
			<td>
			<?php if($leave_info[0]['leave_status'] == 1){?>
			<?php echo "Approved";?>
			<?php } else if($leave_info[0]['leave_status'] == 2){?>
			<?php echo "Denied";?>
			<?php } else { echo "Pending"; }?>
			</td>
			<th>Date given for the status:</th>
			<td colspan='3'><?php echo date_format(date_create($leave_info[0]['date_given_status']), "m/d/Y g:i A");?></td>
		</tr>
		<tr>
			<th colspan='6'>Employee Reason</th>
		</tr>
		<tr>
			<th colspan='6'><?php echo $leave_info[0]['reason'];?></th>
		</tr>
	</table>
</page>

