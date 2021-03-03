<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <title>ProjetoIntegrador</title>
        <script src="js/firebaseAuthentication.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="container">
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

        <section class="loginCard">
            <h1 class="loginTitle">Entrar</h1>
            <h1 class="emailTitle">Email</h1>
                <input class="emailInput" id="emailInput" type="email"/>
            <h1 class="passwordTitle">Senha</h1>
                <input class="passwordInput" id="passwordInput" type="password"/>
            <button onClick="signUser()">Criar Conta</button>
            <button onClick="logUser()">Entrar</button>
        </section>
    </body>
</html>
