// PROJECTO DE GRUPO

//ligação com o firefox
function testaBrowser() {

    //navigator.userArgent:mostra um texto acerca da versão do browser
    //indexOf: procura no texto uma determinada palavra, uma expressão

    //!=1 : se for igual a -1 nao encontrei se for diferente a -1 encontrei

    if (navigator.userAgent.indexOf("Firefox") != -1 ||
        navigator.userAgent.indexOf("Chrome") != -1
    ) {
        //browser ok
    } else {
        //browser nao é correto
        window.location = "pagina2.php";
        //window.location: reencaminhar automaticamente para outras páginas!!!
    }
}
//mapa

function myFunction(divObj) {
    divObj.style.background = "white";
}

function myMap() {
    var viseu = {lat: 40.6749575, lng: -7.8997866};
    var santiago = {lat: 40.6749575, lng: -7.8997866};

    var map = new google.maps.Map(document.getElementById('map'), {
        center: viseu,
        scrollwheel: false,
        zoom: 0
    });

    var directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
    });


    var request = {
        destination: santiago,
        origin: viseu,
        travelMode: 'DRIVING'
    };


    var directionsService = new google.maps.DirectionsService();
    directionsService.route(request, function (response, status) {
        if (status == 'OK') {
            directionsDisplay.setDirections(response);
        }
    });
}

//login

$(document).ready(function () {
    $(".zona2").css("left", "-200%");
    $(".z2").on("click", function (event) {
        $(".zona2").animate({
            "left": "+200%"
        });
    });

    $(".z3").on("click", function (event) {
        $(".zona2").animate({
            "left": "-200%"
        });
    });


    // Attach Button click event listener
    $("#login").click(function () {
        // show Modal
        $("#mymodal").modal('show');
    });

    $("#registo").click(function () {
        // show Modal
        $("#mymodal2").modal('show');
    });

    $('#form-registo').submit(function (event) {
        event.preventDefault(); // evitar refresh da página
        var form = event.target; // o target do evento tem o objeto do form
        // fazer um post para o PHP com os dados do form
        $.post('registo.php',
            {
                nome: form.nome.value,
                localizacao: form.localizacao.value,
                email: form.email.value,
                username: form.username.value,
                password: form.password.value,
                password_confirmacao: form.password_confirmacao.value
            })
            .done(function (response) {
                // O registo foi bem sucedido e foi feito o login automaticamente -> fazer refresh
                window.location.reload();
            })
            .fail(function (response) {
                // o registo falhou, mostar um erro
                alert(response.responseJSON.erro);
            });
        return false;
    });

    $('#form-login').submit(function (event) {
        event.preventDefault(); // evitar refresh da página
        var form = event.target; // o target do evento tem o objeto do form
        // fazer um post para o PHP com os dados do form
        $.post('login.php',
            {
                username: form.username.value,
                password: form.password.value
            })
            .done(function (response) {
                // O login foi bem sucedido -> fazer refresh
                window.location.reload();
            })
            .fail(function (response) {
                // o registo falhou, mostar um erro
                alert(response.responseJSON.erro);
            });
        return false;
    });

    $('#logout').click(function () {
        $.get('logout.php', function () {
            window.location.reload();
        });
    });

});

//Registo
function registoHandler(event, form) {
    event.preventDefault();
    event.stopPropagation();
}