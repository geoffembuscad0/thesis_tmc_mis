<?php echo $head; ?>
<?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Files Archives</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | General Manager</h1>
    </div>
</div>
<div class="pure-g" style="text-align: left;">
    <div class="pure-u-1-3" style="width: 100%;background:#fff;">
        <h1 style="color:#000;">Employee Archives</h1>
        <table>
            <tr>
                <th style="color:#000;">Firstname:</th>
                <td><input type="text" name="fname" value=""/></td>
                <th style="color:#000;">Middlename:</th>
                <td><input type="text" name="mname" value=""/></td>
                <th style="color:#000;">Lastname:</th>
                <td><input type="text" name="lname" value=""/></td>
            </tr>
            <tr>
                <th style="color: #000;">Employee Status:</th>
                <td>
                    <select name="act_stat">
                        <?php foreach($employee_status AS $stat_id => $stat_val){ ?>
                        <option value="<?php echo $stat_id; ?>"><?php echo $stat_val; ?></option>
                        <?php } ?>
                    </select>
                </td>
                <th style="color: #000;">Date Started Working(from):</th>
                <td><input type="text" name="date_start_from" value=""/></td>
                <th style="color:#000;">Date Started Working(to):</th>
                <td><input type="text" name="date_start_to" value=""/></td>
            </tr>
            <tr>
                <th style="color:#000;">Department:</th>
                <td><select name="dept">
                <option value=""></option>
                    <?php foreach($departments AS $dept){ ?>
                        <option value="<?php echo $dept['dept_no']; ?>"><?php echo $dept['dept_name']; ?></option>
                    <?php } ?>
                    </select></td>
                <th style="color:#000;">Marital Status:</th>
                <td>
                    <select name="m_stat">
                        <?php foreach($marital_status AS $m_id => $m_val){ ?>
                        <option value="<?php echo $m_id; ?>"><?php echo $m_val; ?></option>
                        <?php } ?>
                    </select>
                </td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="float:right;"><button name="filter">Filter</button>
                <!-- <input type="button" name="exportArchive" value="Save As Excel"/> -->
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="pure-g">
    <div class="pure-u-1-3" style="width: 100%;">
        <table id='employeeListahan' class="InquiryDocumentsSales">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Status</th>
					<th>Marital Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($employees AS $employee){ ?>
                <tr>
                    <td><?php echo $employee['employee_id']; ?></td>
                    <td><?php echo $employee['firstname']; ?> <?php echo $employee['lastname'];?></td>
                    <td><?php echo $employee['dept_name'];?></td>
                    <td><?php echo $employee['pos_name'];?></td>
                    <td><?php echo ($employee['w_status'] ==1) ? "Active" : "Resigned";?></td>
					<td><?php echo ($employee['relation_stat'] == 1) ? "Single":"Married";?></td>
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
<script>
$(document).ready(function(){
    // $("button[name='exportArchive']").on('click',function(){
    //     var url = "<?php //echo URL::site('ems/export_archives?'); ?>";
    //     var fname = $('input[name=\'fname\']').val();
    //     if(fname){
    //         url += "&firstname=" + fname;
    //     }
    //     var mname = $('input[name=\'mname\']').val();
    //     if(mname){
    //         url += "&middlename="+mname;
    //     }
    //     var lname = $('input[name=\'lname\']').val();
    //     if(lname){
    //         url += "&lastname="+lname;
    //     }
    //     var working_stat = $("input[name='stat']").val();
    //     if(working_stat){
    //         url += "&working_status="+working_stat;
    //     }
    //     var date_start_from = $("input[name='date_start_from']").val();
    //     if(date_start_from){
    //         url += "&date_start_work_from="+date_start_from;
    //     }
    //     var date_start_to = $("input[name='date_start_to']").val();
    //     if(date_start_to){
    //         url += "&date_start_work_to="+date_start_to;
    //     }
    //     var department = $("select[name='dept']").val();
    //     if(department){
    //         url += "&dept="+department;
    //     }
    //     var relation_stat = $("select[name='m_stat']").val();
    //     if(relation_stat){
    //         url += "&marital_stat="+relation_stat;
    //     }
    //     self.location = url;
    // });
	$("button[name='filter']").on('click',function(){
        var url = "<?php echo URL::site('ems/admin_archives?'); ?>";
		var fname = $('input[name=\'fname\']').val();
		if(fname){
			url += "&firstname=" + fname;
		}
		var mname = $('input[name=\'mname\']').val();
		if(mname){
			url += "&middlename="+mname;
		}
		var lname = $('input[name=\'lname\']').val();
		if(lname){
			url += "&lastname="+lname;
		}
		var working_stat = $("select[name='act_stat']").val();
		if(working_stat){
			url += "&working_status="+working_stat;
		}
		var date_start_from = $("input[name='date_start_from']").val();
		if(date_start_from){
			url += "&date_start_work_from="+date_start_from;
		}
		var date_start_to = $("input[name='date_start_to']").val();
		if(date_start_to){
			url += "&date_start_work_to="+date_start_to;
		}
		var department = $("select[name='dept']").val();
		if(department){
			url += "&dept="+department;
		}
		var relation_stat = $("select[name='m_stat']").val();
		if(relation_stat){
			url += "&marital_stat="+relation_stat;
		}
        self.location = url;
	});
	$("input[name=\"date_start_from\"]").datepicker();
	$("input[name=\"date_start_to\"]").datepicker();
	$('table#employeeListahan').each(function() {
	    var currentPage = 0;
	    var numPerPage = 50;
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
