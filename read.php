<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo createHtmlTable($file);
}

function createHtmlTable($file) {
    $html ="<table border='3' cellspacing='4' cellpadding='4'>";
    $ffields = $file->fetch_fields();
    $html .= "<tr>";
    foreach ($ffields as $val) {
        $html .= "<th>" . $val->name . "</th>";
    }
    $html .= "</tr>";
    foreach ($file as $row) {
        $html .= "<tr>";
        foreach ($ffields as $val) {
            $value = $row[$val->name];
            $html .= "<td>${value}</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</table>";

    return $html;
}

fclose($file); // ファイルを閉じる

?>
