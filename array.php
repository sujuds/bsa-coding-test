<?php 
    $arr = [
        [10, 2, 6],
        [4, -1, 6],
        [2, 8, 2]
    ];


    $A = 0;
    $B = 0;
    for ($i=0; $i < sizeof($arr); $i++) { 
        for ($j=0; $j < sizeof($arr[$i]); $j++) {
            //diagonal kanan 
            if ($i == 0 && $j == 0) {
                $A += $arr[$i][$j];
            } elseif ($i == 1 && $j == 1) {
                $A += $arr[$i][$j];
            } elseif ($i == 2 && $j == 2) {
                $A += $arr[$i][$j];
            }

            //diagonal kiri
            if ($i == 0 && $j == 2) {
                $B += $arr[$i][$j];
            } elseif ($i == 1 && $j == 1) {
                $B += $arr[$i][$j];
            } elseif ($i == 2 && $j == 0) {
                $B += $arr[$i][$j];
            }
        }
    }

    echo "Jumlah diagonal kekanan, A = ".$A."<br>";
    echo "Jumlah diagonal kekanan, B = ".$B."<br>";
    echo "Jumlah kedua sisi diagonal A+B = ".($A+$B);


    // var_dump($arr);
?>