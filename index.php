<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Instagram</title>
</head>
<body>
    <div class="instagram-wrapper">
        <div class="instagram-phone">
            <img src="./img/instagram-celular.png" alt="celular">
        </div>
        <div class="instagram-continue">
            <div class="group">
                <img src="./img/instagram-logo.png" class="instagram-logo" alt="instagram logo">
                <div class="profile-photo">
                    <img src="./img/perfil-instagram.jpg" alt="foto de perfil">
                </div>
                <a href="#" class="instagram-login">Continue como lucas_pauluk</a>
                <a href="#" class="instagram-logout">Remover conta</a>
            </div>
            <div class="group">
                <p class="not-account">Não é lucas_pauluk?</p>
                <p class="not-account">
                    <span class="link-blue">Alternar contas</span>
                    ou
                	<a href = 'registro.php'><span class="link-blue">Inscreva-se</span></a>
                </p>
            </div>
            <div class="get-the-app">
                <p class="get-app">Baixe o aplicativo</p>
                <div class="download">
                    <a href="#" class="app-download"></a>
                    <a href="#" class="app-download"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
