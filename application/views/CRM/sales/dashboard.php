<?php echo $head; ?><?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Dashboard</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | Sales Coordinator</h1>
    </div>
</div>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:100%;">
    	<h1>Pending Inquiries</h1>
    </div>
</div>
<div class="pure-g" style="text-align: left;">
	<div class="pure-u-1-3" style="text-align:center;color:#000;width: 100%;">
	<table class="InquiryDocumentsSales">
			<thead>
				<tr><th>Inquiry Code</th><th>Client</th><th>Client Type</th><th style="width:5%;">Status</th><th style="width:25%;">Operation</th></tr>
			</thead>
			<tbody>
				<?php foreach($pending_inquiries AS $inquiries_list){ ?>
				<tr>
				<td><?php echo $inquiries_list['inq_no']; ?></td>
				<td><?php echo ($inquiries_list['business_name'] != null) ? $inquiries_list['business_name']."(".$inquiries_list['client_name'].")":$inquiries_list['client_name']; ?></td>
				<td><?php echo $inquiries_list['type_name']; ?></td>
				<?php if($inquiries_list['inq_status'] == 1){ ?>
					<td style="background: #00cc00; color: #fff;">Approved</td>
				<?php } else if($inquiries_list['inq_status'] == 2){ ?>
					<td style="background:#D90000;color:#fff;">Denied</td>
				<?php } else { ?>
					<td style="background:#D90000;color:#fff;">Pending</td>
				<?php } ?>
				<td>
				<button id="Aview<?php echo $inquiries_list['inq_no']; ?>" onClick="$('#modalmeA<?php echo $inquiries_list['inq_no'];?>').reveal();" class="view">View</button>
				<button id="Aapprove<?php echo $inquiries_list['inq_no']; ?>" class="approve">Approve</button>
				<button id="Adeny<?php echo $inquiries_list['inq_no']; ?>" class="deny">Deny</button>
				<div id="modalmeA<?php echo $inquiries_list['inq_no'];?>" class="reveal-modal">
					<p class="close-reveal-modal">close[x]</p>
					<table class="InquiryDocumentsSales">
					<thead>
						<tr><th colspan='2'>Client Information</th></tr>
					</thead>
					<tbody>
						<tr><td style='text-align:left;'>Inq Code:</td><td><?php echo $inquiries_list['inq_no'];?></td></tr>
						<tr><td style='text-align:left;'>Client:</td><td><?php echo ($inquiries_list['business_name'] != null) ? $inquiries_list['business_name']."(".$inquiries_list['client_name'].")":$inquiries_list['client_name']; ?></td></tr>
						<tr><td style='text-align:left;'>Client Type:</td><td><?php echo $inquiries_list['type_name'];?></td></tr>
						<tr><td style='text-align:left;'>Status:</td>
						<?php if($inquiries_list['inq_status'] == 1){ ?>
						<td style="background: #00cc00; color: #fff;">Approved</td>
						<?php } elseif($inquiries_list['inq_status'] == 2) { ?>
						<td style="background:#D90000;color:#fff;">Denied</td>
						<?php } else { ?>
						<td style="background:#d90000;color:#fff;">Pending</td>
						<?php } ?>
						</tr>
					</tbody>
					</table>
					<table class="InquiryDocumentsSales">
					<thead><tr><th colspan='2'>Inquiry Datas</th></tr></thead>
					<tbody>
						<tr><td style='text-align:left;'>Date Issued:</td><td><?php echo date_format(date_create($inquiries_list['date_issued']), 'l, F d, Y'); ?></td></tr>
						<tr><td style='text-align:left;'>Date Approved:</td><td><?php echo ($inquiries_list['date_approved']!=null) ? date_format(date_create($inquiries_list['date_approved']), 'l, F d, Y'): "-Not yet Approved-"; ?></td></tr>
						<tr><td style='text-align:left;'>Date Denied:</td><td><?php echo ($inquiries_list['date_denied'] != null) ? date_format(date_create($inquiries_list['date_denied']), 'l, F d, Y'): '-Not denied-' ;?></td></tr>
						<tr><td style='text-align:left;'>Address:</td><td><?php echo $inquiries_list['address'];?></td></tr>
						<tr><td style='text-align:left;'>Email:</td><td><?php echo $inquiries_list['email'];?></td></tr>
						<tr><td style='text-align:left;'>Contact Informations:</td><td><?php echo $inquiries_list['mobile']; ?> / <?php echo $inquiries_list['telephone'];?></td></tr>
					</tbody>
					</table>
					<table class="InquiryDocumentsSales">
					<thead>
					<tr><th colspan='3'>Product Lists</th></tr>
					</thead>
					<tbody>
					<?php foreach(DB::query(DATABASE::SELECT, "SELECT crm_inq_products.*,crm_products.* FROM crm_inq_products JOIN crm_products ON crm_inq_products.`product_no` = crm_products.`product_no` WHERE crm_inq_products.inq_no = '".$inquiries_list['inq_no']."'")->execute()->as_array() AS $subvalue){ ?>
					<tr><td style="background: #007fff;"></td><td><?php echo $subvalue['product_name']; ?></td><td>PHP <?php echo $subvalue['price'];?></td></tr>
					<?php } ?>
					<tr><td style="background: #007fff;"></td><td style="background: #58FA58; color: #0B610B;">Total Price:</td><td style="background: #58FA58; color: #0B610B;">PHP <?php echo DB::query(DATABASE::SELECT, "SELECT SUM(crm_products.`price`) AS total_price FROM crm_inq_products JOIN crm_products ON crm_inq_products.`product_no` = crm_products.`product_no` WHERE crm_inq_products.`inq_no` = '".$inquiries_list['inq_no']."'")->execute()->as_array()[0]['total_price']; ?></td></tr>
					<tr><td style="background: #007fff;"></td><td style='background: #007fff; text-align:right;' colspan='2'><button id="btngeninqrep<?php echo $inquiries_list['inq_no'];?>" class="btnGenInqRep">Generate File Report</button></td></tr>
					</tbody>
					</table>
				</div>
				</td>
				</tr>
				<script language="javascript">
				$(document).ready(function(){
					$("#btngeninqrep<?php echo $inquiries_list['inq_no'];?>").on('click', function(){
						self.location='inquiry_report?inq_code=<?php echo $inquiries_list['inq_no'];?>';
					});

					$("#Aapprove<?php echo $inquiries_list['inq_no'];?>").on('click', function(){
						var confirm<?php echo $inquiries_list['inq_no']; ?> = confirm("Would you like to approve this inquiry?");
						if(confirm<?php echo $inquiries_list['inq_no'];?> == true){
							$.ajax({
								url: '<?php echo URL::site('crm/approve_inquiry', false, true); ?>',
								type: 'POST',
								data: {
									inquiry_code: '<?php echo $inquiries_list['inq_no']; ?>',
									<?php echo hash('sha256', 'status_inquiry'); ?>: '1'
								},
								success: function(approvalResponse){
									self.location='<?php echo URL::site('crm/inquiries_dashboard', false, true); ?>';
								}
							});
						} else {
							alert("Inquiry documents won't be approve at this time.");
						}
					});

					$("#Adeny<?php echo $inquiries_list['inq_no'];?>").on('click', function(){
						var deleteInq<?php echo $inquiries_list['inq_no']; ?> = confirm("Would you like to deny this inquiry?");
						if(deleteInq<?php echo $inquiries_list['inq_no']; ?> == true){
							$.ajax({
								url: '<?php echo URL::site('crm/deny_inquiry',null,true);?>',
								type: 'POST',
								data: { inquiry_code: '<?php echo $inquiries_list['inq_no'];?>' },
								success: function(reponseDenialOfInquiry){
									alert("This inquiry has been denied.");
									self.location = '<?php echo URL::site('crm/inquiries_dashboard', null,true);?>';
								}
							});
						} else {
							alert("This inquiry won't be deleted at this time.");
						}
					});
				});
				</script>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</br>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:100%;">
    	<h1>Approved/Denined Inquiries</h1>
    </div>
</div>
<div class="pure-g" style="text-align: left;">
	<div class="pure-u-1-3" style="text-align:center;color:#000;width: 100%;">
	<table class="InquiryDocumentsSales">
			<thead>
				<tr><th>Inquiry Code</th><th>Client</th><th>Client Type</th><th>Date Issued</th><th style="width:5%;">Status</th><th style="width:12%;">Operation</th></tr>
			</thead>
			<tbody>
				<?php foreach($approved_inquiries AS $inquiries_list){ ?>
				<tr>
				<td><?php echo $inquiries_list['inq_no']; ?></td>
				<td><?php echo ($inquiries_list['business_name'] != null) ? $inquiries_list['business_name']."(".$inquiries_list['client_name'].")":$inquiries_list['client_name']; ?></td>
				<td><?php echo $inquiries_list['type_name']; ?></td>
				<td><?php echo date_format(date_Create($inquiries_list['date_issued']),'m/d/Y');?></td>
				<?php if($inquiries_list['inq_status'] == 1){ ?>
					<td style="background: #00cc00; color: #fff;">Approved</td>
				<?php } else if($inquiries_list['inq_status'] == 2){ ?>
					<td style="background:#D90000;color:#fff;">Denied</td>
				<?php } else { ?>
					<td style="background:#D90000;color:#fff;">Pending</td>
				<?php } ?>
				<td>
				<button id="Aview<?php echo $inquiries_list['inq_no']; ?>" onClick="$('#modalmeA<?php echo $inquiries_list['inq_no'];?>').reveal();" class="view">View</button>

				<div id="modalmeA<?php echo $inquiries_list['inq_no'];?>" class="reveal-modal">
					<p class="close-reveal-modal">close[x]</p>
					<table class="InquiryDocumentsSales">
					<thead>
						<tr><th colspan='2'>Client Information</th></tr>
					</thead>
					<tbody>
						<tr><td style='text-align:left;'>Inq Code:</td><td><?php echo $inquiries_list['inq_no'];?></td></tr>
						<tr><td style='text-align:left;'>Client:</td><td><?php echo ($inquiries_list['business_name'] != null) ? $inquiries_list['business_name']."(".$inquiries_list['client_name'].")":$inquiries_list['client_name']; ?></td></tr>
						<tr><td style='text-align:left;'>Client Type:</td><td><?php echo $inquiries_list['type_name'];?></td></tr>
						<tr><td style='text-align:left;'>Status:</td>
						<?php if($inquiries_list['inq_status'] == 1){ ?>
						<td style="background: #00cc00; color: #fff;">Approved</td>
						<?php } elseif($inquiries_list['inq_status'] == 2) { ?>
						<td style="background:#D90000;color:#fff;">Denied</td>
						<?php } else { ?>
						<td style="background:#d90000;color:#fff;">Pending</td>
						<?php } ?>
						</tr>
					</tbody>
					</table>
					<table class="InquiryDocumentsSales">
					<thead><tr><th colspan='2'>Inquiry Datas</th></tr></thead>
					<tbody>
						<tr><td style='text-align:left;'>Date Issued:</td><td><?php echo date_format(date_create($inquiries_list['date_issued']), 'l, F d, Y'); ?></td></tr>
						<tr><td style='text-align:left;'>Date Approved:</td><td><?php echo ($inquiries_list['date_approved']!=null) ? date_format(date_create($inquiries_list['date_approved']), 'l, F d, Y'): "-Not yet Approved-"; ?></td></tr>
						<tr><td style='text-align:left;'>Date Denied:</td><td><?php echo ($inquiries_list['date_denied'] != null) ? date_format(date_create($inquiries_list['date_denied']), 'l, F d, Y'): '-Not denied-' ;?></td></tr>
						<tr><td style='text-align:left;'>Address:</td><td><?php echo $inquiries_list['address'];?></td></tr>
						<tr><td style='text-align:left;'>Email:</td><td><?php echo $inquiries_list['email'];?></td></tr>
						<tr><td style='text-align:left;'>Contact Informations:</td><td><?php echo $inquiries_list['mobile']; ?> / <?php echo $inquiries_list['telephone'];?></td></tr>
					</tbody>
					</table>
					<table class="InquiryDocumentsSales">
					<thead>
					<tr><th colspan='3'>Product Lists</th></tr>
					</thead>
					<tbody>
					<?php foreach(DB::query(DATABASE::SELECT, "SELECT crm_inq_products.*,crm_products.* FROM crm_inq_products JOIN crm_products ON crm_inq_products.`product_no` = crm_products.`product_no` WHERE crm_inq_products.inq_no = '".$inquiries_list['inq_no']."'")->execute()->as_array() AS $subvalue){ ?>
					<tr><td style="background: #007fff;"></td><td><?php echo $subvalue['product_name']; ?></td><td>PHP <?php echo $subvalue['price'];?></td></tr>
					<?php } ?>
					<tr><td style="background: #007fff;"></td><td style="background: #58FA58; color: #0B610B;">Total Price:</td><td style="background: #58FA58; color: #0B610B;">PHP <?php echo DB::query(DATABASE::SELECT, "SELECT SUM(crm_products.`price`) AS total_price FROM crm_inq_products JOIN crm_products ON crm_inq_products.`product_no` = crm_products.`product_no` WHERE crm_inq_products.`inq_no` = '".$inquiries_list['inq_no']."'")->execute()->as_array()[0]['total_price']; ?></td></tr>
					<tr><td style="background: #007fff;"></td><td style='background: #007fff; text-align:right;' colspan='2'><button id="btngeninqrep<?php echo $inquiries_list['inq_no'];?>" class="btnGenInqRep">Generate File Report</button></td></tr>
					</tbody>
					</table>
				</div>
				</td>
				</tr>
				<script language="javascript">
				$(document).ready(function(){
					$("#btngeninqrep<?php echo $inquiries_list['inq_no'];?>").on('click', function(){
						self.location='inquiry_report?inq_code=<?php echo $inquiries_list['inq_no'];?>';
					});

					$("#Aapprove<?php echo $inquiries_list['inq_no'];?>").on('click', function(){
						var confirm<?php echo $inquiries_list['inq_no']; ?> = confirm("Would you like to approve this inquiry?");
						if(confirm<?php echo $inquiries_list['inq_no'];?> == true){
							$.ajax({
								url: '<?php echo URL::site('crm/approve_inquiry', false, true); ?>',
								type: 'POST',
								data: {
									inquiry_code: '<?php echo $inquiries_list['inq_no']; ?>',
									<?php echo hash('sha256', 'status_inquiry'); ?>: '1'
								},
								success: function(approvalResponse){
									self.location='<?php echo URL::site('crm/inquiries_dashboard', false, true); ?>';
								}
							});
						} else {
							alert("Inquiry documents won't be approve at this time.");
						}
					});

					$("#Adeny<?php echo $inquiries_list['inq_no'];?>").on('click', function(){
						var deleteInq<?php echo $inquiries_list['inq_no']; ?> = confirm("Would you like to deny this inquiry?");
						if(deleteInq<?php echo $inquiries_list['inq_no']; ?> == true){
							$.ajax({
								url: '<?php echo URL::site('crm/deny_inquiry',null,true);?>',
								type: 'POST',
								data: { inquiry_code: '<?php echo $inquiries_list['inq_no'];?>' },
								success: function(reponseDenialOfInquiry){
									alert("This inquiry has been denied.");
									self.location = '<?php echo URL::site('crm/inquiries_dashboard', null,true);?>';
								}
							});
						} else {
							alert("This inquiry won't be deleted at this time.");
						}
					});
				});
				</script>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<div class='footer'>Copyright Teresa Marble Corporation 2013. All Rights Reserved</div>
</body>
</html>
