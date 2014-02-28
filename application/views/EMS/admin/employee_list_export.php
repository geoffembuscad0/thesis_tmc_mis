<style type="text/css">
* {
	padding: 0;
	margin: 0 auto;
}
page h1 { font-size: 40px; }
page h2 { font-size: 36px; }
page h3 { font-size: 32px; }
page h4 { font-size: 28px; }
page h5 { font-size: 24px; }
page h6 { font-size: 20px; }
page table tr td{
	border: 1px solid #000;
	font-size: 22px;
}
</style>
<page>
	<img src="./assets/reportlogo.png"/>
	<br><br>
	<h1 style="text-align: center;">Employee List Export</h1>
	<br><br>
	<table>
	<tr>
		<td style='width: 300px;color:#fff;background:#25565b;'>Employee Name</td>
		<td style='width: 75px;color:#fff;background:#25565b;'>Type</td>
		<td style='width: 150px;color:#fff;background:#25565b;'>Position</td>
		<td style='width: 200px;color:#fff;background:#25565b;'>Department</td>
	</tr>
	<?php foreach($employees AS $employee){ ?>
	<tr>
		<td><?php echo $employee['firstname'];?> <?php echo $employee['lastname'];?></td>
		<td><?php echo $employee['type'];?></td>
		<td><?php echo $employee['pos_name'];?></td>
		<td><?php echo $employee['dept_name'];?></td>
	</tr>
	<?php } ?>
	</table>
</page>

