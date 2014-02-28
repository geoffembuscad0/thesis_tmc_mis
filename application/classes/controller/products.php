<?php
defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
class Controller_Products extends Controller {
	public $obj = array ();
	public $session = null;
	public $titlePage = "Products - Teresa Marble Corporation";
	public function __construct(Request $request, Response $response) {
		parent::__construct ( $request, $response );
		// Loading of Classes
		$this->obj ['forms'] = new Forms ();
		$this->obj ['links'] = new Links ();
		$this->obj ['messages'] = new Messages ();
		$this->obj ['webstructure'] = new Webstructure (); // Webstructure is where your front-end includes are initialized and your navigation menu
		                                                   
		// Accessing sessions
		$this->session = Session::instance ();
		
		// Loading of Models
		$this->obj ['model_crm'] = new Model_Crm ();
		$this->obj ['model_products'] = new Model_Products ();
	}
	public function action_index() {

		$homepage = View::factory ( "Website/products" );
		//Validates if survey is answered
		if($this->session->get('survey_answered') !== null){
			$this->session->delete('survey_answered');
			$this->action_close_modal();
		}
		
		// Misc. Attributes
		$homepage->fb = $this->obj ['links']->facebookPage ();
		$homepage->head = $this->obj ['webstructure']->head ( $this->titlePage );
		$homepage->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->site_navigation () );
		$homepage->inquiry_form = $this->obj ['forms']->inquiry_form ( $this->obj ['model_products']->get_simple_products () );
		// Survey Form but checks sessions first - para hnd magrepeat sa product page kada load
		
		$homepage->survey_form = ( $this->session->get ( 'survey_ask' ) == null) ? $this->obj ['forms']->product_survey_confirmation () : null;
		
		// models
		$homepage->products = $this->obj ['model_products']->get_products ();
		$homepage->simple_products = $this->obj ['model_products']->get_simple_products ();
		$homepage->color_swatches = $this->obj ['model_products']->get_color_swatches ();
		
		// Renders to homepage
		$this->response->body ( $homepage );
	}
	public function action_getscore() {
		$data = array ();
		$data['ip'] = $_SERVER['REMOTE_ADDR'];
		$data ['score'] = (Valid::numeric ( $this->request->post ( 'score' ) ) == true) ? $this->request->post ( 'score' ) : false;
		$data ['product_id'] = (Valid::numeric ( $this->request->post ( 'product_id' ) ) == true) ? $this->request->post ( 'product_id' ) : false;
		
		if ($data ['product_id'] == false) {
			echo "Invalid Product ID!";
		} else {
			if ($data ['score'] == false) {
				echo "Invalid score!";
			} else {
				$this->obj ['model_products']->set_product_score ( $data );
				echo "Thank you for rating our product";
			}
		}
	}
	public function action_product_survey($survey = 0) {

		if(!$this->request->query('survey_code')){
			echo "<script>self.location='".URL::site('products',null,true)."';</script>";
		}
		
		$homepage = View::factory ( 'WEbsite/product_survey' );
		$homepage->fb = $this->obj ['links']->facebookPage ();
		$homepage->head = $this->obj ['webstructure']->head ( $this->titlePage );
		$homepage->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->site_navigation () );
		$homepage->inquiry_modal = $this->obj ['forms']->inquiry_modal ();
		
		$this->response->body ( $homepage );
	}
	public function action_close_modal() {
		$this->session->set ( 'survey_ask', md5 ( sha1 ( $this->request->post ( 'survey_ask' ) ) ) );
	}
	public function action_submit_survey() {
		$this->obj['model_crm']->insert_feedback(array (
				'users_ip' => $_SERVER ['REMOTE_ADDR'],
				'comment' => $this->request->post ( 'comments' ),
				'no_statement' => $this->request->post ( 'reason_no' ),
				'recommendation' => $this->request->post ( 'recommend' ),
				'satisfaction' => $this->request->post ( 'satisfaction' ),
				'business_rate' => $this->request->post ( 'rate_bussiness' ),
				'order_product' => $this->request->post ( 'ordered_products' ),
				'email_feedback'=>$this->request->post('email_feedback')
		));
		$this->session->set('survey_answered', md5($_SERVER['REMOTE_ADDR'] . date('Y-m-d')));
		echo "<script>self.location = '".URL::site('products?survey_answered='.sha1('success'), null, true)."?"."';</script>";
	}
	public function action_clear_sessions(){
		
	}
	public function __destruct() {
		$this->session;
	}
}
