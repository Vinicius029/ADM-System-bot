<?php
    require_once 'db/db_connect.php';
    session_start();
    
    if(isset($_POST["btn-entrar"])):
        $erros = array();
        $login = mysqli_escape_string($conn, $_POST['login']);
        $senha = mysqli_escape_string($conn, $_POST['senha']);

        if(empty($login) or empty($senha)):
            $erros[] = "O campo login/senha precisa ser preenchido!";
        else:
            $sql = "SELECT login FROM login WHERE login = '$login'";
            $resultado = mysqli_query($conn, $sql);

            if (mysqli_num_rows($resultado) > 0):
                $senha = md5($senha);
                $sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($conn, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($conn);
                    $_SESSION['id_usuario'] = $dados['id'];
                    $_SESSION['logado'] = true;
                    header('location:home.php');
                else:
                    $erros[] = "Úsuario/Senha inválido!";
                endif;
            else:
                $erros[] = "Úsuario inexistente!";
            endif;
        endif;
    endif;

    if (isset($_SESSION['logado'])):
        header('location:home.php');
    endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>   
        <div class="container">
            <div class="conteudo">
            <h1>Faça seu login</h1>
            <p class="msg_error">
                <?php 
          
                if(!empty($erros)):
                    foreach($erros as $erro):
                        echo $erro;
                    endforeach;  
                  
                endif;                
                ?>
            </p>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="campo_dados">
                    <label for="login">Login: </label>
                    <input type="text" name="login" require>
                </div>
                <div class="campo_dados">
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha" require>
                </div>
                <div class="campo_dados">
                  <button type="sumit" name="btn-entrar" class="btn-entrar">Entrar</button>
                </div>                
            </form>
            </div>        
        </div>      
    </div>
</body>
</html>