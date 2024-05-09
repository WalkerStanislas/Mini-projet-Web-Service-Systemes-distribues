<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/register.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>Document</title>
  </head>
  <body>
    <header class="header" id="header">
      <div class="row">
        <div class="container">
          <div class="header-content">
            <div class="logo">
              <a href="index.php"
                ><p>GUOULGUE ROOGUO</p></a></a>
            </div>
            <div class="nav-search">
              <div class="form-group">
                <input type="text" placeholder="Rechercher une communauté" />
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
            <div class="nav-group">
              <ul>
                <li>
                  <a href="#"><i class="fa-solid fa-comment"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-solid fa-list-ul"></i></a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-solid fa-user"></i>
                    <span>Connecter / Rejoindre</span>
                  </a>
                </li>
                <li>
                  <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="register">
        <div class="container">
          <div class="row">
            <form action="#" method="post">
              <h2>Inscription</h2>
              <div class="form-group">
                <input type="text" name="username" id="" placeholder="Nom d'utilisateur" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="" placeholder="Mot de Passe" required>
              </div>
              <span>Le mot de passe est obligatoire.</span>
              <div class="form-group check">
                <input type="checkbox" name="" id="update" checked>
                <label for="update">Recevoir des notifications par mail</label>
              </div>
              <div class="form-group check">
                <input type="checkbox" name="" id="terms">
                <label for="terms">J'accepte les conditions et la politique de confidentialité.</label>
              </div>
              <button type="submit" class="btn btn-red">S'inscrire</button>
              <?php
                // Vérifier si le formulaire a été soumis
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupérer les valeurs du formulaire
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $email = $_POST["email"];


                    // Connexion à la base de données
                    $servername = "localhost";
                    $username_db = "root";
                    $password_db = "root";
                    $dbname = "forumelevage";

                    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

                    // Vérifier la connexion
                    if ($conn->connect_error) {
                        die("Connexion à la base données échouée: " . $conn->connect_error);
                    }

                    // Préparer et exécuter la requête SQL pour vérifier l'identité de l'utilisateur
                    $sql = "INSERT INTO utilisateurs (username, password, email) VALUES('$username', '$password', '$email')";
                    $result = $conn->query($sql);

                    if ($result === TRUE) {
                      echo "Enregistrement réussi.";
                      // Vous pouvez rediriger l'utilisateur vers une autre page ici si nécessaire
                    } else {
                        echo "Erreur lors de l'enregistrement: " . $conn->error;
                    }

                    // Fermer la connexion à la base de données
                    $conn->close();
                }
                ?>

            </form>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="container">
        <ul>
          <li><a class="footDeco" href="index.php">Accueil</a></li>
          <li><a class="footDeco" href="#">Contact</a></li>
          <li><a class="footDeco" href="#">Politique de confidentialité</a></li>
        </ul>
        <p align="center">
        GUOULGUE ROOGUO, l'élevage à la portée de tous
        </p>
      </div>
    </footer>
    <script
      src="https://kit.fontawesome.com/9e5ba2e3f5.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
