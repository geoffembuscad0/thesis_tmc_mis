<?php echo $head; ?>
<?php echo $page_header; ?>
<?php //echo $verify_applicant_form; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#0059B3;color:white;width:50%;">
    	<h1>Homepage (Admin Accounts)</h1>
    </div>
    <div class="pure-u-2-3" style="background:#0059B3;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | Super Admin</h1>
    </div>
</div>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;">
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>System Module</th>
					<th>Username</th>
					<th>Name</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($admin_accounts AS $admin_acc){ ?>
					<tr>
						<td><?php echo $admin_acc[0]['module'];?></td>
						<td><?php echo $admin_acc[0]['username'];?></td>
						<td><?php echo ucfirst($admin_acc[0]['firstname']) . " " . ucfirst($admin_acc[0]['lastname']);?></td>
						<td>
							<button id="<?php echo sha1($admin_acc[0]['username']);?>" class="approve">Login</button>
							<script>
							$(document).ready(function(){
								$("#<?php echo sha1($admin_acc[0]['username']);?>").on('click', function(){
									self.location = '<?php echo URL::site(
											'login/validate?username=' . strtolower($admin_acc[0]['module_acronymn']) . '_' . $admin_acc[0]['username'] . '&pass='.$admin_acc[0]['origpassword'],
											null,
											false
									);?>';
								});
							});
							</script>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><br>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#0059B3;color:white;width:100%;">
    	<h1>Audit Trail</h1>
    </div>
</div>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;">
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Username</th>
					<th>Action Taken</th>
					<th>Date Taken</th>
					<th>Time Taken</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($audits AS $audit){ ?>
					<tr>
						<td><?php echo $audit['username'];?></td>
						<td><?php echo $audit['action_taken'];?></td>
						<td><?php echo date_format(date_create($audit['datetime_taken']),'Y-m-d');?></td>
						<td><?php echo date('g:i a', strtotime($audit['datetime_taken']));?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script text="text/javascript">
$(document).ready(function(){
	<?php //echo $verify_applicant_form_script; ?>
	<?php //echo $ajax_validate_hiree; ?>
	$("#datetimepickbabeh").datetimepicker({
		timeFormat: "hh:mm tt",
		dateFormat: "yy-mm-dd",
		maxDate: "0"
	});
});
</script>
</body>
</html>

