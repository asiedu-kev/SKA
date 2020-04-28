<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scales=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
		<style>
		</style>
		<body>
        <section id="services" class="features-area" style="background-color:white">
        <div class="container" style="margin-top:-80px">
            <div class="row justify-content-center" >
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title" style="color:linear-gradient(to top,#F55849,#0B889A)">CE QU'ILS EN DISENT</h3>
                         </div>
                </div>
            </div>
            <div> 
        </div> 
    </section>
        <section class="row offset-3 col-8">
            <div class="col-5">
                <div class="jumbotron">
                <h1></h1>
                </div>
                </div>
            <div class="col-5">
                <div class="jumbotron">
                <h1></h1>
                </div>
            </div>
        </section>
        <center><span>ACTUALITES & EVENEMENTS</span></center>	
        <section class="row col-10 offset-2">
        <div class="col-11">
                <div class="jumbotron">
                <h1></h1>
                </div>
                </div>
        </section>
        <center><span>STATISTIQUES</span></center>
        <section class="offset-2 col-9 mt-3 bg-light">
            <div class="row ml-3">
            <span class="border border-primary offset-1 shadow-lg" style="border-radius:50%;padding:10px">123645</span>
            <span class="border border-primary  offset-2 rounded-pill" style="border-radius:50%;padding:10px">123645</span>
            <span class="border border-primary offset-2" style="border-radius:50%;padding:10px">123645</span>
            </div>
            <div class="row ml-3">
            <span class="font-weight-bold offset-1">Cours</span>
            <span class="font-weight-bold  offset-2">Apprenants</span>
            <span class="font-weight-bold  offset-2">Cours lus</span>
            </div>
        </section><br/>
        <section>
            <form class="col-9 bg-white offset-2" method="post">
            <center><h5 class="text-danger">INSCRIPTION A LA NEWSLETTER SKA</h5></center>
            <center><h5 class="text-danger">Pour être les premiers informés de nos nouveautés</h5></center>

            <label for="name">Nom</label>
            <input class="form-control bg-light" type="text" name="nom" />
            <label for="surnname">Prénoms</label>
            <input class="form-control bg-light" type="text" name="prenom" />
            <label for="name">Adresse</label>
            <input class="form-control bg-light" type="email" name="nom" />
            <label for="commentaire">Commentaire</label>
            <textarea  name="commentaire" placeholder="Votre commentaire" class="form-control bg-light" ></textarea>
            <br/>
            <input type="submit" value="Soumettre" id="bouton" name="envoyer" class="btn btn-outline-danger"/>
            </form>
        </section>
        <br/>
        <?php
     include('footer.php');
?>
	</body> 
</html>