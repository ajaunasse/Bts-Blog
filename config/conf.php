<?php
class Conf 
{
	static $debug = 1 ;
	static $databases = array 
	(
		'default' 		=> array 
		(
			'host'		=> '',
			'database'	=> '',
			'login'		=> '',
			'password'	=> ''
		)
	);
}

Router::prefix('','admin') ;
Router::connect('/','posts/index') ;
Router::connect('blog', 'posts/blog') ;
Router::connect('CV', 'pages/CV') ;

Router::connect('admin44', 'admin44/posts/index') ;
Router::connect('post/:slug-:id','posts/view/id:([0-9]+)/slug:([a-z0-9\-]+)') ;

Router::connect('post/:slug-:id','posts/view/id:([0-9]+)/slug:([a-z0-9\-]+)') ;
Router::connect('blog/category/:slug','posts/category/slug:([a-z0-9\-]+)');
Router::connect('blog/*','posts/*') ;



