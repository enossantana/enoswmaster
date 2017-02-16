<?php
class Core
{
 	public function run()
 	{
 		//$url = substr($_SERVER['PHP_SELF'], 14);
 		$url = '/'.((isset($_GET['q'])) ? $_GET['q'] : '');
 		

		$params = array();

 		if(!empty($url) && $url != '/')
 		{
 			$url = explode('/', $url);
 			array_shift($url);
 			/*if (end($url) == ''){
 				array_pop($url);
 			}*/
 			
 			$currentController = $url[0].'Controller';
 			array_shift($url);

 			if(isset($url[0]) && !empty($url[0]))
			{
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0){
				$params = $url;
			}

 		} else{
 			$currentController = 'homeController';
 			$currentAction = 'index';
 		}

 		require_once 'core/Controller.php';

 		$c = new $currentController();
 		//$c->$currentAction();
 		call_user_func_array(array($c,$currentAction), $params);

 	}
}