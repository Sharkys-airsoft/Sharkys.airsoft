// Fonction pour afficher un message d'achat
function acheter() {
    alert("Merci pour votre achat ! Nous vous contacterons sous peu pour la livraison.");
}

// Fonction pour envoyer le formulaire de contact
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Merci pour votre message ! Nous vous répondrons sous peu.");
    document.getElementById("contactForm").reset();
});
