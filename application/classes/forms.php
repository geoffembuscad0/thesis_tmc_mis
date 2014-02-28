<?php
class Forms {
	public function product_survey_confirmation(){
		return "<div id='productSurveyForm' class='reveal-modal' style='font-size: 16px;color:#000;'>
				<h2>Would you like to take our survey regarding our products?</h2>
				<a class='pure-button pure-button-primary' href='".URL::site()."products/product_survey?survey_code=".sha1('survey')."'>Yes</a>
				<p id='closeProductSurvey' class='close-reveal-modal' style='cursor:pointer;'>close[x]</p></div>";
	}
	public function inquiry_modal(){
		return "<div id='inquiryForm' class='reveal-modal' style='font-size: 16px;'>
				<h1 style='color:#000000;font-size:32px;'>Confirmation</h1>
				<center>
				<p style='color:#6e6e6e'>Would you like to proceed to the product page to make inquiries?</p>
				<a href='".url::site('products', true, false)."' class='pure-button pure-button-primary'>Yes</a>
				<p class='close-reveal-modal' style='cursor:pointer;'>close X</p>
				</center></div>";
	}
	public function inquiry_form($products = array()){
		$html = null;
		$html .= "<div id='inquiryForm' class='reveal-modal' style='margin-left: -488px; width:886px;font-size: 14px;color: #000000; border-radius: 0px;'>";
		$html .= "<h1 style='color: #000000;'>Inquiry Form</h1>";
		$html .= "<form>";
		$html .= Form::hidden(hash('gost', 'inquiry_code'), $this->generate_random(12));
		$html .= "<table>";
		$html .= "<caption>Fields with (<font color='red'>*</font>) are required field.</caption>";
		$html .= "<tr>";
		$html .= "<th>Type of Client<font color='red'>*</font></th>";
		$html .= "<th colspan='5'>1.)".Form::radio('clienttype', 1, false, array('class'=>'clientBusiness'))."Company ";
		$html .= "2.) ".Form::radio('clienttype', 2 ,null,array('class'=>'clientConsumer'))."Consumer</th></tr>";
		$html .= "<tr class='businessReq'><td colspan='2'>Business Name<font color='red'>*</font>:</td><td colspan='4' style='background: #ffffff;'>".Form::input('businessName', null, array('class'=>'textfield','maxlength'=>'50','style'=>'width:100%'))."</td></tr>";
		$html .= "<tr>";
		$html .= "<td>Firstname:<font color='red'>*</font></td><td style='background:#ffffff;'>".Form::input('clientFirstname',null,array('class'=>'textfield','placeholder'=>'Firstname here','maxlength'=>'50'))."</td>";
		$html .= "<td>Middlename:</td><td style='background:#ffffff;'>".Form::input('clientMiddlename', null, array('class'=>'textfield','placeholder'=>'Middlename here','maxlength'=>'50'))."</td>";
		$html .= "<td>Lastname:<font color='red'>*</font></td><td style='background:#ffffff;'>".Form::input('clientLastname', null, array('class'=>'textfield','placeholder'=>'Lastname here (suffix)','maxlength'=>'50'))."</td>";
		$html .= "</tr>";
		$html .= "<tr>";
		$html .= "<td>Address:<font color='red'>*</font></td><td colspan='3' style='background:#ffffff;'>".Form::input('clientAddress', null, array('class'=>'textfield', 'style'=>'width: 100%', 'placeholder'=>'Block no., Street name, City name', 'maxlength'=>'75'))."</td>";
		$html .= "<td>Email:<font color='red'>*</font></td><td style='background: #ffffff'>".Form::input('clientEmail', null, array('class'=>'textfield', 'Email Address here','maxlength'=>'75'))."</td>";
		$html .= "</tr>";
		$html .= "<tr>";
		$html .= "<td>Mobile Number:<font color='red'>*</font></td><td colspan='2' style='background:#ffffff;'>".Form::input('celphone',null,array('class'=>'textfield','style'=>'width:100%', 'maxlength' => '11','placeholder'=>'11 Digit format (09xxxxxxxxx)'))."</td>";
		$html .= "<td>Telephone Number:<font color='red'>*</font></td><td colspan='3' style='background:#ffffff;'>".Form::input('telphone', null, array('class'=>'textfield','style'=>'width:100%', 'maxlength'=>'7','placeholder'=>'7 Digit Format (no dash sign)'))."</td>";
		$html .= "</tr>";
		$html .= "<tr><td>Products to Inquire:<font color='red'>*</font></td><td style='background: #ffffff;' colspan='5'>";
		$html .= "<div class='productsInquiry'>";
		// Importante ito!
		$html .= "<select name='products_inquiry[]' style='border: 1px #ffffff;'>";
		for($count = 0; $count < count($products); $count++){
			$html .= "<option value='".$products[$count]['product_name']." - PHP ".$products[$count]['price']."'>".$products[$count]['product_name']." - PHP ".$products[$count]['price']."</option>";
		}
		$html .= "</select>";
		$html .= " Quantity.:" . Form::input('quantity_product',null,array("style"=>"width: 25px;"));
		$html .= "<span class='dedicate'></span>";
		$html .= "<input class='buttonAddProduct' type='button' name='Add' value='Add Another'/>";
		$html .= "</div></td></tr>";
		$html .= "<tr class='validationInquiryDocumentsResponse'></tr>";
		$html .= "<tr>";
		$html .= "<td style='text-align: right' colspan='6'><input type='button' name='submitInqForm' class='buttonForm' value='Submit'/> <input class='buttonForm' type='reset' name='reset' value='Reset'/></td>";
		$html .= "</tr>";
		$html .= "</table></form>";
		$html .= "<p style='cursor: pointer; color: #999999;' class='close-reveal-modal'>close[x]</p>";
		$html .= "</div>";
		return $html;
	}
	public function admin_add_sales_assistant(){
		$html = null;
		$html .= "<div id='adminAddSalesAssistant' class='reveal-modal' style='color:#000;'>";
		//$html .= "<h1>Add Sales Assistant</h1>";
		$html .= "<h2>";
		$html .= "<table>";
		$html .= "<thead><tr><th colspan='2'>Add Sales Assistant</th></tr></thead>";
		$html .= "<tbody>";
		$html .= "<tr><td class='label'>Firstname:</td><td style='background: #fff;'>".Form::input('fname', null, array("style='width: 100%; border: 1px solid #fff;'", "class='salesAssistFirstname'", "placeholder='Firstname'"))."</td></tr>";
		$html .= "<tr><td class='label'>Middlename:</td><td>".Form::input('mname', null, array("style='width: 100%; border: 1px solid #fff;'", "class='salesAssistMiddlename'", "placeholder = 'Middlename'"))."</td></tr>";
		$html .= "<tr><td class='label'>Lastname:</td><td>".Form::input('lastname', null, array("style='width: 100%; border: 1px solid #fff;'", "class='salesAssistLastname'", "placeholder='Lastname'"))."</td></tr>";
		$html .= "<tr><td class='label'>Email:</td><td>".Form::input('Email', null, array("style='width: 100%; border: 1px solid #fff;'", "class='salesAssistEmail'", "placeholder='Email'"))."</td></tr>";
		$html .= "<tr><td colspan='2' align='right'><input type='button' class='addSalesAssistBtn' value='Add Sales Assistant'/></td></tr>";
		$html .= "</tbody>";
		$html .= "</table>";
		$html .= "<div id='adminResponseOfAddingSales' style='color:#000;'></div>";
		$html .= "</h2>";
		$html .= "<p style='cursor: pointer; color: #999;' class='close-reveal-modal'>close[x]</p>";
		$html .= "</div>";
		return $html;
	}
	// Misc function
	public function generate_random($length = 0){
		// Embuscado customized function for the ID generation
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string = '';
		for ($i = 0; $i < $length; $i++) {
			$string .= $characters[mt_rand(0, strlen($characters) - 1)];
		}
		return $string;
	}
}

