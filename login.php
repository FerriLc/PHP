<?php
include_once "funcoes.php";
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
    <center>
    <div id="formulario">
    <h1>Acessar o sistema</h1>
    <form  method="POST">
    <input name="email" type="email" placeholder="Email de usuário" maxlength="45">
    <input name="senha" type="password" placeholder="Senha" maxlength="32">
    <center>
    <input type="submit" value="Acessar"><br><br>
    <a href="cadastrar.php">Criar nova conta aqui!</a>
    
    </div>
    </form>
    </center>
<?php
if (isset($_POST['email'])){  

$email = ($_POST['email']);
$senha = ($_POST['senha']);
//var_dump($email);
//var_dump($senha);

if(!empty($email) && !empty($senha))
{
    $u->conectar('root',"");
    if($u->logar($email,$senha))
    {

        header('location:teste.php');
    }
    else{
        echo "Erro de email ou senha!";
    }
}

}
?>
</body>
</html>