<?php
require_once 'db/db_connect.php';
session_start();

if (!isset($_SESSION['logado'])):
    header('location: index.php');
endif;

function validacao_senha($senha, $confirmar_senha){
    if($senha != $confirmar_senha):
        return false;
    endif;
    return true;
};

if(isset($_POST['add_senha'])):
    $senha_valida = validacao_senha($_POST['senha'], $_POST['confirmar_senha']);
    $notificoes = array();
    

    if($senha_valida == true):

        $senha = md5($_POST['senha']);
        $id = (int) $_SESSION['id_usuario'];
        $sql = "UPDATE login SET senha = '$senha' WHERE id = '$id'";
        $resultado = mysqli_query($conn, $sql);
        if($resultado):
            $notificoes[] = 'Senha atualizada com sucesso!';
        endif;
    else:
        $notificoes[] = 'Senhas não são iguais!';
    endif;
endif;
?>
    <?php
require_once 'include/head01.php';
?>
        <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1>Adicionar nova senha</h1>

            <p><?php 
                if(!empty($notificoes)):
                    foreach($notificoes as $notificao):
                        echo "$notificao";
                    endforeach;            
                endif;   
            ?></p>

            <label for="senha">Nova senha:</label>
            <input type="password" id="senha" name="senha" required>
            <label for="confirmar_senha">Confirmar senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required><br>
            <input type="submit" value="Adicionar senha" name="add_senha">
        </form>
            
        <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt odio cupiditate iure assumenda velit! Soluta eum assumenda, inventore corrupti minima ipsum libero molestiae odit consequatur cupiditate? Quam a natus iusto.</p>
        </div>
        <br>

        <script src="./js/fastclick.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/fixed-responsive-nav.js"></script>
  
  </body>
</html>



