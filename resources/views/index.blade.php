
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinivida - A sua saúde tratada com respeito!</title>
    <link rel="shortcut icon" href="{{ asset('template/images/favicon/favicon.ico') }}">

    <!-- owl-carousel -->
    <link rel="stylesheet" href="../site/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../site/css/owl.theme.default.min.css">

    <!-- Responsive -->
		@include('partials._css')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <!-- Start of .preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- End of .preloader -->

    <!------------------------------------------------------------------------>


    <div class="page">

        <!-- Start of .header-top -->
        <header class="header-top">
            <div class="container">

                <!-- header-top__logo -->
                <div class="header-top__logo">
                    <a href="{{url("/")}}">
                        <img src="../site/images/logo.png" />
                    </a>
                </div>

                <div class="header-top__call">

                    <div class="header-top__call-item">
                        <svg width="24.375" height="24.343" viewBox="0 0 24.375 24.343">
                            <path id="phone.svg" class="header-top__call-icon cls-1"
                                d="M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z"
                                transform="translate(-809 -353.063)" /></svg>
                        <div class="header-top__call-text">

                            <a href="tel:{!! !empty($quemsomos->telefone) ? ( $quemsomos->telefone ) : '(99) 99160-1011' !!}">{!! !empty($quemsomos->telefone) ? ($quemsomos->telefone) : '(99) 99160-1011' !!}</a>
                            <a href="tel:{!! !empty($quemsomos->telefone2) ? ( $quemsomos->telefone2 ) : '(99) 3071-2081' !!}">{!! !empty($quemsomos->telefone2) ? ($quemsomos->telefone2) : '(99) 3071-2081' !!}</a>
                      </div>
                    </div>

                    <div class="header-top__call-item">
                        <svg width="18.88" height="25.719" viewBox="0 0 18.88 25.719">
                            <path id="address.svg" class="header-top__call-icon cls-1"
                                d="M1033.75,377.71l-7.99-11.282a9.433,9.433,0,1,1,16-.04Zm0-24.133a7.845,7.845,0,0,0-6.68,11.983l6.68,9.43,6.7-9.468A7.841,7.841,0,0,0,1033.75,353.577Zm0,11.78a3.927,3.927,0,1,1,3.93-3.928A3.931,3.931,0,0,1,1033.75,365.357Zm0-6.283a2.356,2.356,0,1,0,2.36,2.355A2.362,2.362,0,0,0,1033.75,359.074Z"
                                transform="translate(-1024.31 -352)" /></svg>
                        <div class="header-top__call-text">
                          <?php
                            $endereco_inteiro = ( $quemsomos->endereco_matriz );
                            $endereco_tamanho = strlen($endereco_inteiro);
                            $endereco_tamanho_1 = $endereco_tamanho / 2;
                            $endereco_tamanho_2 = $endereco_tamanho_1;
                            if ($endereco_tamanho % 2 <> 0) {
                              $endereco_tamanho_1 = $endereco_tamanho_1 - 0.5;
                              $endereco_tamanho_2 = $endereco_tamanho_2 + 0.5;
                            }
                            $endereco_metade_1 = substr($endereco_inteiro, 0, $endereco_tamanho_1);
                            $endereco_metade_2 = substr($endereco_inteiro, $endereco_tamanho_1, $endereco_tamanho_2);
                          ?>
                          <a href="{!! !empty($quemsomos->endereco_matriz_link) ? $quemsomos->endereco_matriz_link : '' !!}">{!! !empty($quemsomos->endereco_matriz) ? $endereco_metade_1 : 'Rua Alagoas, 198 - ' !!}</a>
                          <a href="{!! !empty($quemsomos->endereco_matriz_link) ? $quemsomos->endereco_matriz_link : '' !!}">{!! !empty($quemsomos->endereco_matriz) ? $endereco_metade_2 : 'Juçara - Imperatriz' !!}</a>

                        </div>
                    </div>

                    <div class="header-top__call-item">
                        <svg width="25.16" height="25.157" viewBox="0 0 25.16 25.157">
                            <path id="envelope.svg" class="header-top__call-icon cls-1"
                                d="M1239.84,377.423v-16.85l3.15-2.723v-5.556h18.87v5.556l3.14,2.723v16.85h-25.16Zm22.48-1.57-6.57-6.557-3.33,2.884-3.33-2.884-6.56,6.557h19.79Zm-20.91-1.11,6.49-6.478-6.49-5.614v12.092Zm1.58-14.814-1.16,1,1.16,1v-2.005Zm17.29,3.359v-9.424h-15.72v9.424h-0.01l7.87,6.813,7.87-6.813h-0.01Zm1.58-3.359v2.005l1.15-1Zm1.57,2.722-6.49,5.614,6.49,6.478V362.651Zm-11.8-4.076h1.58v1.571h-1.58v-1.571Zm4.72,1.571h-1.57v-1.571h1.57v1.571Zm-7.86-1.571h1.57v1.571h-1.57v-1.571Z"
                                transform="translate(-1239.84 -352.281)" /> </svg>
                        <div class="header-top__call-text">
                            <a href="mailto:{!! !empty($quemsomos->email) ? ($quemsomos->email) : 'contato@clinividaitz.com.br' !!}">{!! !empty($quemsomos->email) ? ($quemsomos->email) : 'contato@clinividaitz.com.br' !!}</a>
                        </div>
                    </div>

                </div>

            </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-logo">
                <a href="{{url("/")}}">
                    <img src="../site/images/logo.png" />
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <!-- <a class="navbar-brand" href="#">Marca escondida</a> -->
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#exames">Exames</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#equipe">Equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#convenio">Convênios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#localizacao">Localização</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Desativado</a>
                </li> -->
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form> -->
            </div>
        </nav>

        <header class="header-middle header-middle_white-transparent">
            <div class="container">

                <div class="navbar-logo">
                    <a href="{{url("/")}}">
                        <img src="../site/images/logo.png" />
                    </a>
                </div>

                

                <div class="navbar">

                    

                    <ul class="navbar__menu">
                        <li class="navbar__menu-item">
                            <a class="navbar__menu-link" href="#sobre">Quem Somos</a>

                        </li>
                        <li class="navbar__menu-item">
                            <a class="navbar__menu-link" href="#exames">Exames</a>

                        </li>
                        <li class="navbar__menu-item">
                            <a class="navbar__menu-link" href="#equipe">Equipe</a>

                        </li>
                        <li class="navbar__menu-item">
                            <a class="navbar__menu-link" href="#convenio">Convênios</a>

                        </li>

                        <li class="navbar__menu-item">
                            <a class="navbar__menu-link" href="#localizacao">Localização</a>

                        </li>

                        <li class="navbar__menu-item">
                            <a class="navbar__menu-link" href="#contato">Contato</a>

                        </li>

                    </ul>

                    <div class="navbar__right" style="height: 40px;">
                        <a href="https://api.whatsapp.com/send?phone=99991601011" class="btn btn_pink">AGENDE SUA CONSULTA</a>

                    </div>
                </div>

            </div>
        </header>

        <header class="header-bottom">

            <div class="header-bottom__banner owl-carousel owl-theme">
              @foreach($banners as $banner)
                <div class="slide-item">
                    <img src="{{ asset('uploads/banners/'. ($banner->image)) }}">
                    <div class="container">
                        <div class="slide-item__block">
                            <h1 class="slide-item__title">{{$banner->title}} <br><span>{{$banner->sub_title}}</span>
                            </h1>
                            <a href="https://api.whatsapp.com/send?phone=99991601011" class="btn btn_blue">AGENDE SUA CONSULTA</a>
                        </div>
                    </div>
                </div>
              @endforeach


            </div>

            <div class="services">
                <div class="container">
                    <div class="services__items owl-carousel owl-theme">

                      @foreach($especialidades as $especialidade)
                        <div class="services__outer-item">
                            <div class="services__item">
                                <div class="services__item-icon">
                                    <img src="{{ asset('uploads/especialidades/'. ($especialidade->image)) }}">
                                </div>
                                <h1 class="services__item-title">{{ $especialidade->nome }}</h1>
                                <p class="services__item-text">{{ $especialidade->descricao }}</p>
                            </div>
                        </div>
                      @endforeach

                    </div>
                </div>
            </div>

        </header>

        <section class="about">
            <div class="about__bg">
                <div class="icon">
                    <svg width="830" height="1013" viewBox="0 0 830 1013">
                        <path id="Shape-2.svg" class="cls-4"
                            d="M4175.59,2050a0.7,0.7,0,1,1,.7.7A0.7,0.7,0,0,1,4175.59,2050Zm95.42,217.06v3.96l-47.84-27.65-82.92,47.95,32.42,18.75a4.384,4.384,0,1,1,3.95,6.85v79.82a3.328,3.328,0,1,1-3.03,5.26l-64,37a10.175,10.175,0,1,1-17.95,0l-62.17-35.94a5.445,5.445,0,1,1-4.86-8.45V2321.1a8.568,8.568,0,1,1,7.56-13.13l52.74-30.49-58.99-34.11-98.63,57.02-100.34-58.01V2128.32l-98.64-57.03V1955.26l66.06-38.19-65.79-38.05a7.531,7.531,0,0,1-12.71,0l-62.86,36.35a7.275,7.275,0,1,1-12.93,0l-62-35.85a8.526,8.526,0,1,1-7.54-13.08v-69.66a9.333,9.333,0,1,1,8.23-14.28l64.5-37.29a3.67,3.67,0,0,1-.33-1.52,3.6,3.6,0,0,1,3.28-3.59v-72.85a11.081,11.081,0,0,1-9.41-16.32l-59.85-34.6a7.235,7.235,0,1,1-6.42-11.14v-10.96l-37.77,21.84L3440.99,1563h6.85l84.93,49.1,37.77-21.83V1563h0.66v26.89l46.5-26.89h6.85l-53.35,30.85v11.34a7.249,7.249,0,0,1,6.09,10.57l59.85,34.6a11.049,11.049,0,0,1,18.81,0l57.91-33.48a9.558,9.558,0,0,1-1.1-4.46,9.421,9.421,0,0,1,1.67-5.38L3638.25,1563h6.85l71.86,41.54a9.408,9.408,0,0,1,4.94-1.59V1563h0.65v39.95a9.466,9.466,0,0,1,9.06,8.24h0l83.36-48.19h6.84l-90.07,52.08v2.47l38.03,21.99,21.13,12.21a8.277,8.277,0,0,1,14,0l18.12-10.47,44.1-25.5h0l0.33,0.57-0.33-.57h0a7.3,7.3,0,0,1,6.13-10.63v-20.33L3835.51,1563h6.85l30.89,17.86V1563h0.66v18.24l53.38,30.86,84.93-49.1h6.85L3929,1615.08v29.01l12.3,7.11a9.378,9.378,0,0,1,15.92,0l17.16-9.92,39.97-23.11h0v-0.01a12.061,12.061,0,0,1,10.26-17.79V1563h0.65v37.37a12.069,12.069,0,0,1,10.27,17.8l36.95,21.37,24.22,14a4.724,4.724,0,0,1,7.83,0l18.31-10.59v-27.87L4032.76,1563h6.85l84.94,49.1,51.41-29.72V1563h0.66v18.99l32.86-18.99h6.85l-39.71,22.96v25.05a1.449,1.449,0,0,1-.33,2.86,1.417,1.417,0,0,1-1.05-.45l-48.98,28.31v85.42l96.91,56.03,47.84-27.65v3.96l-46.12,26.67v112.07l46.12,26.66v3.97l-47.84-27.65-96.91,56.03v112.07l96.91,56.04,47.84-27.66v3.97l-46.12,26.66V2240.4Zm-238.51,41.48a8.568,8.568,0,0,1-7.24,12.56v73.51a5.447,5.447,0,0,1,5.11,5.45,5.367,5.367,0,0,1-.57,2.43l62.17,35.95a10.168,10.168,0,0,1,17.29-.01l64-37.01a3.253,3.253,0,0,1-.29-1.36,3.333,3.333,0,0,1,2.99-3.32v-79.82a4.4,4.4,0,0,1-4.05-4.38,4.308,4.308,0,0,1,.43-1.9l-32.75-18.94-15.04,8.69-38.98-22.53Zm103.66-18.82-29.69-17.17a6.954,6.954,0,0,1-11.72,0l-5.76,3.33,35.56,20.56Zm-110.24-164.37h0l96.92-56.03V1957.24l-21.9-12.66v53.68a7.983,7.983,0,1,1-7.06,12.25l-60.43,34.94a9.655,9.655,0,1,1-17.03,0L3953.38,2009a4.962,4.962,0,1,1-4.45-7.72v-55.56L3929,1957.24v112.07l96.92,56.04h0Zm67.87-210.19-65.26-37.73a4.27,4.27,0,0,1-.9.95v19.85l48.46,28.02,24.2,13.99v-13.81A7.718,7.718,0,0,1,4093.79,1915.16Zm-67.87-13.95-76.33,44.13v55.94a4.987,4.987,0,0,1,4.12,7.15l63.04,36.45a9.637,9.637,0,0,1,16.37,0l60.43-34.94a7.985,7.985,0,0,1,6.74-11.68V1944.2Zm-76.33,25.72v14.44l74.61-43.14v-18.97a4.36,4.36,0,0,1-2.86-1.84l-10,5.79-54.82,31.7h0A8.212,8.212,0,0,1,3949.59,1926.93Zm-7.59-12.02-65.51-37.88a3.573,3.573,0,0,1-5.82,0l-38.48,22.25,46.64,26.97,48.46,28.02,21.64-12.51v-14.83A8.212,8.212,0,0,1,3942,1914.91Zm-76.05-131.49-15.42-8.92-20.15,11.66v112.07l1.15,0.67,38.82-22.44a3.559,3.559,0,0,1,2.9-5.04v-75.33a8.635,8.635,0,0,1-8.3-8.64A8.53,8.53,0,0,1,3865.95,1783.42Zm-35.57,456.98,96.91,56.04,96.91-56.04V2128.32l-29.36-16.98-67.55-39.05-48.46,28.01-48.45,28.02V2240.4Zm-98.64-283.16v112.08l96.92,56.03h0l96.92-56.04V1957.24l-7.49-4.33-89.33-51.65-27.33,15.8a3.9,3.9,0,0,1-6.78,3.81Zm-9.19-89.81a7.548,7.548,0,0,1,6.36,11.02l65.8,38.05a3.876,3.876,0,0,1,3.19-1.67c0.11,0,.22,0,0.33.01l28.72-16.61V1786.16l-50.91-29.44-45.16,26.11a9.832,9.832,0,0,1-8.33,14.44v70.16Zm-78.95-121.65-64.5,37.29a9.338,9.338,0,0,1-7.9,13.71v69.66a8.544,8.544,0,0,1,7.21,12.51l62,35.85a7.269,7.269,0,0,1,12.27,0l62.86-36.34a7.556,7.556,0,0,1,6.36-11.03v-70.16a9.832,9.832,0,0,1-8.33-14.44l-64.08-37.05A3.6,3.6,0,0,1,3643.6,1745.78Zm84.71-16.65V1619.68a9.448,9.448,0,0,1-14.12-2.23l-57.9,33.48a11.08,11.08,0,0,1-9.42,16.32v72.85a3.6,3.6,0,0,1,3.28,3.59,3.67,3.67,0,0,1-.33,1.52l30.11,17.41,33.97,19.64a9.8,9.8,0,0,1,16.65,0h0l44.83-25.92Zm69.27-64.66a8.288,8.288,0,0,1-7.95-8.29,8.372,8.372,0,0,1,.94-3.86l-18.11-10.47-40.72-23.54v108.84l47.06,27.21,13.76-7.96a5.86,5.86,0,0,1-.65-2.71,5.991,5.991,0,0,1,5.67-5.98v-73.24Zm-4.69,82.51-13.43,7.76,49.2,28.44,18.44-10.66-44.18-25.54A5.983,5.983,0,0,1,3792.89,1746.98Zm132.69-131.9-51.67-29.88v19.95a7.3,7.3,0,0,1,6.13,10.63l45.54,26.33v-27.03Zm0,27.79-45.87-26.52h0a7.283,7.283,0,0,1-12.26,0l-41.09,23.76-21.13,12.22a8.293,8.293,0,0,1-7,12.14v73.24a6,6,0,0,1,5.67,5.98,5.932,5.932,0,0,1-.65,2.72l28.04,16.21,16.47,9.52,70.33-40.66,7.49-4.33v-84.28Zm1.71,87.25-48.46,28.02-27.65,15.98,15.1,8.73a8.624,8.624,0,0,1,14.61,0l63.24-36.57a5.777,5.777,0,0,1-.61-2.59,5.689,5.689,0,0,1,1.19-3.5Zm21.64-64.54a9.4,9.4,0,0,1-7.96-13.81l-11.97-6.92v82.3l18.94,10.95a6.38,6.38,0,0,1,.99-0.14v-72.38Zm-4.47,81.27-63.24,36.57a8.657,8.657,0,0,1-7.31,12.67v75.33a3.558,3.558,0,0,1,3.23,3.55,3.685,3.685,0,0,1-.32,1.49l65.51,37.88a8.185,8.185,0,0,1,13.86,0l18.19-10.52,46.64-26.97h0a4.254,4.254,0,0,1-.43-1.88,4.356,4.356,0,0,1,3.61-4.3v-76.91a6.354,6.354,0,0,1-4.92-9.19l-65.23-37.72A5.734,5.734,0,0,1,3944.46,1746.85Zm75.4,36.79-25.02-14.47-40.28-23.28h0a3.389,3.389,0,0,1-.18.39l28.24,16.32,36.99,21.4v-0.01C4019.69,1783.87,4019.77,1783.76,4019.86,1783.64Zm80.43-122.75a4.707,4.707,0,0,1-4.39-4.71,4.8,4.8,0,0,1,.47-2.07l-21.2-12.26-39.97-23.11h0a12.029,12.029,0,0,1-20.52,0l-57.13,33.03a9.4,9.4,0,0,1-7.96,13.81v72.38a5.755,5.755,0,0,1,5.17,4.08l68.14,39.39a6.461,6.461,0,0,1,2.04-.33,6.316,6.316,0,0,1,3.14.83l67.71-39.14a4.905,4.905,0,0,1,4.5-4v-77.9Zm-3.75,85.54-65.95,38.13a6.366,6.366,0,0,1-2.96,8.64v78.35a4.348,4.348,0,0,1,1.66,3.42,4.474,4.474,0,0,1-.43,1.89l43.62,25.22,21.64,12.51a7.693,7.693,0,0,1,12.99,0l67.43-38.99a1.9,1.9,0,0,1-.11-0.63,1.859,1.859,0,0,1,1.53-1.83v-81.77a3.931,3.931,0,0,1-3.59-3.92,4.077,4.077,0,0,1,.37-1.67l-68.05-39.34A4.9,4.9,0,0,1,4096.54,1746.43Zm26.3-102.72-17.98,10.4a4.8,4.8,0,0,1,.47,2.07,4.723,4.723,0,0,1-4.39,4.72v77.89a5,5,0,0,1,1.3.26l20.6-11.9v-83.44Zm52.06-30.86a1.54,1.54,0,0,1-.06-0.43,1.457,1.457,0,0,1,1.12-1.41v-24.67l-49.7,28.74v25.89Zm-1.89,313.4,48.45-28.02V1786.16l-48.45-28.02-48.46-28.02-19.57,11.32a4.853,4.853,0,0,1,.54,2.25,4.985,4.985,0,0,1-.5,2.18l68.05,39.34a3.924,3.924,0,1,1,3.55,6.16v81.77a1.86,1.86,0,1,1-1.75,3.03l-67.43,38.99a7.718,7.718,0,0,1-6.5,11.27v14.19l23.61,13.65h0Zm48.45,202.07-48.45-28.02-48.46-28.01-48.46,28.01-48.46,28.02V2240.4l60.71,35.1,6.08-3.52a6.969,6.969,0,1,1,13.16-3.2,6.911,6.911,0,0,1-.78,3.2l30.02,17.36,84.64-48.94V2128.32Zm-45.17,2.82a6.365,6.365,0,1,1-6.35,6.37A6.365,6.365,0,0,1,4176.29,2131.14Zm-75.67,55.62a5.49,5.49,0,1,1,5.47-5.49A5.484,5.484,0,0,1,4100.62,2186.76ZM4236.88,1563l34.13,19.73v3.96L4230.03,1563h6.85ZM3570.87,2574.16a0.92,0.92,0,1,1-.92.92A0.924,0.924,0,0,1,3570.87,2574.16Z"
                            transform="translate(-3441 -1563)" /></svg>
                </div>
            </div>

            <div class="anchor" id="sobre" style="height: 60px; margin-top: -60px;"></div>
            <div class="container">
                <div class="about__our-misson wow fadeInLeft" data-wow-duration="1s">

                    <div class="about__our-misson-img">
                        <img src="../site/images/png/about-img.png">
                    </div>

                </div>

                <div class="about__text wow fadeInRight" data-wow-duration="1s">
                    <h4>Nossa história</h4>
                    <h1 class="section-title">Quem somos</h1>
                    <p>{!! !empty($quemsomos->quemsomos) ? ($quemsomos->quemsomos) : ' <br> A CLINIVIDA surgiu com o objetivo de cuidar de você. Nosso espaço foi planejado e projetado para seu conforto e bem-estar! <br> <br> Contamos com especialistas em clínica médica, endoscopia digestiva e bariátrica, cirurgia geral, endocrinologia, nutrição, psicologia, ultrassonografia, exames laboratoriais e bioimpedância. <br> Um atendimento completo para você realizar tudo em um só lugar!' !!}</p>

                </div>
                <div class="emergency-call__items" style="padding-top:50px;">
                    <div class="emergency-call__item">
                        <div class="icon">
                          <img src="../site/images/png/ícone missão.png">
                        </div>
                        <div class="content">
                            <h1>Missão</h1>
                            <p>{!! !empty($quemsomos->missao) ? ($quemsomos->missao) : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard.' !!}</p>
                        </div>
                    </div>

                    <div class="emergency-call__item">
                        <div class="icon">
                            <img src="../site/images/png/ícone visão.png">
                        </div>
                        <div class="content">
                            <h1>Visão</h1>
                            <p>{!! !empty($quemsomos->visao) ? ($quemsomos->visao) : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard.' !!}</p>
                        </div>
                    </div>

                    <div class="emergency-call__item">
                        <div class="icon">
                            <img src="../site/images/png/ícone valores.png">
                        </div>
                        <div class="content">
                            <h1>Valores</h1>
                            <p>{!! !empty($quemsomos->valores) ? ($quemsomos->valores) : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard.' !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="anchor" id="exames"></div>
        <section class="form laranja" style="padding-top:470px">

          <div class="services" style="bottom:-73px; top:53px">
              <div class="container">

                <div class="container" style="padding:0; justify-content: flex-start;">
                  <h3 style="color:#fff">Nossos exames</h3>
                </div>
                  <div class="services__items owl-carousel owl-theme exames">

                    @foreach($exames as $exame)
                      <div class="services__outer-item">


                        <div class="services__item">
                            <div class="services__item-icon">
                              <img src="{{ asset('uploads/exames/'. ($exame->image)) }}">

                            </div>
                            <h1 class="services__item-title">{{ $exame->nome }}</h1>
                            <p class="services__item-text">{{ $exame->descricao }}</p>
                        </div>

                      </div>
                     @endforeach

                  </div>
              </div>
          </div>
        </section>

        <div class="anchor" id="checkup"></div>
        <section class="emergency-call-2">
            <div class="emergency-call-2__bg">
            </div>
            <div class="container">
                <h1 class="section-title section-title_60 section-title_white" style="line-height: 1.2;">FAÇA SEU<br>CHECK-UP ANUAL</h1>
                <div class="checkup">
                  <div class="row">
                    <h5><i class="fa fa-check-circle"></i> Exames de sangue</h5>
                    <h5 class="second"><i class="fa fa-check-circle">   </i> Aferição de pressão arterial</h5>
                  </div>
                  <div class="row">
                    <h5><i class="fa fa-check-circle"></i> Eletrocardiograma</h5>
                    <h5 class="second"><i class="fa fa-check-circle">   </i> Exames de imagem</h5>
                  </div>
                  <div class="row">
                    <h5><i class="fa fa-check-circle"></i> Exames de dosagens hormonais</h5>
                  </div>
                </div>

                <a href="departments-details_right.html" class="btn btn-2_pink">AGENDE SUA CONSULTA</a>
            </div>
        </section>
        <div class="anchor" id="equipe" style="height: 60px; margin-top: -60px;"></div>

        <section class="form" style="padding-top:470px; padding-bottom: 210px;">
          <div class="services" style="bottom:-73px; top:53px;">

            <div class="container" style="padding:0; justify-content: flex-start;">
              <h3 style="color: #d85f19 !important;">Nossa equipe</h3>
            </div>
              <div class="container">
                <div class="services__items owl-carousel owl-theme exames">
                  @foreach($equipes as $equipe)
                    <div class="services__outer-item">
                      <div class="services__item" style="height: 470px; justify-content: space-between;">
                          <div class="services__item-icon" style="margin-top: 0;">
                            <img src="{{ asset('uploads/equipes/'. ($equipe->image)) }}">

                          </div>
                          <div>
                          <h1 class="services__item-title" style="font-family: 'Montserrat Alternates Bold'; margin-top: 200px; margin-bottom: 0; font-size: 19px">{{ $equipe->nome }}</h1>
                          <p class="services__item-text" style="font-family: 'Montserrat Alternates Medium'; margin-top: 0px; color: #d85f19 !important;">{{ $equipe->especialidade }}</p>
                        </div>
                          <p class="services__item-text">{{ $equipe->descricao }}</p>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  </div>
                </div>
        </section>

        <div class="anchor" id="convenio"></div>
        <section class="form laranja" style="padding-top:470px">
          <!-- Start of .header-bottom .services -->
          <div class="services" style="bottom:-73px; top:53px;">

            <div class="container" style="padding:0; justify-content: flex-start;">
              <h3 style="color:#fff">Nossos convênios</h3>
            </div>
              <div class="container">
                  <div class="services__items owl-carousel owl-theme exames">

                    @foreach($convenios as $convenio)

                      <div class="services__outer-item">
                          <div class="services__item">
                              <div class="services__item-icon" style="height: 224px;">
                                <img onclick="redirecionar('{{ $convenio->link }}')" src="{{ asset('uploads/convenios/'. ($convenio->logo)) }}">

                              </div>
                              <h1 class="services__item-title"> </h1>
                              <p class="services__item-text"> </p>
                          </div>
                      </div>

                    @endforeach

                  </div>
              </div>
          </div>
        </section>
        <div class="anchor" id="localizacao"></div>
        <section class="mapa">
            <div class="content">
              <div class="row">
              <div class="googlemaps col-6 nopadding">
                <iframe src="https://snazzymaps.com/embed/390311" width="100%" height="100%" style="border:none;">

                </iframe>
              </div>
              <div class="localizacao-imagem col-6 nopadding">

                <div id="floated" class="container">
                    <a href="https://www.google.com/maps/place/CliniVida/@-5.5202743,-47.47902,15z/data=!4m5!3m4!1s0x0:0xbacd51ad3896ce75!8m2!3d-5.5202743!4d-47.47902" class="btn btn-2_pink" style="background-color:#9a0000">Faça-nos uma visita</a>
                </div>
                <img style="width:100%" src="../site/images/localizacao.jpg" />
              </div>
            </div>
            </div>

        </section>

        <footer class="footer">
            <div class="footer__top">
                <div class="footer__logo">
                    <img src="../site/images/logo-branca.png" alt="footer-logo" style="margin-bottom: 50px;">
                </div>
                <div class="mapa anchor" id="contato"></div>
                <div class="container">
                    <div>
                        <div class="footer__top-blocks">
                            <h1 class="title">CONTATO</h1>
                            <div class="content">
                                <div class="content-item">
                                    <div class="icon">
                                        <svg width="24.375" height="24.343" viewBox="0 0 24.375 24.343">
                                            <path id="phone.svg" class="header-top__call-icon cls-1"
                                                d="M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z"
                                                transform="translate(-809 -353.063)" style="fill: #9a0000;"/></svg>
                                    </div>
                                    <div class="text">
                                        <a href="tel:{!! !empty($quemsomos->telefone) ? ( $quemsomos->telefone ) : '(99) 99160-1011' !!}">{!! !empty($quemsomos->telefone) ? ($quemsomos->telefone) : '(99) 99160-1011' !!}</a>
                                        <a href="tel:{!! !empty($quemsomos->telefone2) ? ( $quemsomos->telefone2 ) : '(99) 3071-2081' !!}">{!! !empty($quemsomos->telefone2) ? ($quemsomos->telefone2) : '(99) 3071-2081' !!}</a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="icon">
                                        <svg width="18.88" height="25.719" viewBox="0 0 18.88 25.719">
                                            <path id="address.svg" class="header-top__call-icon cls-1"
                                                d="M1033.75,377.71l-7.99-11.282a9.433,9.433,0,1,1,16-.04Zm0-24.133a7.845,7.845,0,0,0-6.68,11.983l6.68,9.43,6.7-9.468A7.841,7.841,0,0,0,1033.75,353.577Zm0,11.78a3.927,3.927,0,1,1,3.93-3.928A3.931,3.931,0,0,1,1033.75,365.357Zm0-6.283a2.356,2.356,0,1,0,2.36,2.355A2.362,2.362,0,0,0,1033.75,359.074Z"
                                                transform="translate(-1024.31 -352)" style="fill: #9a0000;"/></svg>
                                    </div>
                                    <div class="text">
                                      <a href="{!! !empty($quemsomos->endereco_matriz_link) ? $quemsomos->endereco_matriz_link : '' !!}">{!! !empty($quemsomos->endereco_matriz) ? $quemsomos->endereco_matriz : 'Rua Alagoas, 198 - ' !!}</a>
                                    </div>

                                </div>
                                <div class="content-item">
                                    <div class="icon">
                                        <svg width="25.16" height="25.157" viewBox="0 0 25.16 25.157">
                                            <path id="envelope.svg" class="header-top__call-icon cls-1"
                                                d="M1239.84,377.423v-16.85l3.15-2.723v-5.556h18.87v5.556l3.14,2.723v16.85h-25.16Zm22.48-1.57-6.57-6.557-3.33,2.884-3.33-2.884-6.56,6.557h19.79Zm-20.91-1.11,6.49-6.478-6.49-5.614v12.092Zm1.58-14.814-1.16,1,1.16,1v-2.005Zm17.29,3.359v-9.424h-15.72v9.424h-0.01l7.87,6.813,7.87-6.813h-0.01Zm1.58-3.359v2.005l1.15-1Zm1.57,2.722-6.49,5.614,6.49,6.478V362.651Zm-11.8-4.076h1.58v1.571h-1.58v-1.571Zm4.72,1.571h-1.57v-1.571h1.57v1.571Zm-7.86-1.571h1.57v1.571h-1.57v-1.571Z"
                                                transform="translate(-1239.84 -352.281)" style="fill: #9a0000;"/> </svg>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:{!! !empty($quemsomos->email) ? ($quemsomos->email) : 'contato@clinividaitz.com.br' !!}">{!! !empty($quemsomos->email) ? ($quemsomos->email) : 'contato@clinividaitz.com.br' !!}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer__top-blocks">
                            <h1 class="title">HORÁRIOS</h1>
                            <div class="content">
                              <div class="content-item">
                                <ul class="work-date">
                                    <h6><span>Segunda a sexta-feira</span></h6>
                                    <p><b>08h às 18h</b></p>
                                </ul>
                              </div>
                            </div>
                          </div>
                    </div>

                    <div>
                        <div class="footer__top-blocks">
                            <h1 class="title">FAÇA PARTE</h1>
                            <div class="content">
                                <p class="text" style="font-family: 'Montserrat Alternates ExtraLight';">Tem desejo de somar com a nossa equipe? Envie-nos seu currículo especificando a área desejada!
                                </p>
                                <form>
                                    <div class="email">
                                        <input type="email" placeholder="Trabalhe conosco...">
                                        <button type="submit"><i class="fa fa-send"></i></button>
                                    </div>
                                </form>
                                <div class="socials">
                                    <?php
                                      if (!empty($quemsomos->facebook)) { echo ('<a href="'.$quemsomos->facebook.'" title="facebook"><i class="fa fa-facebook"></i></a>'); }
                                      if (!empty($quemsomos->instagram)) { echo ('<a href="'.$quemsomos->instagram.'" title="instagram"><i class="fa fa-instagram"></i></a>'); }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="footer__top-blocks">
                            <h1 class="title">LINKS</h1>
                            <div class="content">
                                <ul class="menu">
                                    <li>
                                        <a href="#checkup"><i class="fa fa-angle-right"></i>Agende sua consulta</a>
                                    </li>
                                    <li>
                                        <a href="#convenio"><i class="fa fa-angle-right"></i>Convênios</a>
                                    </li>
                                    <li>
                                        <a href="#mapa"><i class="fa fa-angle-right"></i>Localização</a>
                                    </li>
                                    <li>
                                        <a href="#services"><i class="fa fa-angle-right"></i>Nossos exames</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <p>Copyright &copy; <?php echo date("Y"); ?> CLINIVIDA | Todos os direitos reservados.</p>
            </div>

        </footer>
    </div>

    <!------------------------------------------------------------------------>

    <!-- scroll top - to top page -->
    <div class="to-top" id="scrollUp"><i class="fa fa-angle-up"></i></div>

    <!-- search box -->
    <div class="searchBox">
        <span class="searchBox-close">&times;</span>
        <form>
            <input type="search" placeholder="Write Search Keyword & Press Enter">
            <button type="submit">
                <svg width="24.71" height="25.687" viewBox="0 0 24.71 24.687">
                    <path id="search.svg" class="cls-2"
                        d="M1144.4,440.468l8.19,8.178-3.47,3.467-8.19-8.178,1.18-1.177-1.38-1.385a7.878,7.878,0,1,1,1.11-1.11l1.38,1.383Zm-2.36-5.172a6.29,6.29,0,1,0-6.29,6.282A6.293,6.293,0,0,0,1142.04,435.3Zm8.33,13.35-3.61-3.6-1.24,1.245,3.6,3.6Zm-5.97-3.465,1.25-1.246-1.25-1.245-1.24,1.245Zm-11.79-9.885h-1.57a4.715,4.715,0,0,1,4.71-4.712v1.57A3.146,3.146,0,0,0,1132.61,435.3Z"
                        transform="translate(-1127.88 -427.438)" /></svg>
                search
            </button>
        </form>
    </div>



		</body>

    <script>
      function redirecionar(link) {
        window.location.href = link;
      }
    </script>
			@include('partials._scripts')
    <script src="../site/js/owl.carousel.min.js"></script>
    <script src="../site/js/carousel.js"></script>

    <script src="../site/js/jquery.fancybox.js"></script>

    <script src="../site/js/jquery.waypoints.min.js"></script>
    <script src="../site/js/jquery.countup.min.js"></script>






</html>
