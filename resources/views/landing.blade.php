<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Integrador</title>
    </head>
    <body class="container">
        <header class="header">
            <h1 class="title">Projeto Integrador</h1>
            <div class="headerMiddle">
                <form class="searchForm" action="/search" method="GET" role="search">
                    <div class="searchInputDiv">
                        <input class="searchInput" name='search_input' type="search" placeholder="Pesquise títulos de livros aqui..."/>
                        <button class="searchButton" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="headerLast">
                <a href="login" class="loginButton"><i class="far fa-user-circle"></i> Logar ou Cadastrar</a>
            </div>
        </header>
        <section class="centerSection">
            <div class="searchContainer">
                <div class="searchList">
                    <div class='searchItem'>
                        <div class="searchItemIcon" style="background-color: {{'#' . str_pad(dechex(mt_rand(0x555555, 0xDDDDDD)), 6, '0', STR_PAD_LEFT)}}"><i style="color: {{'#' . str_pad(dechex(mt_rand(0xAAAAAA, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}" class="fas fa-book"></i></div>
                        <span class="searchItemName">Lorem ipsum dolor sit.</span>
                        <span class="searchItemAuthor">Lorem, ipsum.</span>
                    </div>
                    <div class='searchItem'>
                        <div class="searchItemIcon" style="background-color: {{'#' . str_pad(dechex(mt_rand(0x555555, 0xDDDDDD)), 6, '0', STR_PAD_LEFT)}}"><i style="color: {{'#' . str_pad(dechex(mt_rand(0xAAAAAA, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}" class="fas fa-book"></i></div>
                        <span class="searchItemName">Lorem ipsum dolor sit.</span>
                        <span class="searchItemAuthor">Lorem, ipsum.</span>
                    </div>
                    <div class='searchItem'>
                        <div class="searchItemIcon" style="background-color: {{'#' . str_pad(dechex(mt_rand(0x555555, 0xDDDDDD)), 6, '0', STR_PAD_LEFT)}}"><i style="color: {{'#' . str_pad(dechex(mt_rand(0xAAAAAA, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}" class="fas fa-book"></i></div>
                        <span class="searchItemName">Lorem ipsum dolor sit.</span>
                        <span class="searchItemAuthor">Lorem, ipsum.</span>
                    </div>
                    <div class='searchItem'>
                        <div class="searchItemIcon" style="background-color: {{'#' . str_pad(dechex(mt_rand(0x555555, 0xDDDDDD)), 6, '0', STR_PAD_LEFT)}}"><i style="color: {{'#' . str_pad(dechex(mt_rand(0xAAAAAA, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}" class="fas fa-book"></i></div>
                        <span class="searchItemName">Lorem ipsum dolor sit.</span>
                        <span class="searchItemAuthor">Lorem, ipsum.</span>
                    </div>
                    <div class='searchItem'>
                        <div class="searchItemIcon" style="background-color: {{'#' . str_pad(dechex(mt_rand(0x555555, 0xDDDDDD)), 6, '0', STR_PAD_LEFT)}}"><i style="color: {{'#' . str_pad(dechex(mt_rand(0xAAAAAA, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}" class="fas fa-book"></i></div>
                        <span class="searchItemName">Lorem ipsum dolor sit.</span>
                        <span class="searchItemAuthor">Lorem, ipsum.</span>
                    </div>
                </div>
            </div>
        </section>
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/landing.css" rel="stylesheet" type="text/css">
        <script async src="https://kit.fontawesome.com/d647f9fbfb.js" crossorigin="anonymous"></script>
        <script async src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
        <script async src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
    </body>
</html>
