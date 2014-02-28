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
	<h1 style="text-align: center;">Inquiry Document Report</h1>
	<br><br><br>
	<h6>Inquiry Code: <?php echo $inquiry_docs[0]['inq_no']; ?></h6>
	<h6>Date Issued: <?php echo date_format(date_create($inquiry_docs[0]['date_issued']),"l, F d, Y");?></h6>
	<h6>Date Approved: <?php echo ($inquiry_docs[0]['date_approved']!=null) ? date_format(date_create($inquiry_docs[0]['date_approved']),"l, F d, Y") : "<i>-Not Yet Approved-</i>";?></h6>
	<br>
	<table style='width:100%'>
	<tr><td style='width: 30%;'>Client Name:</td><td style='width:400px;'><?php echo $inquiry_docs[0]['client_name']; ?></td></tr>
	<tr><td>Address:</td><td><?php echo $inquiry_docs[0]['address'];?></td></tr>
	<tr><td>Email:</td><td><?php echo $inquiry_docs[0]['email']; ?></td></tr>
	<tr><td>Telephone/Mobile:</td><td><?php echo ($inquiry_docs[0]['telephone']!=null) ? $inquiry_docs[0]['telephone'] : "<i>-none-</i>";?>/<?php echo ($inquiry_docs[0]['mobile']!=null)?$inquiry_docs[0]['mobile']:"<i>-none-</i>";?></td></tr>
	</table><br>
	<h2>Inquired Products</h2>
	<table style='width:100%'>
	<tr><td style='width:70px;'>Item #</td><td style='width:370px;'>Item Name</td><td style='width:220px;'>Pice</td></tr>
	<?php foreach($inquiry_products AS $inq_products){?>
	<tr>
	<td><?php echo $inq_products['product_no'];?></td>
	<td><?php echo $inq_products['product_name'];?></td>
	<td><?php echo $inq_products['price']; ?></td>
	</tr>
	<?php } ?>
	</table>
	<?php //print_r($inquiry_products);?>
</page>
