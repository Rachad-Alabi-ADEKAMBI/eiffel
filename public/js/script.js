function displayMenu() {
    document.getElementById("header__list").style.display = "block";
    document.getElementById("open").style.display = "none";
    document.getElementById("close").style.display = "block";

}

function closeMenu() {
    document.getElementById("header__list").style.display = "none";
    document.getElementById("close").style.display = "none";
    document.getElementById("open").style.display = "block";

}