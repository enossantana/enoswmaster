<?php
class homeController extends Controller
{
	public function index()
	{
		//$mvc = new Mvc;
		//$dados['mvc'] = $mvc->getMvc();

		$this->loadTemplate('home', $dados);
	}

	public function sobre()
	{
		$this->loadTemplate('sobre');
	}
}