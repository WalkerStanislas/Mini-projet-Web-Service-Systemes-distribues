<?php 
    // demarrer une session
    session_start(); 

    // Vérifier si l'utilisateur a cliqué sur le lien de déconnexion
    if (isset($_GET['logout'])) {
      // Détruire toutes les variables de session
      $_SESSION = array();

      // Supprimer le cookie de session
      if (ini_get("session.use_cookies")) {
          $params = session_get_cookie_params();
          setcookie(session_name(), '', time() - 42000,
              $params["path"], $params["domain"],
              $params["secure"], $params["httponly"]
          );
      }

      // Détruire la session
      session_destroy();

      // Rediriger l'utilisateur vers une autre page après la déconnexion
      header("Location: index.php"); // Remplacez "index.php" par l'URL de la page vers laquelle vous souhaitez rediriger l'utilisateur après la déconnexion
      exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>Forum Elevage GUOULGUE ROOGUO</title>
  </head>
  <body>
    <header class="header" id="header">
      <div class="row">
        <div class="container">
          <div class="header-content">
            <div class="logo">
              <a href="index.php">
                <p>GUOULGUE ROOGUO</p>
              </a>
            </div>
            <div class="nav-search">
              <div class="form-group">
                <input type="text" placeholder="Rechercher une Communauté" />
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
            <div class="nav-group">
              <ul>
                <li>
                  <a href="#" onclick="openPopup()"><i class="fa-solid fa-comment"></i></a>
                </li>
                  <?php echo getUserIsConect() ?> 
                <li>
                  <a href="?logout=1"><i class="fa-solid fa-power-off"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <section class="left">
            <h2>Ces discussions pourraient vous intérésser</h2>
  

              <div class="inner-left">
                <?php include 'forum.php'; ?>
              </div>
            


          </section>
          <section class="right">
            <div class="box first">
              <h3>Forum d'Elevage GUOULGUE ROOGUO</h3>
              <span>EPO-2024</span>
              <p>
                Bienvenue sur notre Forum. GUOULGUE ROOGUO est crée pour un partage d'expérience, pour une discussion entre passioné(e)s
                Vous trouverez différentes communautés que vous pourrez y intégrer.
              </p>
              <div class="stats">
                <div>
                  <h4> <?php echo number_format(getPostCount()); ?> </h4>
                  <span>posts</span>
                </div>
                <div>
                  <h4>79.4k</h4>
                  <span>Membres</span>
                </div>
              </div>
              <div class="buttons">
                <a href="#" class="btn btn-red"
                  ><i class="fa-solid fa-user-large"></i>Rejoindre une communauté</a
                >
                <a href="#" class="btn btn-white"
                  ><i class="fa-solid fa-store"></i>Agrandissez votre business</a
                >
              </div>
            </div>
            <div class="box top-forums">
              <h3>Les meilleurs communautés</h3>
              <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
              <div class="inner-box">
                <h4><a href="#">Discussions</a></h4>
                <div class="stats">
                  <div class="stat comments">
                    <i class="fa-solid fa-comment"></i><span> 709.4k</span>
                  </div>
                  <div class="stat views">
                    <i class="fa-regular fa-eye"></i><span>104.4M</span>
                  </div>
                </div>
              </div>
              <div class="inner-box">
                <h4><a href="#">Discussions Techniques</a></h4>
                <div class="stats">
                  <div class="stat comments">
                    <i class="fa-solid fa-comment"></i><span> 395.7k</span>
                  </div>
                  <div class="stat views">
                    <i class="fa-regular fa-eye"></i><span>124.2M</span>
                  </div>
                </div>
              </div>
              <div class="inner-box">
                <h4><a href="#">member introductions</a></h4>
                <div class="stats">
                  <div class="stat comments">
                    <i class="fa-solid fa-comment"></i><span> 178.9k</span>
                  </div>
                  <div class="stat views">
                    <i class="fa-regular fa-eye"></i><span>22.1M</span>
                  </div>
                </div>
              </div>
              <div class="inner-box">
                <h4><a href="#">rides and events</a></h4>
                <div class="stats">
                  <div class="stat comments">
                    <i class="fa-solid fa-comment"></i><span> 5.3k</span>
                  </div>
                  <div class="stat views">
                    <i class="fa-regular fa-eye"></i><span>1.6M</span>
                  </div>
                </div>
              </div>
              <div class="inner-box">
                <h4><a href="#">canadian riders</a></h4>
                <div class="stats">
                  <div class="stat comments">
                    <i class="fa-solid fa-comment"></i><span> 4.2k</span>
                  </div>
                  <div class="stat views">
                    <i class="fa-regular fa-eye"></i><span>1.1M</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="box top-contributors">
              <h3>top contributors this month</h3>
              <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
              <div class="inner-box">
                <div class="img">
                  <img src="img/pouletPicture.jpg" alt="" />
                </div>
                <div class="details">
                  <a href="#">Captain D</a>
                  <span>202 replies</span>
                </div>
              </div>
              <div class="inner-box">
                <div class="img">
                  <img src="img/pouletPicture.jpg" alt="" />
                </div>
                <div class="details">
                  <a href="#">oldguy</a>
                  <span>196 replies</span>
                </div>
              </div>
              <div class="inner-box">
                <div class="img">
                  <img src="img/pouletPicture.jpg" alt="" />
                </div>
                <div class="details">
                  <a href="#">Inferno</a>
                  <span>174 replies</span>
                </div>
              </div>
            </div>
            <div class="box recommended-communities">
              <h3>recommended communities</h3>
              <div class="inner-box">
                <div class="img">
                  <img src="img/pouletPicture.jpg" alt="" />
                </div>
                <div class="details">
                  <a href="#">Jeep Forum</a>
                  <span>718k+ members</span>
                </div>
              </div>
              <div class="inner-box">
                <div class="img">
                  <img src="img/pouletPicture.jpg" alt="" />
                </div>
                <div class="details">
                  <a href="#">VWVortex Volkswagen Forum</a>
                  <span>2M+ members</span>
                </div>
              </div>
              <div class="inner-box">
                <div class="img">
                  <img src="img/pouletPicture.jpg" alt="" />
                </div>
                <div class="details">
                  <a href="#">Climbing</a>
                  <span>50+ members</span>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </main>
    <footer>
      <div class="container">
        <ul>
          <li><a class="footDeco" href="#">Accueil</a></li>
          <li><a class="footDeco" href="#">Contact</a></li>
          <li><a class="footDeco" href="#">Politique de confidentialité</a></li>
        </ul>
      </div>
    </footer>
    <div class="overlay">
      <div class="login" id="login">
        <div class="top">
          <h2>Connexion</h2>
          <i class="fa-solid fa-xmark close"></i>
        </div>
        <div class="row">
          <div class="content">
            <div class="login-left">
              <form action="#" method="POST">
                <input type="text" placeholder="Nom d'utilisateur" name="username" required />
                <div class="form-group">
                  <input type="password" placeholder="Mot de passe" name="password" required />
                  <div><i class="fa-regular fa-eye"></i> <span>Voir</span></div>
                </div>
                <a href="#">Mot de passe oublié?</a>
                <div class="remember">
                  <input type="checkbox" name="remember" value="1" checked />
                  <label for="remember">Rester connecté</label>
                </div>
                <button type="submit" class="btn btn-red" >Se connecter</button>

                <?php
                // Vérifier si le formulaire a été soumis
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $actual_username = ""; 
                  // Récupérer les valeurs du formulaire
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    // Connexion à la base de données
                    $servername = "localhost";
                    $username_db = "root";
                    $password_db = "";
                    $dbname = "forumelevage";

                    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

                    // Vérifier la connexion
                    if ($conn->connect_error) {
                        die("Connexion échouée: " . $conn->connect_error);
                    }

                    // Préparer et exécuter la requête SQL pour vérifier l'identité de l'utilisateur
                    $sql = "SELECT * FROM utilisateurs WHERE username = '$username' AND password = '$password'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "Identité vérifiée. L'utilisateur est connecté.";
                        $_SESSION['username'] = $username;
                        // Rediriger vers une page sécurisée ou exécuter d'autres actions après la connexion réussie
                    } else {
                        echo "Identifiants incorrects. Veuillez réessayer.";
                        // Afficher un message d'erreur ou rediriger vers une autre page en cas d'identifiants incorrects
                    }

                    // Fermer la connexion à la base de données
                    $conn->close();
                }
                ?>

              </form>
            </div>
            <div class="line"></div>
            <div class="login-right">
              <a href="#" class="btn"
                ><i class="fa-brands fa-square-facebook"></i>
                <span>Se connecter avec Facebook</span></a
              >
              <a href="#" class="btn"
                ><img src="img/download.png" /><span>
                Se connecter avec Google</span
                ></a
              >
            </div>
          </div>
          <div class="bottom">
            <h4>Nouveau frorum d'élevage?</h4>
            <a href="subscribe.html">Rejoindre maintenant</a>
          </div>
        </div>
      </div>
    </div>

    <div class="postOverlay" id="postOverlay" onclick="closePopup()"></div>

    <div class="popup-container" id="postPopup">
        <h2 align="center">Nouveau Post</h2>
        <i class="fa-solid fa-xmark close" onclick="closePopup()"></i>
        <form action="#" method="POST">
          <label for="titre">Titre</label>
          <input type="text" id="titre" name="titre" required>
			    <label for="category">Catégorie</label>
          <input type="text" id="category" name="category" required>
          <button class="btn btn-red">Valider</button>
        </form>
    </div>

    <script
      src="https://kit.fontawesome.com/9e5ba2e3f5.js"
      crossorigin="anonymous">
    </script>
    <script src="js/index.js"></script>


    <?php
      // Function to retrieve the number of posts from the database
      function getPostCount() {
        // You need to replace the database connection details with your own
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "forumelevage";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to count the number of posts
        $sql = "SELECT COUNT(*) AS count FROM discussions";

        // Execute the query
        $result = $conn->query($sql);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        // Fetch the result
        $row = $result->fetch_assoc();
        // Close the database connection
        $conn->close();
        // Return the count of posts
        return $row["count"];
    } else {
        // Close the database connection
        $conn->close();
        // Return 0 if there was an error
        return 0;
    }
}
function getUserIsConect(){
  if (isset($_SESSION['username'])){
      // Afficher le nom d'utilisateur
      echo '<li> <span> <h2 style= "color: white;">' . $_SESSION['username'] . '</h2></span> </li>';
  } else{
    // Afficher le lien de connexion
    echo '<li class="join"><a href="#"><i class="fa-solid fa-user"></i><span>Se connecter / Rejoindre</span></a></li>';
  }
}
?>
  </body>
</html>
