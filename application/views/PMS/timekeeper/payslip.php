<style type='text/css'>
* { text-align: center;}
.left { text-align:left; }
.right { text-align: right; }
table {  }
table tr {  }
table tr th,td { padding: 6px 74px 6px 6px;text-align:left; }
</style>
<page>
<img class="left" src="<?php echo URL::site("assets/reportlogo.png",null,false);?>"/>
<h2>Payroll Payslip</h2>
<h3 class='right'>Date: <?php echo $date;?></h3>

<table>
<tr>
<th colspan='7'>Employee Information</th>
</tr>

<tr>
<td>Employee ID:</td><td><?php echo $employee_id;?></td>
<td>Employee Name:</td><td colspan='4'><?php echo $employee_name;?></td>
</tr>

<tr>
<td>Department:</td>
<td><?php echo $employee_department;?></td>
<td>Employee Position:</td>
<td colspan='4'><?php echo $employee_position;?></td>
</tr>

<tr>
<td>Employee Type:</td>
<td><?php echo $employee_type;?></td>
<td>Marital Status</td>
<td colspan='4'><?php echo $marital_status;?></td>
</tr>

<tr>
<th colspan='7'>Earnings</th>
</tr>

<tr>
<td colspan='3'>Basic Salary:</td>
<td colspan='4'>PHP <?php echo number_format($basic_salary,2,'.',',');?></td>
</tr>

<tr>
<td colspan='3'>OT Pay:</td>
<td colspan='4'>PHP <?php echo number_format($OT_pay, 2, '.',',');?></td>
</tr>

<tr>
<td colspan='3'>GROSS Pay:</td>
<td colspan='4'>PHP <?php echo number_format($gross_pay,2,'.',',');?></td>
</tr>

<tr>
<th colspan='7'>Deduction Informations</th>
</tr>

<?php foreach($deductions AS $deduction_label => $deduction_val){ ?>
<?php echo "<tr>";?>
<?php echo "<td colspan='3'>".$deduction_label."</td>";?>
<?php echo "<td colspan='4'>PHP".$deduction_val."</td>";?>
<?php echo "</tr>";?>
<?php } ?>

<tr>
<td colspan='3'>Total Deduction</td>
<td colspan='4'>PHP <?php echo $total_deductions; ?></td>
</tr>

<tr>
<th colspan='7'>BIR Information</th>
</tr>
<tr>
<td colspan='3'>BIR Excess</td>
<td colspan='4'>PHP <?php echo $bir_excess;?></td>
</tr>

<tr>
<td colspan='3'>BIR Tax</td>
<td colspan='4'>PHP <?php echo $bir_tax;?></td>
</tr>

<tr>
<td colspan='3'>NET Pay:</td>
<td colspan='4'>PHP <?php echo number_format($net_value,2,'.',',');?></td>
</tr>

<tr>
<?php foreach($deductions AS $deduction_label => $deduction_val){ ?>
<?php echo "<td></td>";?>
<?php } ?>
<td></td>
<td></td>
<td></td>
</tr>

</table>
</page>
