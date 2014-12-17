<!DOCTYPE html>
<html xmlns="http://www.w3.org/199/xhtml" xml:lang="fr" lang="fr">
    <head>
		<meta name="google-site-verification" content="CNS_y1Cp1g1KiCB6eRIVu9W6jgaEV8U6rWBeqSPfArM" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo isset($title_for_layout) ? $title_for_layout : 'Alexandre Jaunasse' ; ?></title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style-cv.css" />
        <link rel="stylesheet" href="/css/style-blog.css" />
        <link rel="stylesheet" href="/css/style-contact.css" />
         <link rel="stylesheet" href="/css/style-article.css" />
         <link rel="stylesheet" href="/css/style-bts.css" />
        <link rel="stylesheet" href="/css/responsive-nav.css" />
          
  
    </head>
    <body>
        <header  id="header" class="header">
            <div class="contain-header">
              <div class="row">
               <section>
                    <img src="/img/logo.png"><img>
                </section>
                   <nav role="navigation" class="nav">
                    <ul id="menu">   
                        <?php 
             
                        $action = ucfirst($this->request->action) ;
                        if($action == 'Index')
                        {
                            $action = 'Accueil' ;
                        }
                        if($action === 'View')
                        {
                            $action = 'Blog > '.$post->catname.' > '.$post->name ;
                         
                        } else {
                         
                        }

                         ?>
                        <li class="border-right-left" ><a <?php if($action=='Accueil') echo 'class="active"' ;?> href="<?php echo Router::url('') ; ?>"><i class="glyphicon glyphicon-home"></i></a></li>
                       <!-- <a> <?php //$pagesMenu = $this->request('Pages', 'getMenu') ;?></a>-->
                       <li class="border-right-left"><a <?php if($action=='Blog') echo 'class="active"' ;?> href="<?php echo Router::url('blog') ;?>">Blog</a></li>
                        <li class="border-right-left"><a <?php if($action=='CV') echo 'class="active"' ;?> href="<?php echo Router::url('pages/CV'); ?>"<span>CV</span></a></li>
                        <li class="border-right-left" class='last'><a <?php if($action=='Contact') echo 'class="active"' ;?> href="<?php echo Router::url('pages/contact/'); ?>"><span>Contact</span></a></li>
                         <li class="border-right-left" class='last'><a <?php if($action=='BTS') echo 'class="active"' ;?> href="<?php echo Router::url('pages/BTS/'); ?>"><span>Projets BTS</span></a></li>

                    </ul>
               </nav>
             </div>
            </div>

        </header>
        <div class="banniere">
            <div class="contain-banniere">
                <h1 class="main-title"><?php if($action =='Accueil'){ ?>Jaunasse Alexandre | <?php } ?> <?php echo $action ; ?></h1>
                <?php if ($action == 'Accueil') { ?>
                <p class="sub-title">Développeur Néophyte HTML CSS PHP JS & JAVA</p>
                <?php } ?>

            </div>
        </div>
        <?php if($action == "CV") { ?>
            <div id="nav-cv">
                <ul>
                    <a href="#ancre_skills" ><li class="first">Compétences</li></a>
                     <a name="#ancre_xp" href="#ancre_xp" ><li>Èxpérience Professionnelles</li></a>
                     <a href="#ancre_school" ><li>Formation</li></a>
                     <a href="#ancre_interest" ><li>Intérêts</li></a>
                </ul>
            </div>
            <?php } ?>
<div id="ancre_skills"></div>



  
            <?php echo $this->Session->flash() ; ?>
            <?php echo $content_for_layout; ?>


        <footer  id="footer"class="footer">
       
            <div class="row">

                <div class="col-md-4 .col-xs-6 .col-sm-4">
    
               <h3 class="title-footer" > About </h3>
               <p class="content-footer">Développeur sur Nantes, je partagerai mes connaissances et mes projets sur ce site.</p>

         
        </div>
        <div class="col-md-4">
     
               <h3 class="title-footer" > Site Navigation </h3>

        
        </div>
        <div class="col-md-4 .col-xs-6 .col-sm-4">
             
               <h3 class="title-footer" > Find me on  </h3>
                  <a href="https://www.facebook.com/alexandre.jaunasse.3"title="Ma page facebook"><img class ="image" src="/img/facebook.png"/></a>
                  <a href="https://www.google.com/+AlexandreJaunasse"title="Ma page google+"><img class ="image" src="/img/google+.png"/></a>
                  <a href="https://www.viadeo.com/fr/profile/alexandre.jaunasse"title="Ma page viadeo"><img class ="image" src="/img/viadeo.png"/></a>    
                  <a href="https://fr.linkedin.com/pub/alexandre-jaunasse/82/375/588"title="Ma page linkedin"><img class ="image" src="/img/linkedin.png"/></a>
                </p>

        
        </div>
        </div>
  
        </footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="/js/responsive-nav.js"></script>
<script src="/js/script.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49608556-1', 'auto');
  ga('send', 'pageview');

</script>


    </body>
</html>