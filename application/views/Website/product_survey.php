<?php echo $head; ?><?php echo $page_header; ?><?php echo $inquiry_modal; ?>
<h1 id='' style='text-align:left'>Product Survey Form</h1>
<?php echo form::open("products/submit_survey"); ?>
<div class="pure-g" style="text-align:left;margin-bottom:1%;">
	<div class="pure-u-1-3" style="background:#f87217;width:31%;padding:1%;">
		<h1>Have you ever ordered a product from Teresa Marble Inc.?</h1>
		<h2>1. <?php echo Form::radio('ordered_products', 1); ?> Yes</h2>
		<h2>2. <?php echo Form::radio('ordered_products', 2); ?> No</h2>
	</div>
	<div id="quez2" class="pure-u-1-3" style="background:#D4a017;width:29%;padding:1%;margin:0% 1% 1% 1%;">
		<h1>Overall, how would you rate Teresa Marble Inc.?</h1>
		<h2>1. <?php echo Form::radio('rate_bussiness', 5); ?> Excellent</h2>
		<h2>2. <?php echo Form::radio('rate_bussiness', 4); ?> Great</h2>
		<h2>3. <?php echo Form::radio('rate_bussiness', 3); ?> Good</h2>
		<h2>4. <?php echo Form::radio('rate_bussiness', 2); ?> Poor</h2>
		<h2>5. <?php echo Form::radio('rate_bussiness', 1); ?> Terrible</h2>
		<!-- Excellent/Great/Good/Poor/Terrible -->
	</div>
	<div id="quez3" class="pure-u-1-3" style="background:#c68e17;width:31%;padding:1%;">
		<h1 style="text-align:right;">How satisfied are you with your service from Teresa Marble?</h1>
		<h2>1. <?php echo Form::radio('satisfaction', 5); ?> Extremely Satisfied</h2>
		<h2>2. <?php echo Form::radio('satisfaction', 4); ?> Very Satisfied</h2>
		<h2>3. <?php echo Form::radio('satisfaction', 3); ?> Neutral</h2>
		<h2>4. <?php echo Form::radio('satisfaction', 2); ?> Very Dissatisfied</h2>
		<h2>5. <?php echo Form::radio('satisfaction', 1); ?> Extremely Dissatisfied</h2>
		<!-- Extremely Satisfied/Very Satisfied/Neutral/Very Dissatisfied/Extremely Dissatisfied -->
	</div>
</div>
<div class="pure-g" style="text-align:left;">
	<div id="quez4" class="pure-u-1-3" style="background:#cd7f32;width:47%;padding:1%; margin-right:1%;">
		<h1>Would you recommend Teresa Marble to a friend?</h1>
		<h2>1. <?php echo Form::radio('recommend', 1, null, array('class' => 'yes_option')); ?> Yes</h2>
		<h2>2. <?php echo Form::radio('recommend', 2, null, array('class' => 'no_option')); ?> No</h2>
	</div>
	<div id="quez42" class="pure-u-1-3" style="background:#c88141;width:47%;padding:1%;">
		<h1>If NO. Why?</h1>
		<?php echo Form::textarea('reason_no',null,array('id'=>'reasonNo','style' => 'width:100%;border:1px solid #fff;font-size:20px;resize:none;','rows' => 3)); ?>
	</div>
</div>
<div class="pure-g" style="text-align:left;margin-top:1%;">
    <div id="quez5" class="pure-u-1-3" style="background:#8A4117;color:white;width:97%;padding:1%;height:auto;">
    	<h1 style='text-align:right'>Are there any other comments you have for Teresa Marble Inc.?</h1>
    	<?php echo Form::textarea('comments',null,array('id'=>'commentCompany','style'=>'border:1px solid #fff; width:100%; font-size: 18px; resize:none;','rows'=>'8')); ?>
    	<h1>Please enter your email address:</h1>
    	<?php echo Form::input('email_feedback',null,array('style'=>'width:100%;'));?>
    	<?php echo Form::submit('Submit', 'Submit Comment', array('class' => 'pure-button pure-button-primary', 'style' => 'float:right; margin-top: 10px;')); ?>
    	<?php // echo Form::button('Submit_Query', 'Submit Query', array('class'=>'pure-button pure-button-primary', 'style'=>'float:right; margin-top: 10px;')); ?>
    </div>
</div>
<?php echo Form::close(); ?>
<br>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#A66B24;color:white;width:31%;padding:1%;height:200px;margin-right:1%;">
    	<h1>Overview</h1>
    	<p>Today, Teresa Marble Corporation is the preeminent and acknowledged leader in the Philippine marble industry. The Rizal quarry site alone with its 7-hectare marble processing plant has an export capacity of 20,000 square meter slabs per month and 10,000 square meters of tiles per month.</p>
    </div>
    <div class="pure-u-1-3" style="background:#E19130; width:29%; height:200px;padding: 1%;">
    	<h1>Our Projects</h1>
    	<p>We have clients from Japan and United States. We also have well-known clients locally like Citibank Tower, Glorietta Mall and Cebu City Sports Club.</p>
    </div>
    <div class="pure-u-1-3" style="background:#A66B24; width:31%; padding: 1%; height:200px; margin-left: 1%; background-image:url('<?php echo URL::site('common',true,false); ?>/phone-icon-hi.png'); background-repeat:no-repeat; background-position:bottom right;">
    	<h1>Teresa Marble Corporation</h1>
    	<p>Address: 117 Shaw Boulevard, Pasig City, PH</p>
    	<p>Tel: (632) 631-9123, 631-5291</p>
    	<p>Fax: (632) 634-3342</p>
    	<p>Email: sales@teresamarble.com</p>
    	<?php echo $fb; ?>
    </div>
</div>
</div>
<div class="footer">Copyright Teresa Marble Corporation 2013. All Rights Reserved</div>
<script>
$(document).ready(function(){

	$("#quez2").hide();
	$("#quez3").hide();
	$("#quez4").hide();
	$("#quez42").hide();
	$("#quez5").hide();

	$('input[name="ordered_products"]').click(function(){
		$("#quez2").slideDown();
	});
	$('input[name="rate_bussiness"]').click(function(){
		$("#quez3").slideDown();
	});
	$('input[name="satisfaction"]').click(function(){
		$("#quez4").slideDown();
	});
	$('.yes_option').click(function(){
		$("#quez42").fadeOut();
		$("#quez5").slideDown();
	});
	$(".no_option").click(function(){
		$("#quez42").slideDown();
		$("#quez5").slideDown();
	});
	
	$("#reasonNo").focus(function(){
		$(this).css({'background':'#ffff73','border':'1px solid #ffff73','box-shadow':'0px 0px 8px #d9d900'});
	});

	$("#commentCompany").focus(function(){
		$(this).css({'background':'#ffff73','border':'1px solid #ffff73','box-shadow':'0px 0px 8px #d9d900'});
	});
});
</script>
</body>
</html>