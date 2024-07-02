<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    $errors = [];

    if (empty($nom)) {
        $errors[] = "Le champ 'Nom' est requis.";
    } else if (!preg_match("/^[a-zA-Z]+$/", $nom)) {
        $errors[] = "Le champ 'Nom' ne doit contenir que des lettres.";
    }

    if (empty($prenom)) {
        $errors[] = "Le champ 'Prénom' est requis.";
    } else if (!preg_match("/^[a-zA-Z]+$/", $prenom)) {
        $errors[] = "Le champ 'Prénom' ne doit contenir que des lettres.";
    }

    if (empty($dob)) {
        $errors[] = "Le champ 'Date d'anniversaire' est requis.";
    }

    if (empty($email)) {
        $errors[] = "Le champ 'Email' est requis.";
    }

    if (empty($telephone)) {
        $errors[] = "Le champ 'Téléphone' est requis.";
    } else if (!preg_match("/^[0-9]+$/", $telephone)) {
        $errors[] = "Le champ 'Téléphone' ne doit contenir que des chiffres.";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        $sql = "INSERT INTO users (firstname, lastname, dob, email, phone) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $prenom, $nom, $dob, $email, $telephone);

        if ($stmt->execute()) {
            echo "Inscription réussie";
        } else {
            echo "Erreur : " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>
