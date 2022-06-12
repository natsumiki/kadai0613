<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$place = $_POST["place"];
$company =$_POST["company"];
$c = ",";

//文字作成
$str = date("Y-m-d").$c.$name.$c.$mail.$c.$gender.$c.$age.$c.$place.$c.$company;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
    <head>

    </head>
    <body>
        <ul>
        <li>お名前： <?= $name ?></li>
        <li>Mail: <?= $mail ?></li>
        <li>性別: <?= $gender ?></li>
        <li>年代: <?= $age ?></li>
        <li>過ごし方：<?= $place?></li>
        <li>誰と：　<?= $company?></li>
        </ul>
    <form action="read.php", method="post">
        <input type="submit" value="登録">
    </form>
    </body>
</html>
