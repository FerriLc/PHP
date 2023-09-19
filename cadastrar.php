<?php
require_once 'funcoes.php';
$u = new usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
    <div class="msg">
            <?php
            if (isset($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
                $confsenha = addslashes($_POST['confsenha']);

                if (!empty($nome) && !empty($email) && !empty($senha) && !empty($confsenha)) {
                    $u->conectar('root', '');
                    if ($senha == $confsenha) {
                        if ($u->cadastrar($nome, $email, $senha)) {
                            echo "Cadastrado com sucesso!";
                        } else {
                            echo "Usuário já cadastrado.";
                        }
                    }
                }
            }
            ?>
        </div>
        <div class="container">
        <div class="formulario">
            <center>

                <h1>Cadastrar</h1>
                <form method="POST">
                    <input type="text" name="nome" placeholder="Digite o seu nome" maxlenght="45"><br><br>
                    <input type="email" name="email" placeholder="Digite o seu Email" maxlenght="45"><br><br>
                    <input type="password" name="senha" placeholder="Digite uma senha" maxlenght="32"><br><br>
                    <input type="password" name="confsenha" placeholder="Confirme a senha" maxlenght="32"><br><br>
                    <center>
                        <input type="submit" value="Cadastrar"><br><br>
                        <a href="login.php">Já tem uma conta? Acesse aqui.</a>


        </div>
        </form>
        </center>


</body>

</html>