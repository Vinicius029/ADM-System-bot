<?php
require_once 'db/db_connect.php';
session_start();

if (!isset($_SESSION['logado'])):
    header('location: index.php');
endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM login WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($conn);
?>

<?php
require_once 'include/head01.php';
?>
  <body>
    <div class="conteudo">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, debitis soluta molestiae earum ullam voluptate temporibus cumque ducimus repudiandae. Vitae natus quas quos, sapiente laudantium culpa quidem veritatis repellat sit!</p>
    </div>
    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
  </body>
</html>
