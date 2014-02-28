<?php echo $head; ?><?php echo $page_header; ?><?php echo $inquiry_form; ?><?php echo $survey_form; ?>
<h1 id='' style='text-align:left'>Products</h1>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="margin: 0px auto; background:#996633; width:98%; padding: 1% 1% 10% 1%; height:auto; background-repeat:no-repeat; background-position:bottom right;">
    	<!-- Panel Form -->
    	<div class='pure-g'>
    		<div class='pure-u-1-3'><h1>Products List</h1></div>
    		<div class='pure-u-1-3'></div>
    		<div class='pure-u-1-3' style='text-align: right;'><input type='button' id='showinqform' class='pure-button pure-button-primary' name='inquireBtn' value='Inquiry Form'/></div>
    	</div>
    	<!--  Product List -->
    	<div id='productsListahan' class='pajinateDiv' style='margin: 5px;'>
    		<div class='page_navigation' style='float:right'></div><br>
    		<!-- Rating message -->
    		<div class='messageKo' style='margin-top: 10px;' onclick="$(this).hide(1200);"></div>
    		<!-- Page contents -->
    		<ul class='content'>
    			<!-- Products List in Looping -->
    			<?php foreach($products AS $p){ ?>
	    			<li style='min-height: 140px;'>
	    			<div class='productData'>
	    			<div class='productImage' style='float:left;'><img src='<?php echo URL::site('assets/products',true,false)."/".$p['filename']; ?>' style='' alt='product'/></div>
	    			<div id='productScore<?php echo $p['product_no']; ?>' class='productDetails' style='float:right; text-align: right;'><h1><?php echo $p['product_name']; ?></h1><p class='productDesc'><?php echo $p['description']; ?></p><br>
	    			<!-- GETS Product's overall score (Nested Loop per Loop of products) -->
	    			<?php foreach($p['scores'] AS $score){ ?>
		    			<div class='rateit' data-productno='<?php echo $p['product_no']; ?>' data-rateit-value='<?php echo $score['overall']; ?>'>
		    			</div>
		    			<b class='boldRate'><?php echo (isset($score['overall'])) ? $score['overall'] : 0; ?>/5</b>
	    			<?php } ?>
	    			<!-- END -->
	    			</div></div></li>
					<script language='javascript'>
					// Client Side Script for submition of product rate
					$("#productScore<?php echo $p['product_no'];?> .rateit").bind('rated reset', function(e){
						var ri = $(this);
						var inputScore = ri.rateit('value');
						var productId = ri.data('productno');
						ri.rateit('readonly', true);
						$.ajax({
							url: 'products/getscore',
							type: 'POST',
							data: {score:inputScore, product_id:productId},
							success: function(data){
								$('.messageKo').html("<h1>" + data + "</h1>");
								$('.messageKo').css({ 'width':'100%', 'background-color':'#66cc66', 'border':'1px solid #003300', 'color':'#006600' });
								$('.messageKo').hide();
								$('.messageKo').slideDown(1000);
								$(this).hide().fadeIn('fast');
								$('.boldRate').hide().fadeIn('fast');
								// gets web viewers email address
								var email_feedback = prompt('Please enter your email address.');
								if(email_feedback != null){
									$.ajax({
										url: '<?php echo URL::site('crm/fetch_email',null,true);?>',
										type: 'POST',
										data: { email_rater: email_feedback },
										success: function(responseEmailRater){
											
										}
									});
								}
								self.location = '<?php echo URL::site('products',null,true); ?>';
							}
						});
					});
					// END
					</script>
				<?php } ?>
    		</ul>
    	</div>
    	<!-- END of Product List -->
    </div>
</div>
<br>
<!-- <div class='pure-g' style='text-align: left;'>
	<div class='pure-u-1-3' style='background: #7F462C; width: 99%; text-align: center;'>
		<h1>Color Swatches</h1>
		<ul class="bxslider">
			<?php // foreach($color_swatches AS $cs){ echo "<li><img src='".URL::site("assets/products", true, false)."/".$cs['filename']."' title='".$cs['primary_name']."'/></li>"; }?>
		</ul>
	</div>
