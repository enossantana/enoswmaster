<?php
class postsController extends Controller
{
	public function index()
	{
		echo 'lista das postagens';
	}

	public function ver($url, $url2 = null)
	{
		echo 'nome da notícia que veremos é '.$url.' funcionou '.$url2;
	}
}