<!-- WRITE -->
<?php
// ファイルに書き込み
$time = date('Y-M-D H:i:s');
//文字作成

$file = 'data/answer.json';

// 既存データを取得
$json = file_get_contents($file);
$q_arr = json_decode($json, true);


$data = array('date'=>$time,
                'res'=>['a1'=>$_POST['a1'],
                        'a2'=>$_POST['a2'],
                        'a3'=>$_POST['a3'],
                        'a4'=>$_POST['a4'],
                        'a5'=>$_POST['a5'],
                        'a6'=>$_POST['a6']]
);

// arrayの末尾に$dataを追加
$q_arr[] = $data; 

// 同ファイルに出力
file_put_contents($file, json_encode($q_arr));
// $json = file_get_contents($file);
// json_decode($json, true);

?>

<!-- READ and SHOW RESULT -->
<?php

$file_q = 'data/question.json';
$file_a = 'data/answer.json';

// 既存データを取得
$json_q = str_replace(array("<br>","\r\n", "\r", "\n"), '' ,file_get_contents($file_q));
$q = json_decode($json_q, true)["question"];
// $json_a = file_get_contents($file_a);
// $a = end(json_decode($json_a, true));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css?2">
    <link rel="stylesheet" href="css/write_read.css?2">
    <title>Document</title>
</head>
<body>
    <div class="messageafter">
        <h1>Thank you !</h1>
        <p class="msg">今日はこんな感じでした。</p>
    </div>
    <span class="separater"></span>
    <div class="result">
        <h1> ~ Q1 ~<br><?php echo $q["q1"];?> <u><?php echo $_POST['a1'].' pt.';?></u></h1>
        <h1>~ Q2 ~<br><?php echo $q["q2"];?> <u><?php echo $_POST['a2'].' pt.';?></u></h1>
        <h1>~ Q3 ~<br><?php echo $q["q3"];?> <u><?php echo $_POST['a3'].' pt.';?></u></h1>
        <h1>~ Q4 ~<br><?php echo $q["q4"];?> <u><?php echo $_POST['a4'].' pt.';?></u></h1>
        <h1>~ Q5 ~<br><?php echo $q["q5"];?> <u><?php echo $_POST['a5'].' pt.';?></u></h1>
        <h1>~ Q6 ~<br><?php echo $q["q6"];?> <u><?php echo $_POST['a6'].' pt.';?></u></h1>
    </div>
    <span class="separater"></span>
    <h2 class="result_summary">
        <?php
        $average = array_sum($_POST)/count($_POST) ;
        echo '[average: '.$average.'pt.]<br>';
        if($average <40){
            echo 'あんまイイ感じじゃないっすね…？'   ;         
        }elseif($average<70){
            echo 'まぁまぁイイ感じっすね！';
        }else{
            echo 'めっちゃいい感じっすね！この調子！';
        }
        ?>
    </h2>
</body>
</html>