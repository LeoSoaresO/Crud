<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Crud</title>
</head>
<body style="margin-top: 80px">
    <div class="container">
        <a class="links" id="cadastro"></a>
        <div class="content">
           <!--FORMULARIO DE CADASTRO-->
           <div id="cadastro" style="margin-bottom: 31px;">
                    <form method="post" action="cadastrar.php">
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
                            <a href="login.php">Ir para Login</a>
                        </p>
                    </form>
                </div>      
            </div>
            <Ul>
        <div class="navbar">
        <li>
            <a href="../index.php">Home</a>
            <a href="Login.php">Login</a>
            <a href="">Sobre Nós</a>
            <a href="" class="right">Contato</a>
        </div>
        </li>
    </Ul>
    </div>
</body>
</html>
