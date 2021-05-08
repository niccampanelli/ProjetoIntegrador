<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <title>ProjetoIntegrador</title>
        <script src="js/firebaseAuthentication.js"></script>
    </head>
    <body class="container">
            <script src="https://kit.fontawesome.com/d647f9fbfb.js" crossorigin="anonymous"></script>
            <!-- The core Firebase JS SDK is always required and must be listed first -->
            <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>

            <!-- TODO: Add SDKs for Firebase products that you want to use
                https://firebase.google.com/docs/web/setup#available-libraries -->

            <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                apiKey: "AIzaSyDTqsImOPKEPniGlK5u9p5Nq1JNJy5yuYU",
                authDomain: "projeto-integrador-77e4f.firebaseapp.com",
                projectId: "projeto-integrador-77e4f",
                storageBucket: "projeto-integrador-77e4f.appspot.com",
                messagingSenderId: "1094222732463",
                appId: "1:1094222732463:web:1cb83570356d548d6fc85a"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            </script>
            <header class="header">
                <a href="/" class="title">Projeto Integrador</a>
                <div class="headerMiddle">
                    <form class="searchForm" action="/search" method="GET" role="search">
                        <div class="searchInputDiv">
                            <input class="searchInput" name='search_input' type="search" placeholder="Pesquise títulos de livros aqui..."/>
                            <button class="searchButton" type="submit"><i class="fas fa-search" ></i></button>
                        </div>
                    </form>
                </div>
                <div class="headerLast">
                    <a href="login" class="loginButton"><i class="far fa-user-circle iconlogin "></i><span>Logar ou Cadastrar</span></a>
                </div>
            </header>
            <div class="centerSection">
                <section class="loginCard">
                    <h1 class="loginTitle">Cadastrar uma nova conta</h1>
                    <h1 class="inputTitle">Email</h1>
                        <input class="defaultInput" id="emailInput" type="email" placeholder="exemplo@email.com"/>
                    <h1 class="inputTitle">Senha</h1>
                        <input class="defaultInput" id="passwordInput" type="password" placeholder="Digite sua senha"/>
                    <h1 class="errorMessage" id="errormsg"></h1>
                    <div class="buttonPlace">
                        <button class="defaultButton" onClick="signUser()">Cadastrar</button>
                    </div>
                    <h1 class="switchText">Já tem uma conta? <a href="/login">Entre na sua conta.</a></h1>
                </section>
            </div>
    </body>
</html>
