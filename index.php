<?php

// 1. ファイルを開く fopen
$fileName = "test.dat";

if (!$fp = fopen($fileName, "r"))
{
	echo "ファイルを開けませんでした";
	exit;
}
// 2. ファイルのデータを読み込む fread() file()
$content = fread($fp, filesize($fileName));

// var_dump($content);
$test = file($fileName); //配列で返してくれる
var_dump($test);

// 3. ファイルを閉じる fclose()
fclose($fp);

?>
