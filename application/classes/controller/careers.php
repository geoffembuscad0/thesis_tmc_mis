<?php
class Controller_Careers extends Controller {
	public $obj = array ();
	public $titlePage = "Careers - Teresa Marble Corporation";
	public function __construct(Request $request, Response $response) {
		parent::__construct ( $request, $response );
		$this->obj ['webstructure'] = new Webstructure (); // Webstructure is where your front-end includes are initialized and your navigation menu
	}
	public function action_index() {
		$homepage = View::factory ( "Website/careers" );
		$homepage->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->site_navigation () );
		$homepage->head = $this->obj ['webstructure']->head ( $this->titlePage );
		
		// Applicants Form validation Messages
		$homepage->applicant_response = Session::instance()->get('applicant_msg');
		$homepage->marital_statuses = array(1=>"Single",2=>"Married");
		
		Session::instance()->delete('applicant_msg');
		$this->response->body ( $homepage );
	}
}
