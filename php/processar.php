<?php
  

    function somar($numero1, $numero2){
        return $numero1 + $numero2;
    }
    $n1=$_GET["numero1"];
    $n2 = $_GET ["numero2"];

    
    echo somar($n1,$n2);
    
?>