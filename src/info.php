<?php
require './funcoes.php';


switch ($_POST['action']) {

    case 'seculo'         : seculo();          break;
    case 'primo'          : primo();           break;
    case 'function_array' : function_array();  break;
    // case 'function_array2': function_array2(); break; 

}

function seculo(){
    
$ano = $_POST['ano'];
$data = intval($ano);
$funct = new Funcoes();
$return_ano = $funct->SeculoAno($data);

echo $return_ano;
}


function primo(){
    
    $primo = $_POST['primo'];
    $data = intval($primo);
    $funct = new Funcoes();
    $return_primo = $funct->PrimoAnterior($data);
    
    echo $return_primo;
}

function function_array(){

    $arr = array (
        array(25,22,18),
        array(10,15,13),
        array(24,5,2),
        array(80,17,15)
        );

    $funct = new Funcoes();
    $return_array = $funct->SegundoMaior($arr);
    
    echo $return_array;
}

// function function_array2(){

//   $array1 =  [1, 2, 5, 5, 5];
// //   $array2 = [1, 3, 2] ;
// //   $array3 = [1, 2, 1, 2];
// //   $array4 = [3, 6, 5, 8, 10, 20, 15];
// //   $array5 = [1, 1, 2, 3, 4, 4];
// //   $array6 = [1, 4, 10, 4, 2];
// //   $array7 = [10, 1, 2, 3, 4, 5];
// //   $array8 = [1, 1, 1, 2, 3];
// //   $array9 = [0, -2, 5, 6];
// //   $array10 = [1, 2, 3, 4, 5, 3, 5, 6];
// //   $array11 = [40, 50, 60, 10, 20, 30];
// //   $array12 = [1, 1];
// //   $array13 = [1, 2, 5, 3, 5];
// //   $array14 = [1, 2, 5, 5, 5];
// //   $array15 = [10, 1, 2, 3, 4, 5, 6, 1];
// //   $array16 = [1, 2, 3, 4, 3, 6];
// //   $array17 = [1, 2, 3, 4, 99, 5, 6];
// //   $array18 = [123, -17, -5, 1, 2, 3, 12, 43, 45];
// //   $array19 = [3, 5, 67, 98, 3];

//     $funct = new Funcoes();
//     $return_array2 = $funct->SequenciaCrescente($array1);
    
//     echo $return_array2;
// }


?>