<?php echo $head; ?><?php echo $page_header; ?><?php //echo $inquiry_modal; ?>
<?php ?>
<div class="pure-g">
	<div class="pure-u-1-3" style="width: 100%">
	</div>
</div>
<div class="pure-g">
	<div class="pure-u-1-3" style="width: 100%;">
	<?php echo Form::open("ems/validate_applicant",array('enctype' => 'multipart/form-data')); ?>
	<table id="careerApplicantForm">
	<thead>
	<tr><th colspan="6">Applicant Form</th></tr>
	</thead>
	<tbody>
		<tr><td class="label" style="text-align:center;" colspan='6'><p>Fields with (<font color='red'>*</font>) are <b>required fields</b>.</p></td></tr>
		<?php echo $applicant_response; //Session::instance()->delete('applicant_msg'); ?>

		<tr>
		<td class="label">Firstname<font color='red'>*</font>:</td>
		<td class="input"><?php echo Form::input("Firstname",null, array("class"=>"applicant_input", "placeholder"=>"Firstname")); ?></td>
		<td class="label">Middlename<font color='red'>*</font>:</td>
		<td class="input"><?php echo Form::input('Middlename',null, array("class"=>"applicant_input", "placeholder"=>"Middlename")); ?></td>
		<td class="label">Lastname<font color='red'>*</font>:</td>
		<td  class="input">
		<?php echo Form::input('Lastname',null,array("class"=>"applicant_input", "placeholder"=>"Lastname")); ?>
		</td>
		</tr>
		
		<tr>
		<td class="label">Address<font color='red'>*</font>:</td>
		<td class="input" colspan="5"><?php echo Form::input("address",null,array("class"=>"applicant_input","style"=>"width: 98%;","placeholder"=>"Street No., street name, community name, city")); ?></td>
		</tr>
		
		<tr>
		<td class="label">Contact No.<font color='red'>*</font>:</td>
		<td class="input"><?php echo Form::input('mobile_contact',null,array("class"=>"applicant_input","placeholder"=>"11 Digit only","maxlength"=>"11")); ?></td>
		<td class="label">Marital Status<font color='red'>*</font>:</td>
		<td class="input" colspan="3">
		<?php foreach($marital_statuses AS $stat => $martial_stat){ ?>
		<?php echo Form::radio('marital_status', $stat) . ":" . ucfirst($martial_stat) . " "; ?>
		<?php } ?>
		</td>
		</tr>
		
		<tr>
		<td class="label">Email<font color='red'>*</font>:</td>
		<td class="input"><?php echo Form::input('Email',null,array("class"=>"applicant_input","placeholder"=>"Email")); ?></td>
		<td class="label">Best Time to reach you<font color='red'>*</font>:</td>
		<td class="input" colspan="3"><?php echo Form::radio('time_reach','morning');?>Morning 
		<?php echo Form::radio('time_reach', 'afternoon'); ?>Afternoon
		</td>
		</tr>
		
		<tr>
		<td class="label" colspan="2">Position Applying For<font color='red'>*</font>:</td>
		<td class="input" colspan="4"><?php echo Form::input('position',null,array("class"=>"applicant_input","style"=>"width:98%;","placeholder"=>"Eg. Clerk, Accounting Assitant, etc."));?></td>
		</tr>
		
		<tr>
		<td class="label" colspan="2">Available Start Date<font color='red'>*</font>:</td>
		<td class="input" colspan="4"><?php echo Form::input('datestart',null,array("id"=>"datestart","class"=>"applicant_input", "placeholder"=>"YYYY-MM-DD")); ?></td>
		</tr>
		
		<tr>
		<td colspan="3" class="label">Upload Your Resume<font color='red'>*</font>:</td>
		<td colspan="3" class="input"><?php echo Form::file('resume'); ?></td>
		</tr>
		
		<tr>
		<td class="label" colspan="6" style="text-align:center;">
		<?php echo Form::submit('submitApplicant','Submit Applicant',array("class='submitbtn'")); ?>
		<input class="submitbtn" type="reset" value="Reset"/>
		</td>
		</tr>
	</tbody>
	</table>
	<?php echo Form::close(); ?>
	</div>
</div>
<br><div class="footer">Copyright Teresa Marble Corporation 2013. All Rights Reserved</div>
</div>
<script>
$(document).ready(function(){
	$("#datestart").datepicker({
		dateFormat:'yy-mm-dd',
		minDate: 0
	});
});
</script>
</body>
</html>

