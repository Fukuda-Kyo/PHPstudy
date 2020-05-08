<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/

$pc_hand_str = [0,2,5];
$pc_hand = $pc_hand_str[rand(0,2)];

if(isset($_POST['playerHand'])){
    $player_hand = $_POST['playerHand'];
}

if(isset($_POST['playerHand'])){
    $player_hand = $_POST['playerHand'];
}


    if($pc_hand == 0){
        if($player_hand == 5){
            $result = "かち";
            $player_hand = "ぱー";
        }else if($player_hand == 0){
            $result = "あいこ";
            $player_hand = "ぐー";
        }else{
            $result = "まけ";
            $player_hand = "ちょき";
        }
        $pc_hand = "ぐー";
    }else if($pc_hand == 2){
        if($player_hand == 5){
            $result = "まけ";
            $player_hand = "ぱー";
        }else if($player_hand == 0){
            $result = "かち";
            $player_hand = "ぐー";
        }else{
            $result = "あいこ";
            $player_hand = "ちょき";
        }
        $pc_hand = "ちょき";
    }else{
        if($player_hand == 5){
            $result = "あいこ";
            $player_hand = "ぱー";
        }else if($player_hand == 0){
            $result = "まけ";
            $player_hand = "ぐー";
        }else{
            $result = "かち";
            $player_hand = "ちょき";
        }
        $pc_hand = "ぱー";
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>じゃんけん</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <!-- じゃんけんの結果を表示しましょう -->
            <p class="result-word"><?php echo $result; ?></p>
            <!-- プレイヤーの手を表示しましょう -->
            あなた：<?php echo $player_hand; ?><br>
            <!-- コンピュータの手を表示しましょう -->
            コンピューター：<?php echo $pc_hand; ?><br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </body>
</html>