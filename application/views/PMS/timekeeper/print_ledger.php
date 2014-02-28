<style type='text/css'>
*{ text-align:center; }
.right { text-align: right;}
table {width:100%;border: 1px solid #000;}
table tr {border: 1px solid #000;}
table tr th,td{border: 1px solid #000;padding: 6px 6px 6px 6px;text-align:left;}
</style>
<page>
<h1>Teresa Marble Corporation - Ledger</h1>
<h3 class='right'>Date: <?php echo $date;?></h3>
<table>
	<tr>
		<th>Employee Name</th>
		<th>Position</th>
		<th>Rate</th>
		<th>Gross</th>
		<th>Hours Worked</th>
		<th>SSS</th>
		<th>PagIbig</th>
		<th>PhilHealth</th>
		<th>NET Pay</th>
	</tr>
	<?php $net_total = 0;?>
	<?php foreach($datas AS $data){ ?>
	<tr>
		<td><?php echo $data['employee_name'];?></td>
		<td><?php echo $data['position'];?></td>
		<td><?php echo $data['employee_rate'];?></td>
		<td><?php echo $data['gross_pay'];?></td>
		<td><?php echo $data['total_hours'];?></td>
		<td><?php echo $data['deduction']['sss'];?></td>
		<td><?php echo $data['deduction']['pagibig'];?></td>
		<td><?php echo $data['deduction']['philhealth'];?></td>
		<td><?php echo $data['net_pay'];?></td>
		<?php $net_total += $data['net_pay'];?>
	</tr>
	<?php } ?>
	<tr><td colspan='8'>Total NET for all Employees</td><td><?php echo $net_total;?></td></tr>
</table>
</page>