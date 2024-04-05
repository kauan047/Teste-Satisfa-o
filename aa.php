<?php
if (isset($_GET['bb'])) {
    $opcao = $_GET['bb'];
    if ($opcao == 'Sim'){

        
        header("location:gg.php");
    }
    else{
        echo "Ok compreendo que você não queria participar :)";
    }

}
?>

