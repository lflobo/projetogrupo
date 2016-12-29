
<?php

require_once 'lib/functions.php';

// necessário para armazenar valores em $_SESSION
session_start();

?>

<html xmlns:background-color="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>Casa do Povo - Viseu</title>

    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="estilos/pagina1.css" rel="stylesheet">

    <!-- carregar fontes do google-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <script src="scripts/jquery-3.1.1.js"></script>
    <script src="scripts/pagina1.js"></script>
    <script src="scripts/processing.js"></script>

</head>

<body onload="testaBrowser();">
<!-- para so haver ligação no firefox-->

<!--coloquei a nav aqui em cima para nao sofrer alteração do bootstrap e para ficar a ocupar a página completa-->


<nav class="navbar navbar-light bg-faded" style="background:#99cccc">
    <a class="navbar-brand" href="#">
        <div class="navbar-header" id="navbar">
            <a class="nav navbar-nav" href="#" style="padding: left;">
                <canvas data-processing-sources="scripts/logotipo.js"></canvas>
            </a>
        </div>
    </a>
    <ul class="nav navbar-nav" style="float: right;">

        <li class="nav-item active">
            <a class="nav-link" href="#m3">Sobre nós <span class="sr-only"></span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#m2">Galeria</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com"
               id="supportedContentDropdown" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">Actividades</a>
            <ul class="dropdown-menu" aria-labelledby="supportedContentDropdown" style="background: #99cccc; font-family: Arial">
                <li><a class="dropdown-item" href="#m4">Teatro e Dança</a></li>
                <li><a class="dropdown-item" href="#m4">Exposições</a></li>
                <li><a class="dropdown-item" href="#m4">Concertos</a></li>
                <li><a class="dropdown-item" href="#m4">Cinema e Vídeo</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#m6">Contactos</a>
        </li>

        <li class="nav-divider"></li>

        <!-- Verificar se a sessão é válida -->
        <?php if (is_session_login_valid()) { ?>
        <li class="nav-item">
            <a href="#" id="logout"><i class="glyphicon glyphicon-remove"></i> Logout (<?php echo $_SESSION['user']['username']; ?>)</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <a href="#" id="login"><i class="glyphicon glyphicon-user"></i> Login</a>
        </li>
        <?php }?>

        <li class="nav-item">
            <a href="#" id="registo"><i class="glyphicon glyphicon-registration-mark"></i> Registo</a>
        </li>
    </ul>

    <!-- botões antigos de login
    <button type="button" class="btn btn"data-toogle="modal" data-target=".bs-example-modal-sm" class="login_buggon" id="login" style="float: right">
        <span id="m1">login</span>

        <button type="button" class="btn btn " data-toogle="modal" data-target=".bs-example-modal-sm" class="registo_button" id="registo" style="float: right">
            <span id="m1">Registo</span>
        </button>
    </button>
    -->

</nav>

<div class="btn-group">
    <button class="btn btn-primary" data-toogle="modal" data-target=".bs-example-modal-sm" id="registo">Registo</button>
</div>

<div id="mymodal" class="modal fade bs-example-modal-md">
    <div class="modal-dialog modal-md">
        <div class="modal-content" style="background-color:#aliceblue;">
            <div class="modal-body">

                <form id="form-login" name="form_login" method="post" class="form-group">
                    <label>Login:</label>
                    <input type="text" name="username" class="form-control"/>
                    <br/>

                    <label>Password:</label>
                    <input type="password" name="password" class="form-control">

                    <input type="submit" value="A enviar" class="btn btn-primary">
                    <input type="reset" value="Sair" class="btn btn-danger z3">
                </form>
            </div>
        </div>
    </div>
</div>

<div id="mymodal2" class="modal fade bs-example-modal-md">
    <div class="modal-dialog modal-md">
        <div class="modal-content" style="background-color:#aliceblue;">
            <div class="modal-body">

                <form id="form-registo" name="form_registo" class="form-group">
                    <label>Nome:</label>

                    <input type="text" name="nome" class="form-control"/>
                    <br/>
                    <label>Localização:</label>

                    <input type="text" name="localizacao" class="form-control"/>
                    <br/>
                    <label>Email:</label>

                    <input type="text" name="email" class="form-control"/>
                    <br/>
                    <label>Username:</label>

                    <input type="text" name="username" class="form-control"/>
                    <br/>
                    <label>Password:</label>

                    <input type="password" name="password" class="form-control">
                    <label>Confirmaçao Password:</label>

                    <input type="password" name="password_confirmacao" class="form-control">
                    <input type="submit" value="A enviar" class="btn btn-primary">
                    <input type="reset" value="Sair" class="btn btn-danger z3">
                </form>
            </div>
        </div>
    </div>
