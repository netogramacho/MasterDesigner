<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Master Designer | Reality Show | MobileTop</title>

    <link rel="shortcut icon" href="assets/img/logo_principal_branco.png">


    <!-- IMPORTANDO FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- SWEET ALERT -->
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.min.css">

    <!-- AOS -->
    <link rel="stylesheet" type="text/css" href="assets/css/aos.css">

    <!-- MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <!-- Rubik -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="assets/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css?v=<?php echo time();?>">

</head>

<body>
    <div id="menu" class="navbar">
        <div class="container">
            <div class="col-md-6 col-10">
                <a href="javascript:home();">
                    <img class="d-xs-none logo" src="assets/img/logo_principal_branco.png">
                </a>
            </div>
            <div class="col-md-6 col-12">
                <ul class="d-xs-none menu_txt">
                    <a href="javascript:inscricao();">
                        <li>
                            <span>Inscreva-se</span>
                        </li>
                    </a>
                    <li class="dropdown">
                        <span>
                            Redes Sociais
                        </span>
                        <ul class="dropdown-menu">
                            <!-- <a href="">
                                <li>
                                    <span>
                                        FaceBook
                                    </span>
                                </li>
                            </a>   -->
                            <a target="_blank" href="https://www.instagram.com/masterdesigner.tv/">
                                <li>
                                    <span>
                                        Instagram
                                    </span>
                                </li>
                            </a>  
                            <!-- <a href="">
                                <li>
                                    <span>
                                        Twitter
                                    </span>
                                </li>
                            </a>   -->
                            <a target="_blank" href="https://www.youtube.com/channel/UCk7n6cUA7oFYs9TRW-NZfHQ">
                                <li>
                                    <span>
                                        YouTube
                                    </span>
                                </li>
                            </a>    
                        </ul>
                    </li>
                    <li class="dropdown">
                        <span>
                            O Programa
                        </span>
                        <ul class="dropdown-menu">
                            <a href="javascript:comofunciona();">
                                <li>
                                    <span>
                                        Como funciona?
                                    </span>
                                </li>
                            </a>  
                            <a href="javascript:mariferri();">
                                <li>
                                    <span>
                                        Mari Ferri
                                    </span>
                                </li>
                            </a>    
                            <!-- <a href="">
                                <li>
                                    <span>
                                        Participantes
                                    </span>
                                </li>
                            </a>     -->
                        </ul>
                    </li>
                    <!-- <a>
                        <li class="dropdown">
                            <span>
                                Novidades
                            </span>
                            <ul class="dropdown-menu">
                                <a href="">
                                    <li>
                                        <span>
                                            Notas
                                        </span>
                                    </li>
                                </a>  
                                <a href="">
                                    <li>
                                        <span>
                                            Fotos
                                        </span>
                                    </li>
                                </a>  
                                <a href="">
                                    <li>
                                        <span>
                                            Videos
                                        </span>
                                    </li>
                                </a>    
                            </ul>
                        </li>
                    </a> -->
                </ul>
            </div>
        </div>
    </div>

    <!-- MOBILE -->
    <div class="topBar d-md-none">
        <div id="btn_menu" onclick="abrirMenu();" class="btn-menu d-md-none">
            <i class="fa fa-bars"></i>
        </div>
        <div class="menu-mobile-img">
            <img src="assets/img/logo_principal_branco.png" alt="Menu Mobile">
        </div>
    </div>

    <div onclick="fecharMenu();" id="menu_mobile_overlay">

    </div>
    <div id="leftsidebar">
        <ul>
            <li class="dropdown-mob">
                O Programa
                <ul class="dropdown-list">
                    <a href="javascript:comofunciona();">
                        <li>Como funciona?</li>
                    </a>  
                    <a href="javascript:mariferri();">
                        <li>Mari Ferri</li>
                    </a>    
                </ul>
            </li>
            <li class="dropdown-mob">
                Redes Sociais
                <ul class="dropdown-list">
                    <!-- <a href="">
                        <li>FaceBook</li>
                    </a>   -->
                    <a target="_blank" href="https://www.instagram.com/masterdesigner.tv/">
                        <li>Instagram</li>
                    </a>  
                    <!-- <a href="">
                        <li>Twitter</li>
                    </a>   -->
                    <a target="_blank" href="https://www.youtube.com/channel/UCk7n6cUA7oFYs9TRW-NZfHQ">
                        <li>YouTube</li>
                    </a>    
                </ul>
            </li>
            <a href="javascript:inscricao();">
                <li>
                    Inscreva-se
                </li>
            </a>
        </ul>
    </div>

    <div class="container">
        <!-- CARROSEL DESK -->
        <div id="CarouselDesk" class="carousel d-xs-none slide myCarousel" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#CarouselDesk" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#CarouselDesk" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#CarouselDesk" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#CarouselDesk" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner-slider">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-banner img-banner-1">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txt-banner-slider">
                                    <div class="txt-banner-1">
                                        <h1 style="font-weight:800;color:#ff3535;">NÃO É <br> SORTEIO!</h1>
                                        <div onclick="inscricao();" class="btn btn-transparent">
                                            Inscreva-se
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-slider">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-banner img-banner-2">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txt-banner-slider">
                                    <div class="txt-banner-2">
                                        <h1>Ganhe uma sala <br> reformada e mobiliada!</h1>
                                        <h5>INSCRIÇÕES LIMITADAS</h5>
                                        <h6>
                                            VÁLIDAS SOMENTE PARA: <br>
                                            São José dos Campos, Caçapava, Jacareí e Taubaté.
                                        </h6>
                                        <div onclick="inscricao();" class="btn btn-transparent">
                                            Inscreva-se
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-slider">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="txt-banner-slider">
                                    <div class="txt-banner-2">
                                        <h1>O primeiro Reality Show <br> 2 em 1 do Brasil.</h1>
                                        <h5>INSCRIÇÕES LIMITADAS</h5>
                                        <div onclick="inscricao();" class="btn btn-transparent">
                                            Inscreva-se
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-banner img-banner-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-slider">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-banner img-banner-4">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txt-banner-slider">
                                    <div class="txt-banner-4">
                                        <h1>Mari Ferri é quem <br> vai comandar a atração.</h1>
                                        <h5>INSCRIÇÕES LIMITADAS</h5>
                                        <div onclick="inscricao();" class="btn btn-transparent">
                                            Inscreva-se
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARROSEL MOBILE -->
        <div id="myCarouselMob" class="carousel slide d-md-none" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarouselMob" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarouselMob" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarouselMob" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarouselMob" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/logo_principal.png" alt="Master Designer">
                    <!-- <div class="txt-banner carousel-caption">
                        <div>
                            <h1>NÃO É SORTEIO!</h1>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="carousel-item">
                    <img src="assets/img/sala_estar.png" alt="Master Designer">
                    <div class="cortina-preta"></div>
                    <div class="txt-banner carousel-caption">
                        <div>
                            <h1>Ganhe uma sala reformada e mobiliada!</h1>
                            <h5>INSCRIÇÕES LIMITADAS</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/antes_depois.png" alt="Master Designer">
                    <div class="cortina-preta"></div>
                    <div class="txt-banner carousel-caption">
                        <div>
                            <h1>O primeiro Reality Show 2 em 1 do Brasil.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                        <img src="assets/img/mari_ferri_png.png" alt="Master Designer">
                        <div class="cortina-preta"></div>
                    <div class="txt-banner carousel-caption">
                        <div>
                            <h1>Mari Ferri é quem vai comandar atração.</h1>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>


        <!-- BANNERS FIXOS -->
        <div class="corpo">
            <div class="row">
                <div class="col-md-10">
                    <div class="carousel slide myCarousel-fixos" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner-slider">
                                    <div class="row">
                                        <div data-aos="fade-right" class="col-md-6">
                                            <div class="text-left txt-banner-fixo">
                                                <div class="txt-banner-fixo-1">
                                                    <h1>Ganhe uma nova sala!</h1>
                                                    <h5>
                                                        Inscreva sua casa, você poderá ganhar uma sala desenhada pelos maiores designer de interiores, totalmente de graça. <br>
                                                        Um ambiente novo para revigorar a sua vida familiar.
                                                    </h5>
                                                    <h6 style="color:#ff0000;">
                                                        VÁLIDAS SOMENTE PARA: São José dos Campos, Caçapava, Jacareí e Taubaté.
                                                    </h6>
                                                    
                                                    <div onclick="inscricao();" class="btn btn-transparent">
                                                        Inscreva-se aqui
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-aos="fade-left" class="col-md-6">
                                            <div class="img-banner img-banner-fixo-1">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="comofunciona" class="carousel slide myCarousel-fixos" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner-slider">
                                    <div class="row">
                                        <div data-aos="fade-right" class="col-md-4">
                                            <div class="img-banner img-banner-fixo-2">

                                            </div>
                                        </div>
                                        <div data-aos="fade-left" class="col-md-8">
                                            <div class="txt-banner-fixo">
                                                <div class="text-right txt-banner-fixo-2">
                                                    <h1>Master Designer é o primeiro Reality Show 2 em 1 do Brasil!</h1>
                                                    <h5>
                                                        Primeiro porque serão 4 equipes de arquitetos e designers de interiores profissionais que disputarão o grande prêmio do programa e o troféu do Master Design.
                                                    </h5>
                                                    <h5>
                                                        Segundo, o Master Design vai selecionar 06 famílias que irão receber gratuitamente uma nova sala de estar, totalmente reformada e mobiliada pelo programa.
                                                    </h5>
                                                    <h5>
                                                        A equipe de profissionais que vencer a disputa com o projeto do ambiente reformado e decorado, serão os ganhadores do programa.
                                                    </h5>
                                                    <h5>
                                                        Então não perca tempo, <span onclick="inscricao();" class="faca-inscricao">clique aqui</span> e faça sua inscrição agora mesmo!
                                                    </h5>
                                                    <h6 style="color:#ff0000;">
                                                        INSCRIÇÕES LIMITADAS
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="mariferri" class="carousel slide myCarousel-fixos" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div style="height:auto" class="carousel-item active">
                                <div class="banner-slider">
                                    <div class="row">
                                        <div data-aos="fade-right" class="col-md-7">
                                            <div class="txt-banner-fixo">
                                                <div class="text-left txt-banner-fixo-3">
                                                    <h1>Mari Ferri vai estar no comando do Reality!</h1>
                                                    <h5>
                                                        Mariana Ferri é apaixonada por desafios e tudo o que faz, faz com muita dedicação!
                                                    </h5>
                                                    <h5>
                                                    Você conhece ela quando trata de temas ligados a nutrição, saúde, bem-estar, maternidade, estética e beleza.
                                                    </h5>
                                                    <h5>
                                                        Mari é conectada com o público, sempre trazendo novidades para o bem esta social.
                                                    </h5>
                                                    <h5>
                                                        Bonita, carismática e comunicativa, ela está conosco e vai comandar o <b>MASTER DESEIGNER BRASIL!</b>
                                                    </h5>
                                                    <div onclick="inscricao();" class="btn btn-transparent">
                                                        Inscreva-se aqui
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-aos="fade-left" class="col-md-5">
                                            <iframe src="https://www.youtube.com/embed/lVP6kRNWSq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="propagandas">
                                <a href="https://mobiletopbrasil.com.br/">
                                    <img src="assets/img/prop_1.png" alt="Propaganda MobileTop">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="formulario">
                        <div data-aos="zoom-in" class="formulario">
                            <h2>Faça sua inscrição!</h2>
                            <form id="cadastro_familia" action="return false;">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="nome_completo">Nome completo:</label>
                                            <input placeholder="Nome completo" type="text" name="nome_completo" id="nome_completo">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="idade">Idade:</label>
                                            <input placeholder="Idade" type="tel" name="idade" id="idade">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="celular">Celular:</label>
                                            <input placeholder="Celular" type="tel" name="celular" id="celular">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                    <label for="email">E-mail:</label>
                                    <input placeholder="E-mail" type="text" name="email" id="email">
                                        </div>
                                        <div class="col-md-4">
                                    <label for="cpf">CPF:</label>
                                    <input placeholder="CPF" type="tel" name="cpf" id="cpf">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="cep">CEP:</label>
                                            <input placeholder="CEP" type="tel" name="cep" id="cep">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="endereco">Endereço:</label>
                                            <input placeholder="Endereço" type="text" name="endereco" id="endereco">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="numero">Número:</label>
                                            <input placeholder="Número" type="tel" name="numero" id="numero">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="bairro">Bairro:</label>
                                            <input placeholder="Bairro" type="text" name="bairro" id="bairro">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="cidade">Cidade:</label>
                                            <input placeholder="Cidade" type="text" name="cidade" id="cidade">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="estado">Estado:</label>
                                            <input maxlength="2" placeholder="Estado (ex:SP)" type="text" name="estado" id="estado">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="num_pessoas">Quantas pessoas vivem na residência?</label>
                                            <input maxlength="1" placeholder="Quantas pessoas vivem na residência?" type="tel" name="num_pessoas" id="num_pessoas">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="num_comodos">Quantos cômodos tem a residência?</label>
                                            <input placeholder="Quantos cômodos tem a residência?" type="tel" name="num_comodos" id="num_comodos">
                                        </div>
                                    </div>
                                </div>
                                <div style="display:none;" class="moradores">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>A residências tem algum problema de estrutura? Ex.: rachaduras</label>
                                            <input class="width-auto" value="0" type="radio" name="prob_estrutura" id="prob_estrutura_nao" checked>
                                            <label class="width-auto" for="prob_estrutura_nao">Não</label>
                                            <input class="width-auto" value="1" type="radio" name="prob_estrutura" id="prob_estrutura_sim">
                                            <label class="width-auto" for="prob_estrutura_sim">Sim</label>
                                        </div>
                                        <div style="display:none;" id="div_prob_estrutura" class="col-md-12">
                                            <label for="prob_estrutura">Qual?</label>
                                            <input type="text" id="prob_estrutura">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tem problemas de infiltração? Ex.: mofo – goteiras</label>
                                            <input class="width-auto" value="0" type="radio" name="prob_infiltracao" id="prob_estrutura_nao" checked>
                                            <label class="width-auto" for="prob_infiltracao_nao">Não</label>
                                            <input class="width-auto" value="1" type="radio" name="prob_infiltracao" id="prob_estrutura_sim">
                                            <label class="width-auto" for="prob_infiltracao_sim">Sim</label>
                                        </div>
                                        <div style="display:none;" id="div_prob_infiltracao" class="col-md-12">
                                            <label for="prob_infiltracao">Qual?</label>
                                            <input type="text" id="prob_infiltracao">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tem problemas com pragas? Ex.: Cupim</label>
                                            <input class="width-auto" value="0" type="radio" name="prob_pragas" id="prob_estrutura_nao" checked>
                                            <label class="width-auto" for="prob_pragas_nao">Não</label>
                                            <input class="width-auto" value="1" type="radio" name="prob_pragas" id="prob_estrutura_sim">
                                            <label class="width-auto" for="prob_pragas_sim">Sim</label>
                                        </div>
                                        <div style="display:none;" id="div_prob_pragas" class="col-md-12">
                                            <label for="prob_pragas">Qual?</label>
                                            <input type="text" id="prob_pragas">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="area_salaEstar">Quantos metros quadrados tem a sala de estar? Ex.: 3x4m ou 12m²</label>
                                            <input placeholder="Quantos metros quadrados tem a sala de estar?" type="text" name="area_salaEstar" id="area_salaEstar">
                                        </div>
                                    </div>
                                </div>
                                <h2>Queremos te conhecer melhor:</h2>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="desc_familia">Neste espaço fale um pouco sobre sua família, sonhos e desejos e o porque vocês merecem estar no Master Designer.</label>
                                            <textarea name="desc_familia" id="desc_familia"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <h2>Anexe as seguintes fotos:</h2>
                                <div class="form-group">
                                    <div class="row">
                                        <!-- FOTO 1 -->
                                        <label>01 de toda a família e mais 04 imagens da sala de estar, mostrando ela completa com os móveis, detalhes das paredes, piso, teto e portas e janelas.</label>
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <div id="btn_familia" onclick="escolherFoto('img_familia')" class="btn btn-transparent">
                                                Foto com a família
                                                <div class="confirm-upload">Sucesso</div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div onclick="removerUpload('img_familia','btn_familia');" class="btn btn-transparent-3">
                                                <i class="far fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <!-- FOTO 2 -->
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <div id="btn_sala_1" onclick="escolherFoto('img_sala_1')" class="btn btn-transparent">
                                                Foto da sala de estar completa
                                                <div class="confirm-upload">Sucesso</div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div onclick="removerUpload('img_sala_1', 'btn_sala_1');" class="btn btn-transparent-3">
                                                <i class="far fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <!-- FOTO 3 -->
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <div id="btn_sala_2" onclick="escolherFoto('img_sala_2')" class="btn btn-transparent">
                                                Foto que apareça tetos e paredes
                                                <div class="confirm-upload">Sucesso</div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div onclick="removerUpload('img_sala_2', 'btn_sala_2');" class="btn btn-transparent-3">
                                                <i class="far fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <!-- FOTO 4 -->
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <div id="btn_sala_3" onclick="escolherFoto('img_sala_3')" class="btn btn-transparent">
                                                Foto que apareça piso e paredes
                                                <div class="confirm-upload">Sucesso</div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div onclick="removerUpload('img_sala_3','btn_sala_3');" class="btn btn-transparent-3">
                                                <i class="far fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <!-- FOTO 5 -->

                                        <div class="col-md-10 col-sm-10 col-10">
                                            <div id="btn_sala_4" onclick="escolherFoto('img_sala_4')" class="btn btn-transparent">
                                                Foto que apareça portas, janelas e paredes
                                                <div class="confirm-upload">Sucesso</div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <div onclick="removerUpload('img_sala_4', 'btn_sala_4');" class="btn btn-transparent-3">
                                                <i class="far fa-trash-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <input type="file" name="img_familia" id="img_familia" accept=".jpg, .jpeg, .png">
                                <input type="file" name="img_sala_1" id="img_sala_1" accept=".jpg, .jpeg, .png">
                                <input type="file" name="img_sala_2" id="img_sala_2" accept=".jpg, .jpeg, .png">
                                <input type="file" name="img_sala_3" id="img_sala_3" accept=".jpg, .jpeg, .png">
                                <input type="file" name="img_sala_4" id="img_sala_4" accept=".jpg, .jpeg, .png">
                                <div style="text-align:center;width:100%">
                                    <div onclick="cadastrar();" class="btn btn-transparent-2">Fazer Inscrição</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-xs-none col-md-2 propagandas">
                    <a href="https://mobiletopbrasil.com.br/">
                        <img src="assets/img/banner-lateral.jpeg" alt="Propaganda MobileTop">
                    </a>
                </div>
            </div>
        </div>
    </div>
        
        
    <footer id="divFooter" role="contentinfo" style="background: #231c1f;border-top: 3px solid #4f4f4f;">
        <address data-aos="zoom-in-up" style="color:#c1c1c1;background: #4f4f4f;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center">
                <a href="https://www.youtube.com/channel/UCk7n6cUA7oFYs9TRW-NZfHQ" target="_blank" title="YouTube Master Designer" class="facebook">
                <span class="follow"><img src="https://mobiletopbrasil.com.br/images/redes/youtube.png"></span>
                </a>
                <a href="https://www.instagram.com/masterdesigner.tv/" target="_blank" title="Instagram Master Designer" class="instagram">
                    <span class="follow"><img src="https://mobiletopbrasil.com.br/images/redes/instagram.png"></span>
                </a>
            </div>	
            <br>
            Master Designer | Reality Show | Mobile Top<br>
            © 2021 Todos os direitos reservados.<br><a href="https://started.mobi" target="_blank">Desenvolvimento Started Mobile</a>.        
        </address>
    </footer>


    
    <div id="loaderInterno" style="background-color: transparent; width: 100vw; height: 100vh; position: absolute; z-index: 999998; display:none;">
        <div class="d-flex justify-content-center " style="width: 100vw; height: 100vh; ">
            <div style="background:#eee;width:100px;height: 64px;text-align: center;position: fixed;top: calc(50vh - 50px);border-radius: 10px;border: 1px solid #adadad;">
                <div class="spinner-border align-self-center text-info" role="status" style="background: #eee;vertical-align: middle;margin-top: 6px;color:red!important;"></div>
                <span class="" style="font-size: 12px;color:#333!important">Carregando...</span>
            </div>
        </div>
    </div>
    

    <!-- JQUERY -->
    <script src="assets/js/jquery.js"></script>

    <!-- BOOTSTRAP -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- SWEET ALERT -->
    <script src="assets/js/sweetalert2.min.js"></script>

    <!-- MASK -->
    <script src="assets/js/jquery.mask.min.js"></script>

    <!-- AOS -->
    <script src="assets/js/aos.js"></script>
    
    
    <script src="assets/js/index.js?v=<?php echo time();?>"></script>
</body>

</html>