function responsiveFunction() { // Fonction qui ajoute la classe "responsif" ou l'enlève si elle a déjà été rajoutée
    var x = document.getElementById("menu");
    if (x.className === "barrenav") {
        x.className += " responsif";
    } else {
        x.className = "barrenav";
    }
}