<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Global extends Controller_Template {

	public function before()
	{

		$this->uid = Boscookie::getnodeid();
		$this->template = $this->uid === NULL ? 'template' : 'starttemplate';
		$this->script_container = array(
			HTML::script("media/js/jquery-1.6.4.min.js"),
			HTML::script("media/js/jquery.coda-slider-2.0.js"),
			HTML::script("media/js/jquery.easing.1.3.js"),
			HTML::script("media/js/external_links.js"),
			HTML::script("media/js/nivo.js"),
			HTML::script("media/js/cufon.js"),
			HTML::script("media/js/enigmatic.cufonfonts.js"),
			HTML::script("media/js/scripts.js"),
			HTML::script ("media/js/cloudmenu.js")
		);
			
		parent::before();

		// Make objects available to views
		View::bind_global('page_title', $this->page_title);
		View::bind_global('body', $this->body);
		View::bind_global('script_container', $this->script_container);

	}

}