</div><br> -->
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#A66B24;color:white;width:31%;padding:1%;height:200px;margin-right:1%;">
    	<h1>Overview</h1>
    	<p>Today, Teresa Marble Corporation is the preeminent and acknowledged leader in the Philippine marble industry. The Rizal quarry site alone with its 7-hectare marble processing plant has an export capacity of 20,000 square meter slabs per month and 10,000 square meters of tiles per month.</p>
    </div>
    <div class="pure-u-1-3" style="background:#E19130; width:29%; height:200px;padding: 1%;">
    	<h1>Our Projects</h1>
    	<p>We have clients from Japan and United States. We also have well-known clients locally like Citibank Tower, Glorietta Mall and Cebu City Sports Club.</p>
    </div>
    <div class="pure-u-1-3" style="background:#A66B24; width:31%; padding: 1%; height:200px; margin-left: 1%; background-image:url('<?php echo URL::site('assets',true,false); ?>/phone-icon-hi.png'); background-repeat:no-repeat; background-position:bottom right;">
    	<h1>Teresa Marble Corporation</h1>
    	<p>Address: 117 Shaw Boulevard, Pasig City, PH</p>
    	<p>Tel: (632) 631-9123, 631-5291</p>
    	<p>Fax: (632) 634-3342</p>
    	<p>Email: sales@teresamarble.com</p>
    	<?php echo $fb; ?>
    </div>
</div>
<div>
</div>
<div class="footer">Copyright Teresa Marble Corporation 2013. All Rights Reserved</div>
<script language='javascript'>
				window.onload = executeExit;
				function executeExit(){
					$.ajax({
						url: '<?php echo URL::base((isset($_SERVER['HTTPS'])) ? 'https' : 'http', true); ?>products/clear_sessions',
						type: 'POST',
						data: { exit_code: '1' },
						success: function(ResponseFromClear){
							
						}
					});
				}
</script>
<script language='javascript'>
	$(document).ready(function(){
		// Product Survey confirmation
		$('#productSurveyForm').reveal({animation: 'fadeAndPop'});
		$('#closeProductSurvey').on('click',function(){
			$.ajax({
				url: '<?php echo URL::site('products/close_modal',null, true); ?>',
				type: 'POST',
				data: { 'survey_ask': '<?php echo hash('SHA256', date('Y-m-d'));?>' },
				success: function(IqnoreResponse){
					
				}
			});
		});
		
		// Inquiry form is hidden
		$('#showinqForm').hide();

		// Inquiry form of business requirement is hidden when modal is loaded
		$(".validationInquiryDocumentsResponse").hide();

		// Inquiry product
		var productInquiry = <?php echo json_encode($simple_products); ?>;
		var options = '';
		for(var count = 0;count < productInquiry.length ; count++){
			options = options + '<option value="' + productInquiry[count]['product_name'] + ' - PHP ' + productInquiry[count]['price'] + '">' + productInquiry[count]['product_name'] + ' - PHP ' + productInquiry[count]['price'] + '</option>';
		}
		
		// If clicks to add another product
		$('.buttonAddProduct').on('click', function(){
			var unqid = makeid();
			$('.productsInquiry').append('<div class="' + unqid + '"><select name="products_inquiry[]" style="border: 1px #ffffff;">' + options + '</select><input type="text" style="width:25px;" name="quantity" value=""/><input class="buttonAddProduct" type="button" name="inqCancel" value="Cancel" onclick="$(\'.' + unqid + '\').remove();"/><br></div>');
		});

		// AJAX Validation of Inquiry Form
		$(".validationInquiryResponse").hide();

		// Type on consumer verification
		$('input:radio[class="clientBusiness"]').change(function(){
			if ($(this).is(':checked')) {
				client_type = "Business";
				$(".businessReq").fadeIn();
			}
		});
		$('input:radio[class="clientConsumer"]').change(function(){
			if ($(this).is(':checked')){
				client_type = "Consumer";
				$(".businessReq").fadeOut();
			}
		});
		
		$("input[name='submitInqForm']").on('click', function(){
			var products_inquiry = [];
			var fetch_products = $("select[name='products_inquiry[]']");
			$.each(fetch_products, function(key, object){
				products_inquiry[key] = object.value;
			});
			
			// Past Client Information via AJAX
			$.ajax({
				url: '<?php echo URL::site('crm/validate_inquiry',null,true);?>',
				type: 'POST',
				data: {
					'firstname':$("input[name='clientFirstname']").val(),
					'middlename':$("input[name='clientMiddlename']").val(),
					'businessName':$('input[name="businessName"]').val(),
					'lastname':$("input[name='clientLastname']").val(),
					'client_type':client_type,
					'address':$("input[name='clientAddress']").val(),
					'email':$("input[name='clientEmail']").val(), 
					'celphone':String($("input[name='celphone']").val()),
					'telphone':$("input[name='telphone']").val(),
					'inquiry_code': $("input[name='<?php echo hash('gost', 'inquiry_code');?>']").val(),
					'products_inqu': products_inquiry.toString()
				},
				success: function(HTTPresponse){
					$(".validationInquiryDocumentsResponse").show();
					$(".validationInquiryDocumentsResponse").html(HTTPresponse);
				}
			});
		});
	});
</script>
</body>
</html>