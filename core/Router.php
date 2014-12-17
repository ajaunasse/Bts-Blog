<?php

class Router 
{

	static $routes = array() ;
	static $prefixes = array() ;

	static function prefix($url, $prefix)
	{
		self::$prefixes[$url] = $prefix ;
	}


	/**
	*Permet de parser une url
	*@param $url Url à parser
	*@return tableau contenant les paramètres
	*/

	static function parse($url, $request)
	{
		$url=trim($url, '/') ;						//Enlève les '/' en début et fin de l'url
		if(empty($url))
		{
			$url=Router::$routes[0]['url'];
		}
		else
		{
			$match = false ;
			foreach (Router::$routes as $v)
		 	{
				if(!$match && preg_match($v['redirreg'], $url, $match))
				{
					$url = $v['origin'] ;
					foreach ($match as $k => $v) 
					{
						$url = str_replace(':'.$k.':',$v,$url) ;
					}
					$match = true ;
		
				}
			}
		}
		
		$params=explode('/', $url) ;	

		if(in_array($params[0], array_keys(self::$prefixes)))	
		{
			$request->prefix = self::$prefixes[$params[0]] ;
			array_shift($params) ;
		}	
		$request->controller=$params[0] ;			//Premier élément de l'url est le controller
		$request->action=isset($params[1]) ? $params[1] : 'index'; //deuxième élément de l'url est l'action
		foreach (self::$prefixes as $k => $v)
		{
			if(strpos($request->action, $v.'_') ===0)
			{
				$request->prefix = $v ;
				$request->action = str_replace($v.'_', '', $request->action) ;
			}
		}
		$request->params=array_slice($params, 2) ; //le reste de l'url sont les paramtètres
	
		return true;

	}

	/**
	*Connect
	*/

	static function connect($redir, $url)
	{
		$r = array() ;
		$r['params'] = array() ;
		$r['url'] = $url ;
		
		$r['originreg'] = preg_replace('/([a-z0-9]+):([^\/]+)/', '${1}:(?P<${1}>${2})', $url) ;
		$r['originreg'] = str_replace('/*','(?P<args>/?.*)', $r['originreg']) ;
		$r['originreg'] = '/^'.str_replace('/','\/',$r['originreg']).'$/' ;
		//MODIF
		$r['origin'] = preg_replace('/([a-z0-9]+):([^\/]+)/', ':${1}:', $url) ;
		$r['origin'] = str_replace('/*', ':args:', $r['origin']) ;

	
		$params = explode ('/', $url) ;
		
		foreach ($params as $k => $v) 
		{
			if(strpos($v, ':'))
			{
				$p=explode(':', $v) ;
				$r['params'][$p[0]] = $p[1] ;
			}
		}
		$r['redirreg'] = $redir ;
		$r['redirreg'] = str_replace('/*', '(?P<args>/?.*)', $r['redirreg']) ;
		foreach ($r['params'] as $k => $v) 
		{
			$r['redirreg'] = str_replace(":$k", "(?P<$k>$v)", $r['redirreg']) ;
		}
		$r['redirreg'] = '/^'.str_replace('/', '\/', $r['redirreg']).'$/' ;
		$r['redir'] = preg_replace('/:([a-z0-9]+)/', ':${1}:', $redir) ;
		$r['redir'] = str_replace('/*', ':args', $r['redir']) ;
		self::$routes[] = $r ;

		
	}
	/**
	*
	**/
	static function url($url= '')
	{

		trim($url, '/') ;
		foreach (self::$routes as $v)
		{
			if(preg_match($v['originreg'], $url, $match))
			{
				$url=$v['redir'] ;
				foreach ($match as $k => $w) 
				{
					$url = str_replace(":$k:" , $w, $url) ;	
				}
				//return BASE_URL.str_replace('//','/','/'.$v['redir']).$match['args'] ;
			}
	
		
		}
		foreach (self::$prefixes as $k => $v) 
		{
			if(strpos($url, $v) === 0)
			{
				$url = str_replace($v, $k, $url) ;
			}
		}
		return BASE_URL.'/'.$url ;
	}
	static function webroot($url)
	{
		trim($url,'/') ;
		return BASE_URL.'/'.$url ;
	}
}