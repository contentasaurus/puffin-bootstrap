<?php

use \puffin\view as view;

class theme extends  puffin\controller\plugin
{
	public function __init()
	{
		view::add_css('/stylesheets/style.css');
		view::add_js('/javascripts/head.js');
		view::add_js('/javascripts/body.js', $nonblocking = true);
	}
	public function __before_call()
	{
		return false;
	}
	public function __after_call()
	{
		return false;
	}
}
