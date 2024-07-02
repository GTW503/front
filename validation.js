function validateForm() {
    var isValid = true;

    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var dob = document.getElementById('dob').value;
    var email = document.getElementById('email').value;
    var telephone = document.getElementById('telephone').value;

    var namePattern = /^[a-zA-Z]+$/;
    var phonePattern = /^[0-9]+$/;

    document.getElementById('nomError').textContent = '';
    document.getElementById('prenomError').textContent = '';
    document.getElementById('dobError').textContent = '';
    document.getElementById('emailError').textContent = '';
    document.getElementById('telephoneError').textContent = '';

    if (!nom) {
        document.getElementById('nomError').textContent = 'Le champ "Nom" est requis.';
        isValid = false;
    } else if (!namePattern.test(nom)) {
        document.getElementById('nomError').textContent = 'Le nom ne doit contenir que des lettres.';
        isValid = false;
    }

    if (!prenom) {
        document.getElementById('prenomError').textContent = 'Le champ "Prénom" est requis.';
        isValid = false;
    } else if (!namePattern.test(prenom)) {
        document.getElementById('prenomError').textContent = 'Le prénom ne doit contenir que des lettres.';
        isValid = false;
    }

    if (!dob) {
        document.getElementById('dobError').textContent = 'Le champ "Date d\'anniversaire" est requis.';
        isValid = false;
    }

    if (!email) {
        document.getElementById('emailError').textContent = 'Le champ "Email" est requis.';
        isValid = false;
    }

    if (!telephone) {
        document.getElementById('telephoneError').textContent = 'Le champ "Téléphone" est requis.';
        isValid = false;
    } else if (!phonePattern.test(telephone)) {
        document.getElementById('telephoneError').textContent = 'Le téléphone ne doit contenir que des chiffres.';
        isValid = false;
    }

    return isValid;
}
