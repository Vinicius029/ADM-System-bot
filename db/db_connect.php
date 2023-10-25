<?php
    $conn = mysqli_connect("localhost","root","","loginsistema");

    if(mysqli_connect_error()):
        echo "Falha na conexão: ".mysqli_connect_error();
    endif

?>