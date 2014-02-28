<?php echo $head; ?><?php echo $page_header; ?><?php echo $add_sales_assistant_form;?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Dashboard (Sales Assistants)</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | Marketing Manager</h1>
    </div>
</div>
<!--
<div class="pure-g" style="text-align: left;">
	<div class="pure-u-1-3" style="background: #fff; color: #000; width: 100%;">
		<table class="InquiryDocumentsSales">
			<thead>
				<tr><th>Account No.</th><th>Username of Sales Assistants</th><th>Operations</th></tr>
			</thead>
			<tbody>
				<?php //foreach($sales_assistants AS $sales_assis){ ?>
				<tr>
					<td><?php //echo $sales_assis['account_id']; ?></td>
					<td><?php //echo $sales_assis['username']; ?></td>
					<td><button id="login<?php //echo $sales_assis['account_id']; ?>" class="view">Login</button>
					<button id="updatesalesassit<?php //echo $sales_assis['account_id']; ?>" onClick="$('#updateSalesAssisform<?php //echo $sales_assis['account_id']; ?>').reveal();" class="approve">Edit</button>
					<button id="deletesales<?php //echo $sales_assis['account_id']; ?>" class="deny">Delete</button>
					<div class="reveal-modal" id="updateSalesAssisform<?php //echo $sales_assis['account_id']; ?>">
					<table class="InquiryDocumentsSales">
					<?php //echo Form::open("crm/update_salesass");?>
					<thead>
						<tr><th colspan='2'>Employee Informations</th></tr>
					</thead>
					<tbody>
						<tr><td>Firstname:</td><td><?php //echo Form::input('firstname', $sales_assis['firstname'],array('style'=>'border:1px solid #fff;'));?></td></tr>
						<tr><td>Middlename:</td><td><?php //echo Form::input('middlename', $sales_assis['middlename'],array('style'=>'border:1px solid #fff;')); ?></td></tr>
						<tr><td>Lastname:</td><td><?php //echo Form::input('lastname', $sales_assis['lastname'],array('style'=>'border:1px solid #fff;')); ?></td></tr>
					</tbody>
					</table>
					<table class="InquiryDocumentsSales">
					<thead>
						<tr><th colspan='2'>Account Information</th></tr>
					</thead>
					<tbody>
						<tr><td>Email/Username:</td><td><?php //echo Form::input('email', $sales_assis['username'],array('style'=>'border:1px solid #fff;')); ?></td></tr>
						<tr><td>Password:</td><td><?php //echo Form::password('password', $sales_assis['origpassword'],array('style'=>'border:1px solid #fff;')); ?></td></tr>
						<tr><td colspan='2'><?php //echo Form::submit('updatesalesassistant', 'Update Sales Assistant'); ?></td></tr>
					</tbody>
					</table>
					<?php //echo Form::hidden('account_id', $sales_assis['account_id']);?>
					<?php //echo Form::close();?>
					</div>
					</td>
				</tr>	
				<script language="javascript">
				$(document).ready(function(){
					// Login account
					$('#login<?php //echo $sales_assis['account_id'];?>').on('click', function(){
						var login<?php //echo hash('sha256',$sales_assis['username']); ?> = confirm("Would you like to login this account?");
						if(login<?php //echo hash('sha256', $sales_assis['username']); ?> == true){
							self.location = "login_sales?sales_acc=<?php //echo $sales_assis['username'];?>";
						} else {
							alert("Login canceled.");
						}
					});
					// Delete Sales Assistant Button
					$("#deletesales<?php //echo $sales_assis['account_id']; ?>").on('click', function(){
						var del<?php //echo hash('sha256', $sales_assis['account_id']); ?> = confirm("Would you like to delete this sales assistant?");
						if(del<?php //echo hash('sha256', $sales_assis['account_id']); ?> == true){
							$.ajax({
								url: '<?php //echo URL::site("crm/delete_salesassist", null, true); ?>',
								type: 'POST',
								data: { username:'<?php //echo $sales_assis['username']; ?>' },
								success: function(responsed){
									alert("Sales Assistant has been deleted.");
									self.location = '<?php //echo URL::site("crm/admin_dashboard", null, true); ?>';
								}
							});
						} else {
							alert("Sales Assistant hasn't been deleted.");
						}
					});
				});
				</script>
				<?php //} ?>
			</tbody>
		</table>
	</div>
</div>
-->
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:100%;">
    	<h1>Survey Average Scores
    	<a class="export-button" href="<?php echo URL::site("crm/export_survey");?>">Export Survey Statistics</a></h1>
    </div>
</div>
<div class='pure-g' style="background: #ccc;">
	<div class='pure-u-1-3' style='width:50%;background:#ccc;'>
		<div id='ajaxsurveyrates'></div>
	</div>
	<div class='pure-u-1-3' style='width: 50%; background: #ccc;'>
		<div id='ajaxsurveysatisfaction'></div>
	</div>
</div>
<div class='pure-g' style="background:#ccc;">
<div class='pure-u-1-3' style='width:50%;background:#ccc;'>
	<div id='ajaxrecommends'>
	</div>