</div>
<br/>
</div>

</nav>

<br/>
<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-xs-2"></div>
        <div class="col-lg-8 hidden-xs banner hidden-print">
            <canvas style="margin-top: 20px;" data-processing-sources="scripts/pagina2.js"></canvas>
        </div>
        <div class="col-lg-2 col-xs-2"></div>

    </div>
</div>

<br/>
<br/>

<!--colocamos aqui uma galeria de imagens em carousel-->
<div id="m2" class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div id="myCarousel" class="carousel slide hidden-print" data-ride="carousel">
                <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <!--Referente aos marcadores(bolinhas) na parte inferior central
                    da foto que identifica em que fotografia estamos-->
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                </ol>

                <!--vamos ter a galeria numa box em lista-->
                <div class="carousel-inner" role="listbox">
                    <!--colocamos aqui por oredem todas as fotografias que queremos dispor com o texto centrar e uma
                    pequena descrição-> sete ao todo-->
                    <div class="item active">
                        <img src="image/img1.jpg" alt="concerto">
                        <div class="carousel-caption">
                            <h3>concertos</h3>
                            <p>
                                Temos concertos todas as semanas
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/img2.jpg" alt="arte de museu">
                        <div class="carousel-caption">
                            <h3>Arte de Museu</h3>
                            <p>
                                Temos diferentes tipos de exposições em diversos museus por toda a cidade,
                                veja no mapa para saber onde encontrar.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/img4.jpg" alt="arte de rua">
                        <div class="carousel-caption">
                            <h3>Arte de Rua</h3>
                            <p>
                                Como não podia faltar temos diversas artes rurais feitas por diversos artistas,
                                vai de intervenções sociais e pinturas de rua
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/img3.jpg" alt="performances">
                        <div class="carousel-caption">
                            <h3>Performances</h3>
                            <p>
                                Ao longo de todo o ano vai haver diversas performances que vao ser apresentadas
                                com antecedência aqui no site, esteja atento.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/img5.jpg" alt="performances">
                        <div class="carousel-caption">
                            <h3>Dança</h3>
                            <p>
                                Diferentes tipos de dança e estilos para aprender ou apenas para ver
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/img6.jpg" alt="performances">
                        <div class="carousel-caption">
                            <h3>teatro</h3>
                            <p>
                                Poderá desfrutar de belos teatros interiores e exteriores
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/img7.jpg" alt="performances">
                        <div class="carousel-caption">
                            <h3>cinema</h3>
                            <p>
                                Cartazes actualizados e estreias desejáveis
                            </p>
                        </div>
                    </div>

                </div>

                <!--Referente as setas que se encontram do lado esquerdo e do lado direito do website
                para podermos manualmente trocar de foto -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span
                            class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span
                            class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-xs-2"></div>
        <div class="col-lg-8 hidden-xs banner hidden-print">
            <canvas style="margin-top: 20px;" data-processing-sources="scripts/pagina2.js"></canvas>
        </div>
        <div class="col-lg-2 col-xs-2"></div>

    </div>
</div>

<br/>
<br/>

<div id="m3" class="container">
    <!--uma div class row para determinar outra coluna que neste caso ocupa 100%da largura -->
    <div class="row">
        <!--esta div vai conter uma pequena caixa de texto centrada-->
        <div class="col-lg-12 col-xs-12">
            <!--titulo-->
            <h1>Sobre nós</h1>
            <!--descrição-->
            <p>
                Casa do povo é uma instituição da freguesia de Viseu que foi criada com o intuito de dar a
                conhecer principalmente á população de Viseu e arredores, diversos eventos que se manifestam em toda
                a cidade, todo o ano.
                Neste âmbito desenvolvemos actividades de promoção social,cultural e moral.
                A casa do povo está vocacionada para a divulgação de actividades mais artisticas, portanto
                há uma pré selecção do genero de eventos que aqui são divulgados entre os quais encontramos exposições
                , concertos, o teatro e a dança, o cinema e o video.

            </p>
        </div>
    </div>
    <br/>
    <br/>
    <!-- barra separadora-->
    <div class="row">
        <div class="col-lg-12 col-xs-12 z30">

        </div>
    </div>
    <br/>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-xs-2"></div>
            <div class="col-lg-8 hidden-xs banner hidden-print">
                <canvas style="margin-top: 20px;" data-processing-sources="scripts/pagina2.js"></canvas>
            </div>
            <div class="col-lg-2 col-xs-2"></div>

        </div>
    </div>

    <br/>
    <br/>

