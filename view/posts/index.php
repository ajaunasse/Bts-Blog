
<div class="row">
<div class="col-md-12 col-xs-8 col-sm-8">
<div class="presentation">
	<p>
Développeur en formation basé à Nantes, spécialisé dans le developpement Web front&back-end. <br />
Je développe donc principalement avec les technologies PHP, Jquery, Html, Css & des bases de données MYSQL.<br />
Ce site s'inscrit dans le cadre de ma formation et retrace donc mon expérience personnelle, mes projets et ma veille technologique.<br />
</p>
</div>
</div>
</div>

<div class="push"></div>
<br />

	<div class="row">
	<div class="col-md-4 col-xs-4 col-sm-4">

  		<h3  ><span class="title-page-index">Blog</span></h3><img height="30px" width = "300px" src="img/separate.png" alt="separator" ></img>
		<div class="info"><p>Passionné par les nouvelles technologies ?<br /> Retrouvez mes articles ici : </p>
		<p><a class="link-in-accueil" href="<?php echo Router::url('blog') ;?>" target="blank" title="Blog"/><i class="glyphicon glyphicon-play-circle"></i> Voir le blog </a></p>
  	</div>
  	</div>

  	<div class="col-md-4 col-xs-4 col-sm-4">
 		<h3 class="title-page-index">CV</h3><img height="30px" width="300px"  src="img/separate.png" alt="separator" ></img>
 		<div class="info">
 		<p>À la recherche d'un developpeur ? <br /> Mes compétences peuvent vous intéresser : </p>
 		<p><a class="link-in-accueil" href="<?php echo Router::url('pages/CV') ;?>" target="blank" title="CV" /><i class="glyphicon glyphicon-play-circle"></i> Mon CV </a></p>
  </div>
  	</div>
  	<div class="col-md-4 col-xs-4 col-sm-4">
  		<h3 class="title-page-index">Contact</h3><img height="30px" width = "300px" src="img/separate.png" alt="separator"></img>
  		<div class="info">
  		<p>Intéressé par mon profil  ?<br /> Contactez moi ici :</p>
  		<p><a class="link-in-accueil" href="<?php echo Router::url('pages/Contact') ;?>" target="blank" title="Me contacter" /><i class="glyphicon glyphicon-play-circle"></i> Me contacter </a></p>
	</div>
	</div>
</div>



<br /><br />	
	

	<div class="push"></div>


	<div class="row">
  <div class="col-md-6 col-xs-8 col-sm-6">
  	<h3 class="title-page-index" ><span class="title-first-block">Articles Récents</span></h3>
  	<br />
  	<?php

  	if (!empty($pages))
  	{
  		
  	 foreach ($pages as $k => $v) : ?>
  <?php

   if($v->catname != 'bts')
  {

  ?>
	<article class="article-blog-accueil">
			<a class="lien-blog" title="<?php echo $v->name ; ?>" href="<?php echo Router::url("posts/view/id:{$v->id}/slug:$v->slug") ;?>">
				<h2 class="titre-blog"><?php echo $v->name ; ?></h2>
				<p class="date"><span class="glyphicon glyphicon-calendar"></span> | <?php echo parseDate($v->created);?></p>
				<span class="content-blog">
					 <?php echo $v->content ; ?>
				</span>

				<p class="next-read">Lire cet article &rarr;</P>
			</a>
	</article>
<?php } ?>
	<?php endforeach ?>
	<?php } else 
	{
		echo "<p> Pas d'articles pour le moment. </p>" ;
	}
	?>
	</div>

	<div class="col-md-6 col-xs-8 col-sm-6">
		<h3 class="title-page-index" ><span class="title-first-block">Mes derniers Projet</span></h3>
		<br />
		<p>Pas de projets en ligne pour le moment.</p>
	</div>

 	

</div>
</div>


 


