<!DOCTYPE html>
<html xmlns="http://www.w3.org/199/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo isset($title_for_layout) ? $title_for_layout : 'Mon site | administration' ; ?></title>
     
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/trumbowyg.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script type="text/javascript" src="<?php echo Router::webroot('/js/js/tinymce/tinymce.min.js') ; ?>"></script>



    </head>
    <body>
        <div id='cssmenu' style="position:static">
            <ul>

                 <li class='active'>
                    <a href="<?php echo Router::url('admin/posts/index'); ?>"><span>Administration</span></a>
                </li>
                <li>   <a href="<?php echo Router::url('admin/posts/index'); ?>" title=""> Articles</a> </li>
                <li> <a href="<?php echo Router::url('admin/pages/index'); ?>" title="pages">Pages</a> </li>
                <li> <a href="<?php echo Router::url('admin/categories/index'); ?>" title="catégories">Categories</a> </li>
                <li> <a href="<?php echo Router::url(''); ?>" title="Retour au site">Retour au site</a></li>

                      <li> <a href="<?php echo Router::url('users/logout'); ?>" title="Logout">Se déconnecter</a></li>
            </ul>
        </div>


        <div class="container">
            <br>
            <?php echo $this->Session->flash() ; ?>
            <?php echo $content_for_layout; ?>

        </div>

    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">


    </script>
</html>