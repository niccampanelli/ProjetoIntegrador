<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/landing.css" rel="stylesheet" type="text/css">
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

        <section class="header">
            <h1 class="title">Projeto Integrador</h1>
            <div class="options"></div>
            <a href="login"><button>Login</button></a>
        </section>
    </body>
</html>
