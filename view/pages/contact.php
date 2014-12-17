<?php
ini_set('SMTP','smtp.orange.fr'); /*Protocole obligatoire*/
/*On extrait les données entrer par l'utilisateur*/
extract($_POST) ; 
/*Verification des champs entrés par l'utilisateur */
if (!empty ($_POST)) {	
	$valid=true ;
	if (empty($nom)) {
		$valid=false ; 
		$erreurnom = " Vous n'avez pas rempli votre nom !" ;
	}/*Verification du format de l'email, il doit être de la forme 'chaine_caratère@chaine_caractère.nom_domaine(fr,com etc...)'*/
	if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i", $email)) {
		$valid=false ;
		$erreurmail = "Email non valide !" ;	
	}
	if (empty($email)) {
		$valid=false ; 
		$erreurmail = " Vous n'avez pas rempli votre email ! " ;
	}if (empty($objet)) {
		$valid=false ; 
		$erreurobjet = " Vous n'avez pas rempli l'objet de votre message !" ;
	}if (empty($message)) {
		$valid=false ; 
		$erreurmsg = " Vous n'avez pas rempli le corp de votre message !" ;
	}
	/*envoie du message */
	if ($valid) {
		$to = "alexandre.jaunasse@gmail.com" ;
		$subject = "contact du site \n
		Nom : $nom \n 
		Email : $email" ;
		$header = "FROM : $email \n" ;
		$header = "Reply-To : $email " ;
		$header =  "Return-Path: Moi <alexandre.jaunasse@gmail.com>" ;
		/*Suppresion des '\' lorsqu'il ya des apostrophes */
		$message = stripslashes($message) ;
		$objet = stripslashes($objet) ;
		$nom = stripslashes($nom) ;
		if (mail($to,$subject,$message, $header)) {
			$erreur = " Votre messsage est bien parvenu " ;
		/* Suppression des variables */	
			
			unset ($nom)  ;
			unset ($email) ;
			unset ($objet ) ;
			unset ($message ) ; 
			
		} else {
			$erreur= "Une erreur est survenue ! " ;
		}
	}
}
?>
  <div class="row block-contact">
  	<div class ="col-xs-6 col-md-12">
			<form class="form-horizontal" id="contact" method="post" action="Contact.php">
				<br />
					<fieldset>
						<legend>Vos coordonnées</legend>
						<span class="erreur-message">
						<?php 
						if (isset($erreur)) 
						echo "<p> $erreur </p>"; 
						?>
						</span>
						<div class="form-group">
						<p>
							<label for="nom">Nom :</label></br>
							<div class="row">
								<div class="col-xs-4">
									<div class="<?php if(!empty($_POST)) { if(!isset($erreurnom) && !empty($objet)) { echo 'group has-success has-feedback' ;} else { echo 'form-group has-error has-feedback' ; }}?>">
							<input type="text" id="nom" name="nom" class="form-control" class="remplir" value ="<?php if (isset($nom)) echo ($nom) ; ?>"  /> 
							</div>
							</div>
						</div>
							<span class="erreur-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
						</p>
					</div>
					<div class="form-group">
						<p>
							<label for="email" >Email :</label></br>
							<div class="row">
							<div class="col-xs-4">
								<div class="<?php if(!empty($_POST)) { if(!isset($erreurmail) && !empty($objet)) { echo 'group has-success has-feedback' ;} else { echo 'form-group has-error has-feedback' ; }}?>">
							<input class="form-control" type="text" id="email" name="email" tabindex="2" value ="<?php if (isset($email)) echo ($email) ; ?>">
							</div>
							</div>
						
							<span class="erreur-message"><?php if(isset($erreurmail)) echo $erreurmail ; ?></span>
						</p>
					</div>
					</fieldset>
					<fieldset>
						<legend>Votre message </legend>
						<div class="form-group">
						<p>
							<label for="objet">Objet :</label></br>
							
								<div class="col-xs-4">
									<div class="<?php if(!empty($_POST)) { if(!isset($erreurobjet) && !empty($objet)) { echo 'group has-success has-feedback' ;} else { echo 'form-group has-error has-feedback' ; }}?>">
							<input class="form-control " type="text" id="objet" name="objet" tabindex="3"value ="<?php if (isset($objet)) echo ($objet) ; ?>" />
							<span class="erreur-message"><?php if(isset($erreurobjet)) echo $erreurobjet; ?></span>
						</div>
						</div>
						<div>
					</div>
						</p>
					</div>
					<div class="form-group">
						<p>
							<label for="message"  class="formulaire" >Message : </label></br>
							<div class="row">
								<div class="col-xs-4">
									<div class="<?php if(!empty($_POST)) { if(!isset($erreurmsg) && !empty($objet)) { echo 'group has-success has-feedback' ;} else { echo 'form-group has-error has-feedback' ; }}?>">
							<textarea class="form-control" id="message" name="message" tabindex="4" cols="30" rows="8" type="text"><?php if (isset($message)) echo ($message) ; ?></textarea>
							</div>
							</div>
						</div>
							<span class="erreur-message"><?php if(isset($erreurmsg)) echo $erreurmsg; ?></span>
							<div style="text-align:center;">
								<br /> <br />
								<div class="row">
								<div class="col-xs-4">
							<input class="btn btn-primary button" type="submit" name="envoi" value="Envoyer !" />
							<input class="btn btn-danger button" type="reset" name="annuler" value="Annuler !" />
						</div>
					</div>
							</div>
						</p>
					</div>
						
					</fieldset> 
					
				</form>
			</div>
			</div>	
			<form class="form-horizontal" role="form">
  
