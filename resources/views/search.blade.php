<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/search.css" rel="stylesheet" type="text/css">
        <title>Projeto Integrador</title>
        <script src="js/firebaseAuthentication.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="container">
            <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
            <script>
                var firebaseConfig = {
                    apiKey: "AIzaSyDTqsImOPKEPniGlK5u9p5Nq1JNJy5yuYU",
                    authDomain: "projeto-integrador-77e4f.firebaseapp.com",
                    projectId: "projeto-integrador-77e4f",
                    storageBucket: "projeto-integrador-77e4f.appspot.com",
                    messagingSenderId: "1094222732463",
                    appId: "1:1094222732463:web:1cb83570356d548d6fc85a"
                };
                firebase.initializeApp(firebaseConfig);
            </script>
        <header class="header">
            <h1 class="title">Projeto Integrador</h1>
            <div class="headerMiddle">
                <form class="searchForm" action="/search" method="POST" role="search">
                    @csrf
                    <div class="searchInputDiv">
                        <input class="searchInput" name='search_input' type="search" placeholder="Pesquise títulos de livros aqui..."/>
                        <button class="searchButton" type="submit"><i class="fas fa-search" ></i></button>
                    </div>
                </form>
            </div>
            <div class="headerLast">
                <a href="login" class="loginButton">
                    <i class="far fa-user-circle iconlogin "></i> 
                    Logar ou Cadastrar</a>
            </div>
        </header>
        <section class="centerSection">
            <div class="searchContainer">
                @isset($data)
                    <h2>Livros encontrados com a pesquisa: "{{$data['query']}}" </h2>
                    <div class="searchList">
                        @foreach ($data['books'] as $b)
                            <div class='searchItem'>
                                <div class="searchItemIcon"><i  class="fas fa-book"></i></div>
                                <span class="searchItemName">{{$b->title}}</span>
                                <span class="searchItemAuthor">{{$b->author}}</span>
                            </div>
                        @endforeach
                    </div>
                @endisset
            </div>
        </section>
        <script async src="https://kit.fontawesome.com/d647f9fbfb.js" crossorigin="anonymous"></script>
    </body>
</html>

/**
 style="background-color:{{'#' . str_pad(dechex(mt_rand(0x555555, 0xDDDDDD)), 6, '0', STR_PAD_LEFT)}}"
 style="color: {{'#' . str_pad(dechex(mt_rand(0xAAAAAA, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}"
*/
