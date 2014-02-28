<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Family extends Controller {

	public $obj = array();
	public $titlePage = "Teresa Marble Corporation - About Us - Family";

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		$this->obj['webstructure'] = new Webstructure; // Webstructure is where your front-end includes are initialized and your navigation menu
		$this->obj['forms'] = new Forms;
		$this->obj['links'] = new Links;
	}

	public function action_index()
	{
		$homepage = View::factory("Website/family");
		$homepage->fb			= $this->obj['links']->facebookPage();
		$homepage->head			= $this->obj['webstructure']->head($this->titlePage);
		$homepage->page_header 	= $this->obj['webstructure']->page_header($this->obj['webstructure']->site_navigation());
		$homepage->inquiry_modal = $this->obj['forms']->inquiry_modal();
		$this->response->body($homepage);
	}

}