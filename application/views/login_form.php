<?php echo $head; ?><?php echo $page_header; ?>
<div class='login-form'>
<h1 style="font-size: 58px;">Login</h1><br><br>
<?php echo Form::open(URL::site("login/validate", true, true)); ?>
<h2 style='text-align:left;'>Email / Username:</h2><h1><?php echo Form::input('tmc_username', null, array('placeholder' => 'Prefix_Email/Username','class'=>'login-textfield')); ?></h1>
<h2 style='text-align: left;'>Password:</h2><h1><?php echo form::password('tmc_password', null, array('placeholder' => 'Password','class'=>'login-textfield'));?>
</h1>
<h1><?php echo Form::submit('loginBtn', 'Login', array('class'=>'login-button'))?></h1>
<?php echo form::close(); ?>
<?php echo $message_login; ?>
</script>
</div><div class="footer">Copyright Teresa Marble Corporation 2013. All Rights Reserved</div>
</div>
<script>
// Geoffrey Updated Nov 21
$(document).ready(function(){

	$("#inquiryList").hide();
});
</script>