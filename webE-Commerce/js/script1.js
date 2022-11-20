function MyProducts1() {
    var x = document.getElementById("my_products1");
    var y = document.getElementById("my_products2");
    var z = document.getElementById("my_products3");

    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
}
function MyProducts2() {
    var x = document.getElementById("my_products1");
    var y = document.getElementById("my_products2");
    var z = document.getElementById("my_products3");

    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";
}
function MyProducts3() {
    var x = document.getElementById("my_products1");
    var y = document.getElementById("my_products2");
    var z = document.getElementById("my_products3");

    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "block";
}

function description() {
    var x = document.getElementById("dec1");
    var y = document.getElementById("dec2");
    var z = document.getElementById("dec3");

    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
}
function reviews() {
    var x = document.getElementById("dec1");
    var y = document.getElementById("dec2");
    var z = document.getElementById("dec3");

    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";
}
function info() {
    var x = document.getElementById("dec1");
    var y = document.getElementById("dec2");
    var z = document.getElementById("dec3");

    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "block";
}

function verifyPassword() {

    var p = document.getElementById("signup_p").value;
    var cp = document.getElementById("signup_c_p").value;

    if (p != cp) {
        alert("Passwords did not Match");
        return false;
    }
    return true;
}