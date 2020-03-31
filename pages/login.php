<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Crud</title>
    </head>
    <body>
        <div class="container">
            <a class="links" id="cadastro"></a>
            <a class="links" id="login"></a>
                <div class="content">
                    <!-- FORMULARIO DE LOGIN -->
                    <div id="login">
                        <form method="post" action="">
                            <h1>Login</h1>
                            <p>
                                <label for="nome_login">Seu nome</label>
                                <input id="nome_login" name="nome_login" required "required" type="text" placeholder="Leonardo Olivera">
                            </p>

                            <p>
                                <label for="email_login">Seu Email</label>
                                <input id="email_login" name="email_login" required "required" type="email" placeholder="Ex:leonardo@contato.com">
                            </p>    

                            <p>
                                <input type="checkbox" name="manterlogado" id="manterlogado" value="">
                                <label for="manterlogado">Manter-me Logado</label>
                            </p>

                            <p>
                                <input type="submit" value="Logar">
                            </p>

                            <p class="link">
                                Ainda não tem conta ?
                                <a href="register.php">Cadastre-se</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>