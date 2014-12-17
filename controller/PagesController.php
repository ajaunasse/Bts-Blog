<?php
class PagesController extends Controller
{
	function view($id=null)
	{
		$this->loadModel('Post') ;
		$d['page']=$this->Post->findFirst(
			array(
				'fields'     => 'Post.id,Post.name,Post.online,Category.name as catname,Category.slug as catslug',
				'conditions' => array('online' => 1,'id'=> $id, 'type'=>'page') 
			));
		if(empty($d['page']))
		{
			$this->e404('Page introuvable') ;
		} 
		else   
		{
			$this->set('post', $d['page']) ;
		}
		$this->set($d) ;
	}
	function CV()
	{
	
	}
	function contact()
	{
		
	}
	function BTS()
	{
		
	}

	/**
	*Permet de récupérer les pages pour le menu
	**/
	function getMenu()
	{
		$this->loadModel('Post') ;
		return $this->Post->find(array(
			'conditions' => array('online' => 1, 'type' =>'page')
			)) ;
	}
	/**
	* Permet de lister les contenus
	**/
	function admin_index()
	{
	
	}
	
	function admin_tinymce(){
		$this->loadModel('Post');
		$this->layout = 'modal'; 
		$d['posts'] = $this->Post->find();
		$this->set($d);
	}


}