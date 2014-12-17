<div class="row">
	<div class="col-md-9">

<?php foreach ($posts as $k => $v) : ?>
<?php 

if($v->idcat != 3)
{
	
	



	?>
<div>
<section>
	<article>
		<!--
		<div class="contain-posts-title">
		<h2 class="posts-title">
			<?php// echo $v->name ; ?>
		</h2>
	</div>
-->
	<!--
		<aside class="header-posts">
			<span class="posts-date">
				<i class="glyphicon glyphicon-calendar"> </i>
				<?php echo parseDate($v->created);

				 ?>

				 </span>
			<span class="posts-category">
				<i class="glyphicon glyphicon-bookmark"> </i><a href="#"> <?php echo $v->catname ; ?> </a>
			</span>
			<span class="posts-author">
				<i class="glyphicon glyphicon-user">  </i>
				
					Alexandre
			</span>
		</aside>
	-->
		<!--
		<a class="posts-img" href="#">
			<img alt="" src="/bts_sio/img/outil.jpg" height="230px" >
		</a>
	-->
		<div class="posts-content">
			<br />
			<p>

				<?php  $content =$v->content ;
					if ($v->countWord > 600 )
					{
						$content .='...' ;
					}
					else
						{
							$content .='.' ;
						}
				echo $content ;  ?>
			</p>
			<!--
			<div class="posts-btn">
				<p>
				<a  title="<?php /* echo $v->name ;*/ ?>" href="<?php // echo Router::url("posts/view/id:{$v->id}/slug:$v->slug") ;?>">Lire l'article</a>
			</p>
			</div>
			-->
		</div>
		<div class="posts-separator"></div>
	</article>
</section>
</div>

<?php } else { }?>
<?php endforeach ?>
<div id="pag">
	<!--Router::url('posts/:view/id:5/slug:mon-slug')-->
	<ul class="pag">
		<?php for($i=1 ; $i <= $page; $i++) : ?>
	  <li <?php if($i==$this->request->page) echo 'class="active"' ;?>> <a href="?page=<?php echo $i; ?>"><?php echo $i;  ?></a></li>
	  <?php endfor ?>
	</ul>
</div>
</div>
<div class="col-md-3">
<!--
<section class="posts-navbar">
	<div class="list-category">
		<h2>Présentation</h2>
		<p>Etudiant en informatique passionné par tout ce qui touche au domaine du Web, j'exposerai ici mon travail de veille technologiques.</p>
		<h2>Catégories</h2>
		<ul>
			<li>Tutoriels</li>
			<li>Test</li>
			<li>Test 2</li>
		
		</ul>

	</div>

	</section>
-->
</div>
</div>

<!--Router::url('posts/:view/id:5/slug:mon-slug')-->
