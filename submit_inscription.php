<?php
// Récupération des données du formulaire
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$location = htmlspecialchars($_POST['location']);

// Définir le nom du fichier pour enregistrer les inscriptions
$fichier = 'inscriptions.txt';

// Format d'enregistrement des données
$inscription = "Prénom: $prenom, Nom: $nom, Location de réplique: $location\n";

// Enregistrement dans le fichier
file_put_contents($fichier, $inscription, FILE_APPEND);

// Message de confirmation
echo "<h1>Merci pour votre inscription, $prenom !</h1>";
echo "<p>Votre inscription a été enregistrée avec succès pour la partie du 30 novembre 2024.</p>";
echo "<p><a href='inscription.html'>Retourner au formulaire d'inscription</a></p>";
?>
