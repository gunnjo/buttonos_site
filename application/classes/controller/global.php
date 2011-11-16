<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Global extends Controller_Template {

	public function before()
	{

		parent::before();

		// Make objects available to views
		View::bind_global('page_title', $this->page_title);
		View::bind_global('body', $this->body);
		View::bind_global('script_container', $this->script_container);

	}

}