</div>
<br/>
<br/>
<div id="m4" class="container">
    <div class="row">
        <div id="cima" class="col-lg-12 col-xs-12 z4">
            <h1>Actividades</h1>
            <p>
                Estas actividades decorrem todo o ano e nõs queremos dar a conhecer o dia a hora e o local para
                se sentir bem vindo, porque sem si, nada disto seria possivel. Venha visitar, divertir-se e fazer
                parte deste grande grupo que se chama Viseu
            </p>

            <div class="col-lg-2 col-xs-2"></div>
        </div>
        <br/>

        <div class="col-md-3 col-xs-6 col-xs-12 box">
            <div class="c1">
                <!-- colocar a imagem em processing da mascara-->
                <span id="desenho1"></span>
                <canvas data-processing-sources="processing/icon_mascara/icon_mascara.pde"
                        style="border-radius: 40%; "></canvas>

            </div>
            <div class="infos">
                <h2> Teatro e Dança</h2>
                <p>
                    Mantenha-se informado de todas as peças de teatro realizadas
                    no distrito de Viseu, assim como as horas a que serão
                    realizadas e onde adquirir os bilhetes.
                </p>
                <br/>
                <br/>
                <p>
                    Saiba mais <a href="https://www.facebook.com/groups/1198716390210494/?fref=ts"> AQUI</a>
                </p>

            </div>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 box">

            <div class="c1">
                <!-- colocar a imagem em processing exposições-->
                <span id="desenho4"></span>
                <canvas data-processing-sources="processing/icon_quadro/icon_quadro.pde"
                        style="border-radius: 40%; "></canvas>

            </div>
            <div class="infos">
                <h2>Exposições</h2>

                <p>
                    Fique a par de todas as exposições de fotografia, street Art, exposições de artes
                    plásticas, apresentações de projectos de alunos da Escola Superior de Educação.
                    Cultive a sua cultura.
                </p>
                <br/>
                <p>
                    Saiba mais <a href="https://www.facebook.com/groups/1198716390210494/?fref=ts"> AQUI </a>
                </p>

            </div>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 box">

            <div class="c1">
                <!-- colocar a imagem em processing concertos-->
                <span id="desenho3"></span>
                <canvas data-processing-sources="processing/icon_guitarra/icon_guitarra.pde"
                        style="border-radius: 40%; "></canvas>

            </div>
            <div class="infos">
                <h2>Concertos</h2>
                <p>
                    Se é interessado em música, e gosta de estar sempre a par
                    dos ritmos ao vivo, mantenh-se aqui a par de todos os concertos realizados
                    no distrito de Viseu
                </p>
                <br/>
                <p>
                    Saiba mais <a href="https://www.facebook.com/groups/1198716390210494/?fref=ts">AQUI</a>
                </p>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 box">

            <div class="c1">
                <span id="desenho2"></span>
                <canvas data-processing-sources="processing/icon_pipoca/icon_pipoca.pde"
                        style="border-radius: 40%; "></canvas>

            </div>
            <div class="infos">
                <h2>Cinema e video</h2>
                <p>
                    Venha fazer um serão diferente e assista a todas as estreias
                    no cinema e todas as sessoes de curtas no carmo'82
                </p>
                <br/>
                <br/>
                <br/>
                <p>
                    Saiba mais <a href="https://www.facebook.com/groups/1198716390210494/?fref=ts">AQUI</a>
                </p>

                <br/>
            </div>

        </div>
    </div>
    <br/>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-xs-2"></div>
            <div class="col-lg-8 hidden-xs banner hidden-print">
                <canvas style="margin-top: 20px;" data-processing-sources="scripts/pagina2.js"></canvas>
            </div>
            <div class="col-lg-2 col-xs-2"></div>

        </div>
    </div>

    <br/>
    <br/>

    <div class="container">
        <!-- barra separadora-->
        <div class="row">
            <div class="col-lg-12 col-xs-12 z30">

            </div>
        </div>

        <!--opinião dos associados-->
        <div id="m5" class="container">
            <br>
            <br>
            <!--carosel automatico-->
            <div id="myCarouselauto" class="carousel slide hidden-print" data-ride="carousel" data-interval="59000">
                <ol class="carousel-indicators">
                    <li data-target="#myCarouselauto" data-slide-to="div0" class="active"></li>
                    <li data-target="#myCarouselauto" data-slide-to="div1"></li>
                    <li data-target="#myCarouselauto" data-slide-to="div2"></li>
                    <li data-target="#myCarouselauto" data-slide-to="div3"></li>
                    <li data-target="#myCarouselauto" data-slide-to="div4"></li>
                    <li data-target="#myCarouselauto" data-slide-to="div5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <!--0 opinião -->
                        <div class="well">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="image/assoc/1.jpg"
                                         style="width: 100px; height:100px; border-radius: 50%; position: left;">
                                </div>
                                <div class="col-md-12">
                                    <h2 style="position: center"> Joana Costa</h2>
                                    <p id="p1">
                                        Gostei bastante do website, ajudou-me imenso na minha mudança para Viseu a
                                        conhecer melhor a cidade.
                                        <br>
                                        <br/>
                                        <strong> Bragança,22 de Agosto de 2015</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <!--1 opiniao-->

                        <div class="well">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="image/assoc/2.jpg"
                                         style="width: 100px; height:100px; border-radius: 50%; position: left;">
                                </div>
                                <div class="col-md-12">
                                    <h2 style="position: center"> Nádia Araújo</h2>
                                    <p>
                                        O site é interessante a nivel cultural, eu sou de Viseu e por vezes gostaria de
                                        saber os
                                        eventos que decorrem anualmente.
                                        <br>
                                        <br/>
                                        <strong> Viseu,1 de janeiro de 2014</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item" background-color:>
                        <!--2 opiniao-->

                        <div class="well">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="image/assoc/3.jpg"
                                         style="width: 100px; height:100px; border-radius: 50%; position: left;">
                                </div>
                                <div class="col-md-12">
                                    <h2 style="position: center"> Jorge Fernandez</h2>
                                    <p>
                                        Eu acho que o website deveria ser mais completo, não acho que seja muito
                                        apelativo,mas gostei da iniciativa, e espero que esta crítica sirva
                                        para haver uma melhoria.
                                        <br>
                                        <br/>
                                        <strong> Viseu,20 de Setembro de 2013</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <!--3 opiniao-->

                        <div class="well">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="image/assoc/4.jpg"
                                         style="width: 100px; height:100px; border-radius: 50%; position: left;">
                                </div>
                                <div class="col-md-12">
                                    <h2 style="position: center"> Amélio Rodrigues</h2>
                                    <p>
                                        gostei muito das actividades realizadas pela casa do povo de viseu, exelente
                                        iniciativa

                                        <br>
                                        <br/>
                                        <strong> Viseu,27 de Agosto de 2016</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <!--4 opiniao-->

                        <div class="well">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="image/assoc/5.jpg"
                                         style="width: 100px; height:100px; border-radius: 50%; position: left;">
                                </div>
                                <div class="col-md-12">
                                    <h2 style="position: center">Patrícia Costa </h2>
                                    <p>
                                        Sou mãe e adoraria ter mais actividade na vida dos meus filhos, hoje em dia
                                        estão sempre agarrados ás novas tecnologias, e por vezes saber deste tipo
                                        de actividades proporciona um ambiente em familia mais unido.
                                        <br>
                                        <br/>
                                        <strong> Satão,22 de Outubro de 2015</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <!--5 opiniao-->

                        <div class="well">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="image/assoc/6.jpg"
                                         style="width: 100px; height:100px; border-radius: 50%; position: left;">
                                </div>
                                <div class="col-md-12">
                                    <h2 style="position: center"> João Costa</h2>
                                    <p>
                                        Apreciei as actividades no entanto poderiam também ter actividades ligadas
                                        ao desporto.
                                        <br>
                                        <br/>
                                        <strong> Abraveses,12 de Agosto de 2016</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--acaba a opinião dos associados-->
                <br/>
                <br/>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-xs-2"></div>
                        <div class="col-lg-8 hidden-xs banner">
                            <canvas style="margin-top: 20px;" data-processing-sources="scripts/pagina2.js"></canvas>
                        </div>
                        <div class="col-lg-2 col-xs-2"></div>

                    </div>
                </div>

                <br/>
                <br/>

                <div id="m6" class="container">
                    <div class="row hidden-print">
                        <!-- contactos, ou seja temos de fazer um formulario -->
                        <div class="col-lg-6 col-xs-6">
                            <h1> Contactos</h1>
                            <h5>E-mail:casadopovo@viseu.pt</h5>
                            <h5>Visite a nossa página do <a
                                        href="https://www.facebook.com/groups/1198716390210494/?fref=ts"> Facebook</a>
                            </h5><!--link do facebook que ainda nao criamos -->
                            <br/>
                            <form name="f1" method="post" action="" class="form-group">
                                <!--na action vamos ligar uma pagina php que dê acesso a outra página web-->
                                <h4>Formulário do contacto:</h4>
                                Nome:
                                <input class="btn btn-btn" type="text" name="c1"/ class="form-control">
                                <br/>
                                <br/>
                                E-mail:
                                <input class="btn btn-btn" type="text" name="c1"/ class="form-control">
                                <br/>
                                <br>
                                Mensagem:
                                <br/>
                                <textarea name=""></textarea>
                                <br/>
                                <br/>
                                <input onclick="" class="btn btn-primary" type="submit" value="enviar">
                                <input class="btn btn-danger" type="reset" value="apagar">

                            </form>

                        </div>
                        <!--MAPA -->
                        <div class="col-lg-6 col-xs-6 hidden-print">
                            <h6>Santiago, Viseu, Portugal</h6>
                            <div id="map" style="height: 500px">

                                <script>
                                    // esperar que o doc seja carregado
                                    $(document).ready(function () {
                                        myMap();
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-xs-2"></div>
                        <div class="col-lg-8 hidden-xs banner hidden-print">
                            <canvas style="margin-top: 20px;" data-processing-sources="scripts/pagina2.js"></canvas>
                        </div>
                        <div class="col-lg-2 col-xs-2"></div>

                    </div>
                </div>

                <br/>
                <br/>
                <!--Mapa do site -->
                <div class="container">
                    <div class="row hidden-print">
                        <div class="col-lg-12 col-md-12 col-xs-12 ">
                            <h4>Mapa do Site</h4>

                            <canvas data-processing-sources="scripts/mapadosite.js"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-xs-2"></div>
                    <div class="col-lg-8 hidden-xs banner hidden-print">
                        <canvas style="margin-top: 20px;" data-processing-sources="scripts/pagina2.js"></canvas>
                    </div>

                </div>

                <br/>
                <br/>

                <!--Footer -->
                <div id="footer" onclick="myFunction(this)"
                     style="min-height: 80px; display:block; position: left; margin: 30px;">
                    <!--margin 30px é pra ter um rebordo e nao ficar apegado a outras divs-->
                    <div id="m7" class="container">
                        <div class="row hidden-print">

                            <!--criei 6 colunas para poder meter os programas utilizados para a conclusão do trabalho -->
                            <div class="col-sm-2">
                                <div class="foot-header">
                                    Tecnologias usadas
                                </div>

                            </div>
                            <div class="col-sm-2">
                                <div class="foot-header">
                                    <a href="http://www.aptana.com/products/studio3/download.html">Apatana Studio 3 -
                                        3.6.1</a>
                                    <br/>
                                    <a href="https://v4-alpha.getbootstrap.com/getting-started/download/">bootstrap
                                        3.3.7</a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="foot-header">
                                    <a href="https://www.apachefriends.org/download.html">xampp v3-2-2</a>
                                </div>

                            </div>
                            <div class="col-sm-2">
                                <a href="http://jquery.com/download/">JQuery-3.1.1</a>
                            </div>
                            <div class="col-sm-2">
                                <div class="foot-header">
                                    <a href="https://raw.githubusercontent.com/processing-js/processing-js/v1.4.8/processing.js">Processing.js
                                        script</a>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="foot-header">
                                    <a href="https://processing.org/download/">Processing 3.2.1</a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <ul class="nav pull-right scroll-top">
                    <li>
                        <a href="#" title="voltar para o inicio"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFEC1kwZ0VuAh7qlW9zdxtBThyeL5n1AA&callback=myMap"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.js"></script>


    <!-- Start of StatCounter Code for Default Guide -->
    <script type="text/javascript">
        var sc_project = 11179734;
        var sc_invisible = 0;
        var sc_security = "0b229c30";
        var scJsHost = (("https:" == document.location.protocol) ?
            "https://secure." : "http://www.");
        document.write("<sc" + "ript type='text/javascript' src='" +
            scJsHost +
            "statcounter.com/counter/counter.js'></" + "script>");
    </script>
    <noscript>
        <div class="statcounter"><a title="shopify analytics" href="http://statcounter.com/shopify/" target="_blank">
                <img class="statcounter"
                     src="//c.statcounter.com/11179734/0/0b229c30/0/"
                     alt="shopify analytics"></a>
        </div>
    </noscript>
    <!-- End of StatCounter Code for Default Guide -->


</body>
</html>
