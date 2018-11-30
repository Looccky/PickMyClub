<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PickMyClub</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/round-about.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>

  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"><i>PickMyClub</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">S'inscrire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Se connecter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick = "toggle('pop-up')">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
      <!-- Introduction Row -->

     <div class="image_banner" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
      <p style="color: #f3f3f3;position: absolute; margin-left: 50%;"><b><em><br>"Cette plateforme est conçu avant tout pour les fans de gaming! Cette plateforme marque le début de la prochaine génération du divertissement en permettant aux personnes de tout âge d'imaginer, de créer et de s'amuser ensemble dans des Team générés par la communauté. Nous appelons cet espace la « plateforme de Tchat » et tout le monde y est le bienvenu."</em></b></p>
      </div>
     <div class="container">
      <div class="row">
        <div class="col-lg-12" >
            <h2 class="my-4"><i>Nos popularités : </i></h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://image.noelshack.com/fichiers/2018/43/5/1540565719-web-designer.png" alt="">
          <h3>Club
            <small>WebDesign</small>
          </h3>
        <p>Tu es un grand fan de Design? Mais tu travailles principalement sur des plateformes web? <p>Ce club est alors fait pour toi!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>Club
            <small>Jeux Vidéos</small>
          </h3>
             <p>Tu est plutôt fan de stratégies, d'arcades et de simulation? </p><p>Alors viens t'amuser dans ce club car nous pouvons t'assurer qu'il sera fait pour toi!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
            <h3>Club
            <small>Robotique</small>
          </h3>
          <p>L'intelligence artificielle est un domaine qui te passionne ? <p>Nous te recommandons de rejoindre cette foule de passionées par la robotique et l'IA!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>
            <small>Réseaux et données</small>
            </h3>
            <p>Tu es interessé par la conçeption des données et l'échange d'informations?<p> Alors ce club est fait pour toi!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; PickMYClub</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
      </script>
      <script type="text/javascript">

/** Fonction basculant la visibilité d'un élément dom
* @parameter anId string l'identificateur de la cible à montrer, cacher
*/
function toggle(anId)
{
	node = document.getElementById(anId);
	if (node.style.visibility=="visible")
	{
		// Contenu caché, le montrer
		node.style.visibility = "hidden";
		// Optionnel rétablir la hauteur
	}
	else
	{
		// Contenu visible, le cacher
		node.style.visibility = "visible";
        // Optionnel libérer l'espace
	}
}

</script>
  </body>

</html>
