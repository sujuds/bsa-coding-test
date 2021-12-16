<?php

    $word = "katak";
    // $word = "basi";
    // $word = "isi";
    // $word = "baai";
    // $split = str_split($word);

    // $arr= [];
    // for ($i=sizeof($split)-1; $i >= 0 ; $i--) { 
    //     $arr[]=$split[$i];
    // }

    // $result = implode($arr);

    // if ($word == $result) {
    //     echo "true";
    // } else {
    //     echo "false";
    // }


    // $result2 = "true";
    // $j = 0;
    // for ($i=sizeof($split)-1; $i >= 0 ; $i--) {  
    //     if ($word[$j] != $split[$i]) {
    //         $result2 = "false";
    //         break;
    //     }
    //     $j++;
    // }

    // echo $result2;


    function palindrome($string, $first, $last){
        if ($last >= 0) {
            if ($string[$first] == $string[$last]) {
                $first++;
                $last--;
                palindrome($string, $first, $last);
            } else{
                return "false";
            }
        } 
        return "true";
    }
    echo palindrome($word, 0, strlen($word)-1);
?>