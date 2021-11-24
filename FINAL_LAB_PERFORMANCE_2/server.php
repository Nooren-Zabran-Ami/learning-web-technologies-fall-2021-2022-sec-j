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
           