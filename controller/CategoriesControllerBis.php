
<?php
/*
class PostsController extends Controller
{

	function index()
	{
		$perPage =3 ;
		$this->loadModel('Post') ;
		$conditions = array('online' => 1, 'type'=>'post') ;
		$d['pages'] = $this->Post->find(array(
			'fields' 		=> 'Post.id,Post.name,SUBSTRING(content,1,200) AS content, LENGTH(RTRIM(content)) as countWord, Category.name as catname, Category.slug as catslug, Post.created,Post.online,Post.type,Post.slug, user_id',
			'conditions' 	=>$conditions,
			'order by'		=>'created DESC',
			'limit' 		=> '0,'.$perPage,
			'join'       => array('categories as Category'=>'Category.id=Post.category_id')
			)) ;

		$this->set($d) ;

	}
	/**
	* Permet d'afficher les posts d'une catégorie
	**/
	function category($slug){
		$this->loadModel('Category'); 
		$category = $this->Category->findFirst(array(
			'conditions' => array('slug' => $slug),
			'fields'     => 'id,name'
		));
		if(empty($category)){
			$this->e404();
		}
		$perPage = 10; 
		$this->loadModel('Post');
		$condition = array('online' => 1,'type'=>'post','category_id' => $category->id); 
		$d['posts'] = $this->Post->find(array(
			'conditions' => $condition,
			'fields'     => 'Post.id,Post.name,Post.slug,Post.created,Category.name as catname,Post.content,Category.slug as catslug',
			'order'      => 'created DESC',
			'limit'      => ($perPage*($this->request->page-1)).','.$perPage,
			'join'       => array('categories as Category'=>'Category.id=Post.category_id')
		));
		$d['total'] = $this->Post->findCount($condition); 
		$d['page'] = ceil($d['total'] / $perPage);
		$d['title'] = 'Tous les articles "'.$category->name.'"'; 
		$this->set($d);
		// Le système est le même que la page index alors on rend la vue Index
		$this->render('index'); 
	}

	function view($id=null, $slug)
	{
		$this->loadModel('Post') ;
		$conditions = array('online' => 1,'id'=>$id, 'type'=>'post') ;
		$d['post']=$this->Post->findFirst(
			array(
				'fields' => 'Post.id, Post.slug, Post.content , Post.name, Post.created, Category.name as catname,Category.slug as catslug',
				'conditions' => $conditions,
				'join'		 => array('categories as Category'=>'Category.id=Post.category_id')
			));
		if(empty($d['post']))
		{
			$this->e404('Page introuvable') ;
		} 
		if($slug != $d['post']->slug)
		{
			$this->redirect("posts/view/id:$id/slug:".$d['post']->slug,301);
		}

		$this->set($d) ;
	}
	function blog()
	{
		$perPage = 3 ;
		$this->loadModel('Post') ;
		$conditions = array('online' => 1, 'type'=>'post') ;
		$d['posts'] = $this->Post->find(array(
			'fields' 		=> 'Post.id,Post.name,SUBSTRING(Post.content,1,500) AS content, LENGTH(RTRIM(content)) as countWord, Post.created,Post.online,Post.type,Post.slug, user_id',
			'conditions' 	=>$conditions,
			'order by'		=>'created DESC',
			'limit' 		=> ($perPage*($this->request->page-1)).','.$perPage 
			)) ;
		$d['total'] = $this->Post->findCount($conditions) ;			
		$d['page'] = ceil($d['total']/$perPage) ; 
		$this->set($d) ;

	}

	/******************************************************************
	******************************PARTIE ADMIN*************************
	******************************************************************/

	/**
	*Affiche les articles dans la partie index_admin
	*/

	function admin_index()
	{
		$perPage = 10 ;
		$this->loadModel('Post') ;
		$conditions = array('type'=>'post') ;
		$d['posts'] = $this->Post->find(array(
			'fields' 		=> 'id,name, online, Category.name as catname,Category.slug as catslug',
			'conditions' 	=>$conditions,
			'order by'		=>'id',
			'limit' 		=> ($perPage*($this->request->page-1)).','.$perPage,
			'join'		 => array('categories as Category'=>'Category.id=Post.category_id')
			)) ;
		$d['total'] = $this->Post->findCount($conditions) ;
		$d['page'] = ceil($d['total']/$perPage) ; 
		$this->set($d) ;
	}
	/**
	* Permet d'éditer un article
	**/

	function admin_edit($id = null)
	{
		$this->loadModel('Post') ;
		$d['id'] = '';
		if($this->request->data)
		{
			if($this->Post->validates($this->request->data))
			{
				$this->request->data->type = 'post';
				$this->request->data->created = date('Y-m-d h:i:s') ;
				$this->Post->save($this->request->data) ;
				$this->Session->setFlash('Le contenu a bien été éditer');
				$this->redirect('admin/posts/index') ;
			} 
			else
			{
				$this->Session->setFlash('Merci de corriger vos informations', 'danger');
			}
		}
		else 
		{
			if($id)
			{
				$this->request->data= $this->Post->findFirst(array(
				'conditions' => array('id'=>$id)
				)) ;
				$d['id'] = $id ;
			}
		}
	
		$this->set($d) ;	
	}

	/**
	* Permet de supprimer un article
	**/

	function admin_delete($id)
	{
		$this->loadModel('Post') ;
		$this->Post->delete($id) ;
		$this->Session->setFlash('Le contenu a bien été supprimer');
		$this->redirect('admin/posts/index') ;
	}

}
*/