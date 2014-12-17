<?php
/**
* Délaration des variables
**/
$debut=microtime(true) ;


/**
* Déclaration des constantes 
**/

define ('WEBROOT', dirname(__FILE__)) ; 							//L'url du dossier webroot
define('ROOT', dirname(WEBROOT)) ;									//L'url qui contient tous le site
define('DS', DIRECTORY_SEPARATOR) ;									//SLASH ET ANTI-SLASH selon serveur
define('CORE', ROOT.DS.'core' ) ;									//L'url du dossier core
/*define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME'])));	*/	//Chemin de la racine
define('BASE_URL','http://ajaunasse.fr');
require CORE.DS.'includes.php' ;
new  Dispatcher() ;
?>
<!--
<div style="position:fixed; bottom:0; background:#900; color:#FFF; line-height:30px ; height:30px; left:0;right:0;padding-left:10px;">
-->
<?php
/*
echo 'Page générée en : '.round(microtime(true) - $debut,5).' secondes' ;
*/
?>
<!--
</div>
-->
