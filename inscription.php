<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription-SKA</title>
    <meta name="description" content="Accédez aux leçons et cours correspondants aux programmes éducatifs nationaux 
	et validés par des professionnels de l'enseignement. SKA vous offre une diversité 
	des services numériques visant à améliorer la qualité de l'éducation.">
    <meta name="keywords" content="Ska,Library,cours,benin">
    <meta name="author" content="Smart kids academy">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <style>
		@font-face { 
		font-family: 'ui';
		src: url('assets/fonts/segoeui.ttf');
		}
	</style>
</head>
<body>
<?php
    include("squelette.php");
?>
<h1 class="h2 text-center pt-2 bg-light">Choisissez votre profil</h1>
<section  class="container col-md-8 offset-md-3">
            <div class="row">
                <div class="col-md-4">
                <span class="border col-md-12 text-center font-weight-bold" style="background-color:#4695B7;border-radius:50px 10px 50px 10px;font-family:ui">Parents</span>
                <div class="container border" style="background-color:#4695B7">
                <p class="text-center">Vous êtes parents et vous
                    désirez inscrire votre enfant</p><br/><br/><br/>
                    <center><button class="btn btn-outline-light" data-toggle="modal" data-target="#mymodal1"style="background-color:#03ABF3;font-family:ui;">Cliquez-ici</button></center><br/>
                </div>
                </div>
               
                <div class="col-md-4 ml-md-4">
                <span class="border col-md-12 text-center font-weight-bold" style="background-color:#0B889A;border-radius:50px 10px 50px 10px">Enseignants</span>
                <div class="container border" style="background-color:#0B889A">
                <p class="text-center">Vous souhaitez donner des
                cours à nos enfants</p><br/><br/><br/>
                <center><button class="btn btn-outline-light" data-toggle="modal" data-target="#mymodal1" style="background-color:#064952;font-family:ui">Cliquez-ici</button></center><br/>
                </div>
                </div>
    </div>
</section>
<br/><br/>
<div class="modal" id="mymodal1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="h5 text-center modal-title text-primary">Parents</h1>
            <button class="close" type="button" data-dismiss="modal"><span>&times</span></button>
            </div>
            <div class="modal-body">
            <center>
<form action="" method="post" class="form-group " id="step_1">
  <fieldset class="col-lg-10 border border-primary">
    <legend class="text-center text-primary border-primary">Etape 1</legend>
    <div class="text-center col-lg-10">
    <br/><br/>
    <input type="text" name="nomParents" class="form-control" placeholder="Tapez votre nom et votre prénoms" required="required" /><br/><br/>

    <select name="sexe" class="browser-default custom-select" required="required">
		<option selected>Genre</option>
		<option value="homme" >Homme</option>
		<option value="femme" >Femme</option>
		</select>		<br/><br/>	
				
	<input type="text" name="email" class="form-control" placeholder="Tapez votre email" required="required"><br/><br/>
				
    <input type="text" name="profession" class="form-control"  placeholder="Votre Profession" required="required"><br/>
    <button type="submit" name="etape_2" class="col-5 btn font-weight-bold text-white" data-toggle="modal" data-target="#mymodal2" style="background-color:#3B73B0;font-size:20px;">→</button>		
    <br/><br/>
    </div>
  </fieldset>
</form></center>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="mymodal2">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="h5 text-center modal-title text-primary">Parents</h1>
            <button class="close" type="button" data-dismiss="modal"><span>&times</span></button>
            </div>
            <div class="modal-body">
            <center>
<form action="" method="post" class="form-group" id="step_2">
  <fieldset class="col-lg-10 border border-primary">
    <legend class="text-center text-primary border-primary">Etape 2</legend>
    <div class="text-center col-lg-10">
    <br/><br/>
    <input type="tel" name="telParents" class="form-control" placeholder="Tapez votre numéro de téléphone précédé du code" required="required"><br/><br/>

    <input type="text" name="quartier" class="form-control" placeholder="Tapez votre quartier de résidence" required="required">
	<br/><br/>	
				
    <input type="text" name="ville" class="form-control"  placeholder="Votre Ville de Résidence"  required="required"><br/><br/>

    <input type="text" name="pays" class="form-control" placeholder="Tapez votre pays" required="required"><br/>

    <button type="submit" name="etape_2" class="col-5 btn font-weight-bold text-white" data-toggle="modal" data-target="#mymodal3" style="background-color:#3B73B0;font-size:20px;">→</button>			
    <br/><br/>
    </div>
  </fieldset>
</form></center>
        </div>
        </div>
    </div>
</div>
<div class="modal" id="mymodal3">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="h5 text-center modal-title text-primary">Parents</h1>
            <button class="close" type="button" data-dismiss="modal"><span>&times</span></button>
            </div>
            <div class="modal-body">
            <center>
<form action="" method="post" class="form-group " id="step_3">
  <fieldset class="col-lg-10 border border-primary">
    <legend class="text-center text-primary border-primary">Etape 3</legend>
    <div class="text-center col-lg-10">
    <br/><br/>
    <input type="password" name="motDePasse" class="form-control" placeholder="Tapez votre votre mot de passe" required="required"><br/><br/>			
    <input type="password" name="motDePasseConfirm" class="form-control"  placeholder="Confirmer votre mot de Passe" required="required"><br/>
    <button type="submit" name="etape_2" class="col-5 btn font-weight-bold text-white" data-toggle="modal" data-target="#mymodal4" style="background-color:#3B73B0;font-size:20px;">→</button>			
    <br/><br/>
    </div>
  </fieldset>
</form></center>-
            </div>
        </div>
    </div>
</div>
<div class="modal" id="mymodal4">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="h5 text-center modal-title text-primary">Renseignez les informations de vos enfants</h1>
                <button class="close" type="button" data-dismiss="modal"><span>&times</span></button>
                </div>
            <div class="modal-body">
<center>
<form action="" method="post" class="form-group " id="step_1">
  <fieldset class="col-lg-10 border border-primary">
    <legend class="text-center text-primary border-primary">Etape 4</legend>
    <div class="text-center col-lg-10">
    <br/><br/>
    <input type="number" name="nombreEnfants" class="form-control" placeholder="Nombre d'enfants" required="required"><br/><br/>

    <input type="text" name="nomParents" class="form-control" placeholder="Tapez votre nom et prénom de votre enfant" required="required" /><br/><br/>

    <select name="sexe" class="browser-default custom-select" required="required">
		<option selected>Genre</option>
		<option value="homme" >Homme</option>
		<option value="femme" >Femme</option>
		</select>		<br/><br/>	
				
	<input type="text" name="email" class="form-control" placeholder="Tapez votre email" required="required"><br/><br/>
				
    <input type="text" name="profession" class="form-control"  placeholder="Votre Profession" required="required"><br/>
    <button type="submit" name="etape_2" class="col-5 btn font-weight-bold text-white" data-toggle="modal" data-target="#mymodal5" style="background-color:#3B73B0;font-size:20px;">→</button>		
    <br/><br/>
    </div>
  </fieldset>
</form></center>
            </div>
        </div>
    </div>
</div>
</body>
<?php
 include("footer.php");
 ?>
</html>
 <!--====== Jquery js ======-->
 <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>