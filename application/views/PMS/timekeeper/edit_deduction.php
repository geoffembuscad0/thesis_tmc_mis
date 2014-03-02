<?php echo $head; ?>
<?php echo $page_header; ?>
<?php //echo $verify_applicant_form; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Deduction Table</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php //echo $account_name[0]['firstname']; ?> <?php //echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php //echo $account_name[0]['lastname'];?> | Payroll Personnel</h1>
    </div>
</div></br>
<div class="pure-g">
	<div class="pure-u-1-3" style="background: #a63800; color: #fff; width: 100%;">
	<table class="InquiryDocumentsSales">
		<thead>
			<tr><th>Pag-Ibig Fund</th></tr>
		</thead>
		<tbody>
			<tr>
				<td>PHP<?php echo $pagibig_deduction; ?></td>
			</tr>
		</tbody>
	</table>
	</div>
</div>
</br>
<div class="pure-g">
	<div class="pure-u-1-3" style="background:#a63800;color:#fff; width: 48%;margin-left:1%;margin-right:1%;">
		<h1>SSS Deduction Table</h1>
	</div>
	<div class="pure-u-1-3" style="background:#a63800;color:#fff; width: 48%;margin-left:1%;margin-right:1%;">
		<h1>PhilHealth Deduction Table</h1>
	</div>
</div>
<div class="pure-g">
	<div class="pure-u-2-3" style="width:48%;margin-left: 1%;margin-right:1%;">
		<table id="sssTable" class="InquiryDocumentsSales">
			<thead>
				<tr><th>Range</th><th>Deduction</th><th>Action</th></tr>
			</thead>
			<tbody>
			<?php foreach($sss_deductions AS $sss){ ?>
			<tr>
				<td><?php if($sss['from_range']==14750){ echo "PHP" . $sss['from_range'] . " - High"; } else { echo "PHP" . $sss['from_range'] . "-PHP" . $sss['to_range']; }?></td>
				<td>PHP<?php echo $sss['deduction_value'];?></td>
				<td><button id="editSSS<?php echo $sss['ded_no'];?>" class="approve">Edit Deduction</button>
				<div id="editSSSmodal<?php echo $sss['ded_no'];?>" class="reveal-modal" style="color:#333333;font-size:14px;background-color:#fff;">
					<p class="close-reveal-modal" style="cursor:pointer;">close[x]</p>
					<table class="InquiryDocumentsSales">
						<thead>
							<tr><th>Edit SSS Deduction</th></tr>
						</thead>
						<tbody>
							<tr>
							<td>
							<?php
							if($sss['from_range']==14750){
								echo "PHP" . $sss['from_range'] . " - High";
							} else {
								echo "PHP" . $sss['from_range'] . "-PHP" . $sss['to_range'];
							} ?>
							</td>
							</tr>
							<tr>
							<td>
							<input id="deductionSSS<?php echo $sss['ded_no'];?>" type="text" name="deduction" value="<?php echo $sss['deduction_value'];?>"/>
							</td>
							</tr>
							<tr><td><button id="saveDeductionSSS<?php echo $sss['ded_no'];?>" class="approve">Save Deduction</button></td></tr>
						</tbody>
					</table>
				</div>
				<script>
				$(document).ready(function(){
					$("#editSSS<?php echo $sss['ded_no'];?>").on('click', function(){
						$("#editSSSmodal<?php echo $sss['ded_no'];?>").reveal();
					});
					$("#saveDeductionSSS<?php echo $sss['ded_no'];?>").on('click', function(){
						$.ajax({
							url: '<?php echo URL::site('pms/save_deduction_sss', null, true);?>',
							type: 'POST',
							data: { ded_no: '<?php echo $sss['ded_no'];?>', deduction: $("#deductionSSS<?php echo $sss['ded_no'];?>").val() },
							success:function(ressponseSaveSSS){
								alert(ressponseSaveSSS);
								self.location = '<?php echo URL::site('pms/deduction_table', null, true);?>';
							}
						});
					});
				});
				</script>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="pure-u-2-3" style="width:48%;margin-left: 1%;margin-right:1%">
		<table id="philhealthTable" class="InquiryDocumentsSales">
			<thead>
				<tr><th>Range</th><th>Deduction</th><th>Action</th></tr>
			</thead>
			<tbody>
			<?php foreach($philhealth_deductions AS $ph){ ?>
			<tr>
				<td><?php
				if($ph['from_range'] <= 100){
					echo "PHP" . $ph['to_range'] . " - " . "Below";
				} elseif($ph['from_range'] == 30000){
					echo "PHP" . $ph['from_range'] . " - High";
				} else {
					echo "PHP" . $ph['from_range'] . "-PHP" . $ph['to_range'];
				} ?>
				</td>
				<td><?php echo "PHP".$ph['deduction'];?></td>
				<td><button id="philhealthEdit<?php echo $ph['ded_no'];?>" class="approve">Edit Deduction</button>
				<div id="editPHmodal<?php echo $ph['ded_no'];?>" class="reveal-modal" style="color:#333333;font-size:14px;background-color:#fff;">
					<p class="close-reveal-modal" style="cursor:pointer;">close[x]</p>
					<table class="InquiryDocumentsSales">
						<thead>
							<tr><th>Edit SSS Deduction</th></tr>
						</thead>
						<tbody>
							<tr>
							<td>
							<?php
							if($ph['from_range'] <= 100){
								echo "PHP" . $ph['to_range'] . " - " . "Below";
							} elseif($ph['from_range'] == 30000){
								echo "PHP" . $ph['from_range'] . " - High";
							} else {
								echo "PHP" . $ph['from_range'] . "-PHP" . $ph['to_range'];
							} ?>
							</td>
							</tr>
							<tr>
							<td>
							<input id="deductionPHP<?php echo $ph['ded_no'];?>" type="text" name="deduction" value="<?php echo $ph['deduction'];?>"/>
							</td>
							</tr>
							<tr class="response"></tr>
							<tr><td><button id="saveph<?php echo $ph['ded_no'];?>" class="approve">Save Deduction</button></td></tr>
						</tbody>
					</table>
				</div>
				<script>
				$(document).ready(function(){
					$("#philhealthEdit<?php echo $ph['ded_no'];?>").on('click', function(){
						$("#editPHmodal<?php echo $ph['ded_no'];?>").reveal();
					});
					$("#saveph<?php echo $ph['ded_no'];?>").on('click', function(){
						$.ajax({
							url: '<?php echo URL::site('pms/save_deduction_ph',null,true);?>',
							type: 'POST',
							data: { ded_no: '<?php echo $ph['ded_no']; ?>',deduction:$("#deductionPHP<?php echo $ph['ded_no'];?>").val() },
							success: function(responsesavePH){
								alert(responsesavePH);
								self.location = '<?php echo URL::site('pms/deduction_table',null,true);?>';
							}
						});
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
<style type='text/css'>
.pager { background: #007FFF; color: #fff; text-align: left; width: 100%; }
.pages-label { font-size: 18px; }
.page-number { cursor: pointer; font-weight: bold; padding: 10px; font-size: 18px; margin: 10px;}
</style>
<script type="text/javascript">
$(document).ready(function(){

});
</script>
