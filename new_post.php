<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Récupérer les valeurs du formulaire
	$title = $_POST["title"];
	$category = $_POST["category"];
	$username = $_POST['author'];

	// Connexion à la base de données
	$servername = "localhost";
	$username_db = "root";
	$password_db = "root";
	$dbname = "forumelevage";

	$conn = new mysqli($servername, $username_db, $password_db, $dbname);

	// Vérifier la connexion
	if ($conn->connect_error) {
		die("Connexion échouée: " . $conn->connect_error);
	}

	// Préparer et exécuter la requête SQL pour vérifier l'identité de l'utilisateur
	$sql = "INSERT INTO discussions (title, category, author) VALUES ('$title', '$category', '$username')";
	$result = $conn->query($sql);
	$conn->close();

	if ($result === TRUE) {
		echo "Post réussi";
		// Rediriger vers une page sécurisée ou exécuter d'autres actions après la connexion réussie
	} else {
		echo "Erreur lors de l'enregistrement du post. Veuillez réessayer.";
		// Afficher un message d'erreur ou rediriger vers une autre page en cas d'identifiants incorrects
	}
	
	// Fermer la connexion à la base de données
	echo "<script>window.location.href='index.php'</script>";
}  else {
    // If form is not submitted, show an error message or redirect
    echo "<script>alert('Form not submitted!')</script>";
}
?>