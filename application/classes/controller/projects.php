<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Projects extends Controller
{
	public $obj = array();
	public $titlePage = "PROJECTS - Teresa Marble Corporation";

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		$this->obj['webstructure'] = new Webstructure; // Webstructure is where your front-end includes are initialized and your navigation menu
		$this->obj['messages'] = new Messages;
		$this->obj['forms'] = new Forms;
		$this->obj['links'] = new Links;
	
	}

	public function action_index()
	{
		$homepage = View::factory("Website/projects");
		$homepage->page_header 	= $this->obj['webstructure']->page_header($this->obj['webstructure']->site_navigation());
		$homepage->head			= $this->obj['webstructure']->head($this->titlePage);
//		$homepage->pageNotAvail = $this->obj['messages']->under_maintenance();
		$homepage->inquiry_modal = $this->obj['forms']->inquiry_modal();
		$this->response->body($homepage);
	}

}
