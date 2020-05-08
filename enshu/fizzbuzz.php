<?php
    for($num = 1; $num <= 100; $num++){
        if($num % 3 == 0 && $num % 5 == 0){
            echo "FizzBuzz\t";
        }else if($num % 3 == 0){
            echo "Buzz\t";
        }else if($num % 5 == 0){
            echo "Fizz\t";
        }else{
            echo $num ."\t";
        }
        
        if($num % 10 == 0){
            echo "\n";
        }
    }
?>