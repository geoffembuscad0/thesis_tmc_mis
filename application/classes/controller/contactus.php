<?php
defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
class Controller_Contactus extends Controller {
	public $obj = array ();
	public $titlePage = "Contact Us - Teresa Marble Corporation";
	public function __construct(Request $request, Response $response) {
		parent::__construct ( $request, $response );
		$this->obj ['forms'] = new Forms ();
		$this->obj ['links'] = new Links ();
		$this->obj ['webstructure'] = new Webstructure (); // Webstructure is where your front-end includes are initialized and your navigation menu
	}
	public function action_index() {
		$homepage = View::factory ( "Website/contactus" );
		$homepage->fb = $this->obj['links']->facebookPage ();
		$homepage->head = $this->obj['webstructure']->head ( $this->titlePage );
		$homepage->page_header = $this->obj['webstructure']->page_header ( $this->obj ['webstructure']->site_navigation () );
		$homepage->inquiry_modal = $this->obj['forms']->inquiry_modal();		
		$this->response->body ( $homepage );
	}
}
