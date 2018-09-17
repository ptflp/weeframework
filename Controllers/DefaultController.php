<?php

namespace wee/Controllers;

use wee/base/BaseController;
use wee/Models/Model;

/**
 * Default controller
 */
class DefaultController extends BaseController
{

	public function indexAction()
	{
		$data = (new Model)->get('data');
		$this->render($data);
	}
}