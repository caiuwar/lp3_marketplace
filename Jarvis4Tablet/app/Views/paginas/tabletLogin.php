<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URL.'/public/css/tablet-Login.css'?>">
    <link rel="stylesheet" href="<?=URL.'/public/css/home.css'?>">
    <link rel="shortcut icon" href="<?=URL.'/public/img/favicon.ico'?>" />
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>


    <!-- INÍCIO DO BLOCO DE LOGIN -->
    <div class="container">
        <div class="row caixaLogin">
            <div class="col-md-3"></div>
            <div class="col-md-5 col-sm-5">
                <div class="account-box">
                    <div class="tituloLogo">
                        <div class="navbar-brand titulo" href="../html/home.html">Jarvis 4 Geek</div>
                        <img class="imagemLogo" src="../img/imagemLogin.png">
                    </div>
                    <form name="login" class="form-signin" method="post" action="<?=URL?>/funcionarios/login">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="<?=$dados['email']?>" placeholder="Email" required autofocus />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" value="<?=$dados['senha']?>" placeholder="Senha" required />
                        </div>
                        <label class="checkbox">
                    <input type="checkbox" value="remember-me" />
                    Me mantenha conectado
                </label>
                        <button class="btn btn-lg btn-block botaoLogin" type="submit">
                    Login</button>
                    </form>
                    <a class="forgotLnk" href="http://www.jquery2dotnet.com">Esqueci minha senha</a>
                    <div class="or-box">
                        <span class="or">OU</span>
                        <div class="row">
                            <div class="col-md-6 row-block">
                                <a href="http://www.jquery2dotnet.com" class="btn btn-facebook btn-block"><img class="facebook" src="../img/facebook.svg"></a>
                            </div>
                            <div class="col-md-6 row-block">
                                <a href="http://www.jquery2dotnet.com" class="btn btn-google btn-block"><img class="google" src="../img/google.svg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="or-box row-block">
                        <div class="row">
                            <div class="col-md-12 row-block confirm">
                                <a href="http://www.jquery2dotnet.com" class="btn btn-primary btn-block criarConta">Criar nova conta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO BLOCO DE LOGIN -->

    <!-- INICIO DO FOOTER-->
    <footer class="container-fluid text-center footer-bottom">
        © 2020 Copyright: Jarvis 4 Geek
    </footer>
    <!-- FIM DO FOOTER-->


</body>

</html>