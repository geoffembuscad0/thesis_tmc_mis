<?php echo $head; ?>
<?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Request Leaves</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | General Manager</h1>
    </div>
</div>
<div class="pure-g">
	<div class="pure-u-1-3" style="width: 100%;">
		<table id="leaveListahan" class='InquiryDocumentsSales'>
			<thead>
				<tr>
					<th>Employee</th>
					<th>Date Leave</th>
					<th>No of Days</th>
					<th>Leave Type</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($leaves AS $leave){ ?>
				<tr>
					<td><?php echo $leave['firstname']; ?> <?php echo $leave['lastname'];?></td>
					<td><?php echo date_format(date_create($leave['date_leave']), "m/d/Y");?></td>
					<td><?php echo $leave['no_of_days'];?></td>
					<td><?php echo $leave['leave_type'];?></td>
					<?php if($leave['request_stat'] == 0){ ?>
					<td style='background: #68006c;color: #fff;'>Pending</td>
					<?php } else if($leave['request_stat'] == 1){ ?>
					<td style='background:#abf26d;color:#469400;'>Approved</td>
					<?php }else if($leave['request_stat'] == 2){ ?>
					<td style='background:#ff1800;color:#fff;'>Rejected</td>
					<?php }?>
					<td>
					<button id="approveLeave<?php echo $leave['leave_no'];?>" class="approve">Approve</button>
					<button id="rejectLeave<?php echo $leave['leave_no'];?>" class="deny">Reject</button>
					<script>
					$(document).ready(function(){
						$("#approveLeave<?php echo $leave['leave_no'];?>").on('click',function(){
							$.ajax({
								url:'<?php echo URL::site('ems/approve_leave',null,false);?>',
								type: 'POST',
								data: { leave_no: '<?php echo $leave['leave_no'];?>'},
								success: function(){
									alert('Leave has been approved.');
									self.location = '<?php echo URL::site('ems/admin_leave_request', null, false);?>';
								}
							});
						});
						$("#rejectLeave<?php echo $leave['leave_no'];?>").on('click', function(){
							$.ajax({
								url: '<?php echo URL::site('ems/deny_leave', null,false);?>',
								type:'POST',
								data: { leave_no: '<?php echo $leave['leave_no'];?>'},
								success: function(){
									alert('Leave has been rejected.');
									self.location = '<?php echo URL::site('ems/admin_leave_request', null,false);?>';
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
	$('table#leaveListahan').each(function() {
	    var currentPage = 0;
	    var numPerPage = 100;
	    var $table = $(this);
	    $table.bind('repaginate', function() {
	        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
	    });
	    $table.trigger('repaginate');
	    var numRows = $table.find('tbody tr').length;
	    var numPages = Math.ceil(numRows / numPerPage);
	    var $pager = $('<div class="pager"><font size=\'4px\'>Pages:</font></div>');
	    for (var page = 0; page < numPages; page++) {
	        $('<span class="page-number"></span>').text(page + 1).bind('click', {
	            newPage: page
	        }, function(event) {
	            currentPage = event.data['newPage'];
	            $table.trigger('repaginate');
	            $(this).addClass('active').siblings().removeClass('active');
	        }).appendTo($pager).addClass('clickable');
	    }
	    $pager.insertBefore($table).find('span.page-number:first').addClass('active');
	});
});
</script>