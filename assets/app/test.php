<?php
    var_dump($_POST);
    echo "<hr>";

    /* foreach($_POST['preferences'] as $preference){
        echo $preference."<br>";
    } */
    if($_POST["value1"] !="" && $_POST["value2"] !=""){
        if($_POST["operacion"]=="suma"){
            $resultado= ($_POST["value1"] + $_POST["value2"]);
            echo "El resultado de la suma es ".$resultado;

        }else if($_POST["operacion"]=="resta"){
            $resultado= ($_POST["value1"] - $_POST["value2"]);
            echo "El resultado de la resta es ".$resultado;

        }else if($_POST["operacion"]=="multiplicacion"){
            $resultado= ($_POST["value1"] * $_POST["value2"]);
            echo "El resultado de la multiplicacion es ".$resultado;

        }else if($_POST["operacion"]=="division"){
            $resultado= ($_POST["value1"] / $_POST["value2"]);
            echo "El resultado de la division es ".$resultado;
        }
    }
?>