<?php
namespace Core\Admin\Controller;

use Eva\Mvc\Controller\ActionController,
    Eva\View\Model\ViewModel;

class CoreController extends ActionController
{
	public function indexAction()
	{
        $model = new ViewModel(array(
		));
		return $model;
	}

	public function getAction()
	{
        $model = new ViewModel(array(
		));
		return $model;
	}
}