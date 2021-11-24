<?php
if(isset($_POST)){
    $operators = array('+', '-', '*', '/', '%', '+/-','.', '=');
    $out = '';
    switch($action){
        case 'equal':
            $last = '';
            if(strlen($old)>0) {
                $last = substr($old, -1);
            }
            if($old <> '' and !in_array($last, $operators)){
                $out = eval("return ($old);");
             } else {
                 $out = $old;
             }
         break;
         default: $out = $old;
    }
    echo $out;
} 