</div>
<div class='pure-u-1-3' style='width:50%;background:#ccc;'>
	<div id='ajaxorderedProducts'>
	</div>
</div>
</div><br>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:100%;">
    	<h1>Product Ratings
    	<a class="export-button" href="<?php echo URL::site("crm/export_scores");?>">Export Average Scores</a>
    	</h1>
    </div>
</div>
<div class="pure-g" style="text-align: left;">
	<div class="pure-u-1-3" style="background: #fff; color: #000; width: 100%;">
	<?php ?>
	<table id="ProduuctRatings" class="InquiryDocumentsSales">
		<thead>
			<tr>
			<th>Product Name</th>
			<th>Score</th>
			<th>User's IP Address</th>
			<th>Date & Time rate</th>
			</tr>
		</thead>
		<tbody>
		<?php if(count($product_scores) == 0){ ?>
			<tr><td colspan='4'><i>-0 Records Founded-</i></td></tr>
		<?php } else {?>
			<?php foreach($product_scores AS $scores){ ?>
			<tr>
			<td><?php echo $scores['product_name'];?></td>
			<td><?php echo $scores['score'];?></td>
			<td><?php echo $scores['ip_address'];?></td>
			<td><?php echo date_format(date_create($scores['datetime_taken']),"l, m/d/Y | H:i:s");?></td>
			</tr>
			<?php } ?>
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
<div class='footer'>Copyright Teresa Marble Corporation 2013. All Rights Reserved</div>
<script tyle="text/javascript">
$(document).ready(function(){
	<?php echo $update_sales; ?>

	$("#addsalesassistantform").on('click', function(){
		$("#adminAddSalesAssistant").reveal();
	});

	$('table#ProduuctRatings').each(function() {
	    var currentPage = 0;
	    var numPerPage = 14;
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
	
	// Admin Side of CRM - Add Sales Assistant
	$(".addSalesAssistBtn").on('click', function(){
		$.ajax({
			url: '<?php echo URL::site("crm/admin_add_sales", null, true); ?>',
			type: 'POST',
			data: { firstname: $(".salesAssistFirstname").val(), middlename: $(".salesAssistMiddlename").val(),lastname:$(".salesAssistLastname").val(),email:$(".salesAssistEmail").val() },
			success: function(response){
				$("#adminResponseOfAddingSales").html(response);
			}
		});
	});

	// Gets Survey Rates
	var businessrates = [['Answered "Excellent"', <?php echo $statistics['rate_bussiness']['five'];?>],['Answered "Great"', <?php echo $statistics['rate_bussiness']['four'];?>],['Answered "Good"', <?php echo $statistics['rate_bussiness']['three'];?>],['Answered "Poor"', <?php echo $statistics['rate_bussiness']['two'];?>],['Answered "Terrible"', <?php echo $statistics['rate_bussiness']['one'];?>]];
	var plot1 = jQuery.jqplot ('ajaxsurveyrates', [businessrates],{
		title: 'Business Services Ratings',
		seriesDefaults: {
			renderer: jQuery.jqplot.PieRenderer,
			rendererOptions: {
				showDataLabels: true
			}
	},legend: {
		show:true,
		location: 'e'
		}
	});

	// Gets Survey Satisfaction
	var satisfaction = [['Answered "Excellent"', <?php echo $statistics['rate_satisfaction']['five'];?>],['Answered "Great"', <?php echo $statistics['rate_satisfaction']['four'];?>],['Answered "Good"', <?php echo $statistics['rate_satisfaction']['three'];?>],['Answered "Poor"', <?php echo $statistics['rate_satisfaction']['two'];?>],['Answered "Terrible"', <?php echo $statistics['rate_satisfaction']['one'];?>]];
	var plot2 = jQuery.jqplot ('ajaxsurveysatisfaction', [satisfaction],{
		title: 'Customer\'s Satisfaction Ratings',
		seriesDefaults: {
			renderer: jQuery.jqplot.PieRenderer,
			rendererOptions: {
				showDataLabels: true
			}
	},legend: {
		show:true,
		location: 'e'
		}
	});

	// Gets Recommends
	var recommends = [['Answered "Yes"', 70],['Answered "No"', 30]];
	var plot3 = jQuery.jqplot ('ajaxrecommends', [recommends],{
		title: 'Customers Recommendations to Friends',
		seriesDefaults: {
			renderer: jQuery.jqplot.PieRenderer,
			rendererOptions: {
				showDataLabels: true
			}
	},legend: {
		show:true,
			location: 'e'
		}
	});

	// Gets Ordered Products
	var orderedproducts = [['Answered "Yes"', 90],['Answered "No"', 10]];
	var plot4 = jQuery.jqplot ('ajaxorderedProducts', [orderedproducts],{
		title: 'Customers who Ordered Products Before.',
		seriesDefaults: {
			renderer: jQuery.jqplot.PieRenderer,
			rendererOptions: {
				showDataLabels: true
			}
		},legend:{
			show:true,
			location: 'e'
		}
	});
});
</script>
</body>
</html>
