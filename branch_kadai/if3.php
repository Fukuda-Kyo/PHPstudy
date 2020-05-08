<?php
    $temp = 36.7;
    
    if( $temp >= 37.5 ){
        echo "コロナの可能性あり\n";
    }else if( $temp >= 37.0 ){
        echo "微熱です\n";
    }else{
        echo "平熱です。\n";
    }
?>