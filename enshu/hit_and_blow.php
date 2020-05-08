<?php
    // 配列の用意と、3桁整数のセット
    $num;
    $num_str = [];
    do{
        $num = rand(100,999);
        $num_str[0] = floor($num/100);
        $num_str[1] = floor($num/10)%10;
        $num_str[2] = $num % 10;
    }while($num_str[0]==$num_str[1]||$num_str[0]==$num_str[2]||$num_str[1]==$num_str[2]);
    
    // 標準入力と数値チェック
    $count = 1;
    $guess = [];
    do{
        $hit = 0;
        $blow = 0;
        do{
            echo "---------------------------------------------\n";
            echo $count ."回目のチェレンジ！\n";
            echo "3桁の半角数字を重複なしで入力してください:";
            $guess_num = trim(fgets(STDIN));
            $guess[0] = floor($guess_num/100);
            $guess[1] = floor($guess_num/10)%10;
            $guess[2] = $guess_num % 10;
            if($guess_num/100 < 1||$guess_num/1000 >= 1||$guess[0]==$guess[1]||$guess[0]==$guess[2]||$guess[1]==$guess[2]){
                echo "エラー:3桁の半角数字を重複なしで入力してください!\n";
                $count++;
            }
        }while($guess_num/100 < 1||$guess_num/1000 >= 1||$guess[0]==$guess[1]||$guess[0]==$guess[2]||$guess[1]==$guess[2]);
        
        // 判定ゾーン
        for($i = 0; $i < 3; $i++){
            for($j = 0; $j < 3; $j++){
                if($guess_num[$i]==$num_str[$j]){
                    if($i == $j){
                        $hit++;
                    }else{
                        $blow++;
                    }
                }
            }
        }
        
        if($hit < 3){
            echo "Hit:" .$hit .", Blow:" .$blow ."です。\n";
            $count++;
        }
        echo $num;
    }while($hit<3);
    
    echo "正解です!" .$count ."回目でクリアです!!";
?>