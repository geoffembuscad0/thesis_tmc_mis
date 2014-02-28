<style type="text/css">
* { text-align: center; }
table { text-align: center; }
table tr { border: 1px solid #000; }
table tr th { color: #fff; font-size: 20px; width: 142px; }
table tr td { border: 1px solid #000; font-size: 20px; }
</style>
<page>
<h1>TERESA MARBLE CORPORATION</h1>
<h2>Products Average Scores</h2>
<p style="float: left;text-align:right;">Date: <?php echo date("M d Y");?></p>
<table>
	<tr>
		<th style="background: #00698C; border: 1px solid #00698C;">Product No.</th>
		<th style="background: #69008C; border: 1px solid #69008C;">Product Name</th>
		<th style="background: #468C00; border: 1px solid #468C00;">Product Price</th>
		<th style="background: #D96C00; border: 1px solid #D96C00;">Average Scores</th>
		<th style="background: #D90000; border: 1px solid #D90000;">Score Label</th>
	</tr>
	<?php $count = 1; ?>
	<?php foreach($ProductScores AS $datas){ ?>
		<tr>
			<td><?php echo $datas['product_no'];?></td>
			<td><?php echo $datas['product_name'];?></td>
			<td>PHP <?php echo $datas['product_price'];?></td>
			<td><?php echo number_format($datas['average_score'],2);?>/5</td>
			<td><?php echo $datas['rank']; ?></td>
		</tr>
	<?php } ?>
</table>
</page>

