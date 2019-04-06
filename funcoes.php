<?php
    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }

//    echo multiplicar(2,2);

function numOpcional($num1 =null, $num2 = null) {
    if ($num1 != null && $num2 != null) {
        return $num1 + $num2;
    }elseif ($num1 == null) {
        return "Você só passou o \$num2";
    }else{
        return "Você só passou o \$num1";
    }
}

// echo numOpcional (4,5);

// echo numOpcional(4);
echo numOpcional (null ,2);
?>