<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/search.css" rel="stylesheet" type="text/css">
        <title>Projeto Integrador - {{$data['query']}} </title>
        <script src="js/firebaseAuthentication.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
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
                <form class="searchForm" action="/search" method="GET" role="search">
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
                    <div class="searchHeader">
                        @if (isset($data['query']))
                            <h2>Livros encontrados com a pesquisa: "{{$data['query']}}" </h2>
                        @else
                            <h2>Livros cadastrados na plataforma.</h2>
                        @endif
                        <div class="searchOptions">
                            <button class="searchOrderby" id="searchOrderbyBtn" onclick="displayOrderbyPanel()"><i  class="fas fa-sort-amount-down"></i> Ordenar</button>
                            <form action="/search" method="GET" id="searchOrderbyWindow">
                                <input style="display: none" value="{{$data['query']}}" name="search_input">
                                <div class="searchOrderbyUpper">
                                    <div class="searchOrderbySection">
                                        <label>Por</label>
                                        <ul class="searchOrderbyOptions">
                                            <li><input id="orderbyTitleRadio" type="radio" value="title" name="order"><label for="orderbyTitleRadio" class="searchOrderbyOptionBtn" id="orderbyTitleLabel">Título</label></li>
                                            <li><input id="orderbyAuthorRadio" type="radio" value="author" name="order"><label for="orderbyAuthorRadio" class="searchOrderbyOptionBtn" id="orderbyAuthorLabel">Autor</label></li>
                                            <li><input id="orderbyYearRadio" type="radio" value="create_dt" name="order"><label for="orderbyYearRadio" class="searchOrderbyOptionBtn" id="orderbyYearLabel">Ano</label></li>
                                        </ul>
                                    </div>
                                    <div class="searchOrderbySection">
                                        <label>Ordem</label>
                                        <ul class="searchOrderbyOptions">
                                            <li><input id="orderbyAscRadio" type="radio" value="asc" name="direction"><label for="orderbyAscRadio" class="searchOrderbyOptionBtn" id="orderbyAscLabel">Crescente</label></li>
                                            <li><input id="orderbyDescRadio" type="radio" value="desc" name="direction"><label for="orderbyDescRadio" class="searchOrderbyOptionBtn" id="orderbyDescLabel">Decrescente</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="searchOrderbyFinish" type="submit">Ordenar</button>
                            </form>
                        </div>
                    </div>
                    <div class="searchList">
                        @foreach ($data['books'] as $b)
                            <div  class='searchItem'>
                                <div class="searchItemIcon" style="background-color:{{'#' . str_pad(dechex(mt_rand(0x555555, 0xDDDDDD)), 6, '0', STR_PAD_LEFT)}}" ><i style="color: {{'#' . str_pad(dechex(mt_rand(0xAAAAAA, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}"  class="fas fa-book"></i></div>
                                <span class="searchItemName">{{$b->title}}</span>
                                <span class="searchItemAuthor">{{ \Illuminate\Support\Str::limit($b->author, 50, $end='...') }}</span>
                            </div>
                        @endforeach
                    </div>
                    {{$data['books']->links('vendor.pagination.default')}}
                @endisset
            </div>
        </section>
        <link async href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;800&display=swap" rel="stylesheet">
        <script async src="/js/searchViewFunctions.js"></script>
        <script async src="https://kit.fontawesome.com/d647f9fbfb.js" crossorigin="anonymous"></script>
    </body>
</html>