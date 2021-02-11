<?php
$name=$_POST["name"];
$mail=$_POST["mail"];
$food=$_POST["food"];
$trip=$_POST["trip"];

// ファイルに書き込み
$time = date('Y-m-d H:i:s');
$file = fopen('./data/data.txt', 'a');
fwrite($file, $time.$name.$mail.$food.$trip. "\n");
fclose($file);

//文字作成
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <p>data/data.txt を確認しましょう！</p>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
