/*
$(document).ready(function () {
    $('button').click(function (e) {
        var button_classes, value = +$('.quality-counter').val();
        button_classes = $(e.currentTarget).prop('class');
        if (button_classes.indexOf('up_count') !== -1) {
            value = (value) + 1;
        } else {
            value = (value) - 1;
        }
        value = value < 0 ? 0 : value;
        $('.quality-counter').val(value);
    });
    $('.quality-counter').click(function () {
        $(this).focus().select();
    });
});

$(document).ready(function () {
    $('button').click(function (e) {
        var button_classes, value = +$('.product-quantity').val();
        button_classes = $(e.currentTarget).prop('class');
        if (button_classes.indexOf('up_count') !== -1) {
            value = (value) + 1;
        } else {
            value = (value) - 1;
        }
        value = value < 0 ? 0 : value;
        $('.product-quantity').val(value);
    });
    $('.product-quantity').click(function () {
        $(this).focus().select();
    });
});
*/

$(document).ready(function () {

    document.querySelector(".down_count").setAttribute("disabled", "disabled");
    var max = parseInt(document.getElementById("p_q").max);
    var quantity = 1;
    var price = document.getElementById("p_p").innerText;

    function priceTotal() {
        var total = quantity * price;
        document.getElementById("t_t").innerText = (Math.round(total * 100) / 100).toFixed(2);
    }

    document.querySelector(".up_count").addEventListener("click", function () {
        quantity = document.getElementById("p_q").value;
        if (quantity < max) {
            quantity++;
        }

        document.getElementById("p_q").value = quantity;

        if (quantity > 1) {
            document.querySelector(".down_count").removeAttribute("disabled");
            document.querySelector(".down_count").classList.remove("disabled")
        }

        priceTotal()
    })

    document.querySelector(".down_count").addEventListener("click", function () {

        quantity = document.getElementById("p_q").value;
        quantity--;
        document.getElementById("p_q").value = quantity

        if (quantity == 1) {
            document.querySelector(".down_count").setAttribute("disabled", "disabled")
        }

        priceTotal()
    })
});

function zeroQuantity() {
    document.getElementById("p_q").value = 1;
    document.getElementById("t_t").innerHTML = document.getElementById("p_p").innerHTML;
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

function AdminNav1() {
    var w = document.getElementById("adminSection1");
    var x = document.getElementById("adminSection2");
    var y = document.getElementById("adminSection3");
    var z = document.getElementById("adminSection4");

    w.style.display = "block";
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "none";
}

function AdminNav2() {
    var w = document.getElementById("adminSection1");
    var x = document.getElementById("adminSection2");
    var y = document.getElementById("adminSection3");
    var z = document.getElementById("adminSection4");

    w.style.display = "none";
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
}

function AdminNav3() {
    var w = document.getElementById("adminSection1");
    var x = document.getElementById("adminSection2");
    var y = document.getElementById("adminSection3");
    var z = document.getElementById("adminSection4");

    w.style.display = "none";
    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";
}

function AdminNav4() {
    var w = document.getElementById("adminSection1");
    var x = document.getElementById("adminSection2");
    var y = document.getElementById("adminSection3");
    var z = document.getElementById("adminSection4");

    w.style.display = "none";
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "block";
}

function add() {
    var num = cart_item_qty.getAttribute('data-number');
    num++;
    cart_item_qty.setAttribute('data-number', num);
}