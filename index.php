<?php
$url = 'data/question.json';
$json = file_get_contents($url);
$q_arr = json_decode($json, true)['question'];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css?2">
    <link rel="stylesheet" href="css/style.css?1">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <div class="q-box" id="q0">
            <p class="question-text" id="q1text">How did you feel today?</p>
            <input type="range" name="a1" class="range" min="0", max="100" value="50">
            <button class = "startbtn" type="button">Start</button>
        </div>
        <form action ='write.php' method='post'>
            <div class="q-box" id="q1">
                <p class="question-text" id="q1text">Q1/6: <?=$q_arr["q1"];?></p>
                <input type="range" name="a1" class="range" min="0", max="100" value="50">
                <button class="nextbtn" >NEXT...</button>
            </div>
            <div class="q-box" id="q2">
                <p class="question-text" id="q2text">Q2/6: <?=$q_arr["q2"];?></p>
                <input type="range" name="a2" class="range" min="0", max="100" value="50">
                <button class="nextbtn" >NEXT...</button>
            </div>
            <div class="q-box" id="q3">
                <p class="question-text" id="q3text">Q3/6: <?=$q_arr["q3"];?></p>
                <input type="range" name="a3" class="range" min="0", max="100" value="50">
                <button class="nextbtn" >NEXT...</button>
            </div>
            <div class="q-box" id="q4">
                <p class="question-text" id="q4text">Q4/6: <?=$q_arr["q4"];?></p>
                <input type="range" name="a4" class="range" min="0", max="100" value="50">
                <button class="nextbtn" >NEXT...</button>
            </div>
            <div class="q-box" id="q5">
                <p class="question-text" id="q5text">Q5/6: <?=$q_arr["q5"];?></p>
                <input type="range" name="a5" class="range" min="0", max="100" value="50">
                <button class="nextbtn" >NEXT...</button>
            </div>
            <div class="q-box" id="q6">
                <p class="question-text" id="q6text">Q6/6: <?=$q_arr["q6"];?></p>
                <input type="range" name="a6" class="range" min="0", max="100" value="50">
                <button class="submitbtn"  type="submit">FINISH</button>
            </div>

            </div>
        </form>
        <div class="send"></div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/main.js?11"></script>

</body>
</html>