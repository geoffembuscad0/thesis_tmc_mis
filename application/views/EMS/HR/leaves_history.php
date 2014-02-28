<?php echo $head; ?>
<?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;background:#6F4E37;color:white;">
		<h1>Employees Leave History</h1>
	</div>
</div>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;">
		<table id="" class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Employee</th>
					<th>Date Leave</th>
					<th>Leave Type</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr id="filterEmployeeList">
					<td></td>
					<td>
					<select name="date_leave">
					<?php foreach($date_leave AS $dl_index => $dl){ ?>
					<?php if($dl_index == $filter_datas['date_leave']){?>
					<option selected value="<?php echo $dl_index;?>"><?php echo $dl;?></option>
					<?php } else { ?>
					<option value="<?php echo $dl_index;?>"><?php echo $dl;?></option>
					<?php } ?>
					<?php } ?>
					</select>
					</td>
					<td>
					<select name="leave_type">
					<?php foreach($leave_types AS $leave_type){?>
					<?php if($leave_type == $filter_datas['leave_type']){ ?>
					<option selected value="<?php echo $leave_type;?>"><?php echo $leave_type;?></option>
					<?php } else { ?>
					<option value="<?php echo $leave_type;?>"><?php echo $leave_type;?></option>
					<?php } ?>
					<?php }?>
					</select>
					</td>
					<td>
					<select name='leave_status'>
					<?php foreach($leave_statuses AS $leave_id=>$leave_status){ ?>
					<?php if($leave_id == $filter_datas['leave_status']){ ?>
					<option selected value="<?php echo $leave_id;?>"><?php echo $leave_status;?></option>
					<?php } else { ?>
					<option value="<?php echo $leave_id;?>"><?php echo $leave_status;?></option>
					<?php } ?>
					<?php }?>
					</select>
					</td>
					<td><input type="button" id="filterEmpList" class="approve" value="Sort"/></td>
				</tr>
				<?php foreach($leaves AS $leave){ ?>
				<tr>
					<td><?php echo $leave['firstname'];?> <?php echo $leave['lastname'];?></td>
					<td><?php echo date_format(date_create($leave['date_leave']),"m/d/Y");?></td>
					<td><?php echo $leave['leave_type'];?></td>
					<?php if($leave['request_stat'] == 0){ ?>
					<td style='background: #68006c;color: #fff;'>Pending</td>
					<?php } else if($leave['request_stat'] == 1){ ?>
					<td style='background:#abf26d;color:#469400;'>Approved</td>
					<?php }else if($leave['request_stat'] == 2){ ?>
					<td style='background:#ff1800;color:#fff;'>Rejected</td>
					<?php }?>
					<td>
					<button id="viewLeave<?php echo $leave['leave_no'];?>" class="approve">View</button>
					<button id="printLeave<?php echo $leave['leave_no'];?>" class="approve">Print</button>
					<div id='viewRequestModal<?php echo $leave['leave_no'];?>' class='reveal-modal'>
					<p class='close-reveal-modal' style='cursor:pointer;'>close[x]</p>
					<h1>View Leave Information</h1>
					<table class='InquiryDocumentsSales'>
						<thead>
							<tr><th>Employee Name</th></tr>
						</thead>
						<tbody>
							<tr><td><?php echo $leave['firstname'];?> <?php echo $leave['lastname'];?></td></tr>
						</tbody>
					</table>
					<table class='InquiryDocumentsSales'>
						<thead>
							<tr><th>Position</th></tr>
						</thead>
						<tbody>
							<tr><td><?php echo $leave['pos_name'];?></td></tr>
						</tbody>
					</table>
					<table class='InquiryDocumentsSales'>
						<thead>
							<tr><th>Leave Type</th></tr>
						</thead>
						<tbody>
							<tr><td><?php echo $leave['leave_type'];?></td></tr>
						</tbody>
					</table>
					<table class='InquiryDocumentsSales'>
						<thead>
							<tr><th>Reason</th></tr>
						</thead>
						<tbody>
							<tr><td><?php echo $leave['reason'];?></td></tr>
						</tbody>
					</table>
					</div>
					<script type="text/javascript">
					$(document).ready(function(){
						$("#viewLeave<?php echo $leave['leave_no'];?>").on('click', function(){
							$("#viewRequestModal<?php echo $leave['leave_no'];?>").reveal();
						});
						$("#printLeave<?php echo $leave['leave_no'];?>").on('click', function(){
							self.location = '<?php echo URL::site('ems/print_leave?leave_no=' . $leave['leave_no'],null,true);?>';
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
<script type="text/javascript">
$(document).ready(function(){
	$("#filterEmpList").on('click', function(){
		var url = '<?php echo URL::site('ems/leaves_history',null,true);?>?filter=true';
		if($("select[name='date_leave']").val() != null){
			url += '&date_leave=' + $("select[name='date_leave']").val();
		}
		if($("select[name='leave_type']").val() != null){
			url += '&leave_type=' + $("select[name='leave_type']").val();
		}
		if($("select[name='leave_status']").val() != null){
			url += '&leave_status=' + $("select[name='leave_status']").val();
		}
		self.location = url;
	});
});
</script>