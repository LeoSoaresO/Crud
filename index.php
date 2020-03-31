<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                            <a href="#cadastro">Cadastre-se</a>
                        </p>
                    </form>
                </div>
            <!--FORMULARIO DE CADASTRO-->
                <div id="cadastro">
                    <form method="post" action="">
                        <H1>Cadastro</H1>
                        <p>
                            <label for="nome_cad">Seu nome</label>
                            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Nome">
                        </p>

                        <p>
                            <label for="email_cad">Seu email</label>
                            <input id="email_cad" name="email_cad" required="required" type="text" placeholder="Email">
                        </p>

                        <p> 
                            <label for="senha_cad">Sua senha</label>
                            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234"/>
                        </p>

                        <p>
                            <input type="submit" value="Cadastrar">    
                        </p>

                        <p class="link">
                            Já tem uma conta ? 
                            <a href="#login">Ir para Login</a>
                        </p>
                    </form>
                </div>      
            </div>
    </div>
    <?php
            
    
    
    ?>
</body>
</html>