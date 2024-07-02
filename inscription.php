<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
    <script src="validation.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="traitement.php" onsubmit="return validateForm()">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            <span class="error" id="nomError"></span>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
            <span class="error" id="prenomError"></span>

            <label for="dob">Date d'anniversaire</label>
            <input type="date" id="dob" name="dob" required>
            <span class="error" id="dobError"></span>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
            <span class="error" id="emailError"></span>

            <label for="telephone">Téléphone</label>
            <input type="text" id="telephone" name="telephone" placeholder="Entrez votre numéro" required>
            <span class="error" id="telephoneError"></span>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>
