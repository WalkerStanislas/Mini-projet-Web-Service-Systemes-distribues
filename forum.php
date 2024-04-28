<?php
// Connexion à la base de données (à remplacer par vos propres informations de connexion)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ForumElevage";

// Connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Requête pour récupérer les discussions depuis la base de données
$sql = "SELECT * FROM discussions";
$result = $conn->query($sql);

// Affichage des discussions
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="box">';
    echo '<div class="img">';
    echo '<img src="img/pouletPicture.jpg" alt="" />';
    echo '</div>';
    echo '<div class="details">';
    echo '<p>'.$row["category"].'</p>';
    echo '<h3>'.$row["title"].'</h3>';
    echo '<div class="sub-details">';
    echo '<span>'.$row["author"].'</span>';
    echo '<span>'.$row["posted_at"].'</span>';
    // Ajoutez d'autres détails de discussion ici
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>
