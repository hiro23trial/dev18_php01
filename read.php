<?php
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');
// ファイル内容を1行ずつ読み込んで出力
while ($line = fgets($openFile)) {
    echo nl2br($line);
}
// ファイルを閉じる
fclose($openFile);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?=$name ?>
<body>
    <script></script>
</body>
</html>