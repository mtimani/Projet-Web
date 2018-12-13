function responsiveFunction() {
    var x = document.getElementById("menu");
    if (x.className === "barrenav") {
        x.className += " responsif";
    } else {
        x.className = "barrenav";
    }
}