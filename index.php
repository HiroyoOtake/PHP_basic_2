<?php

// 1. ファイルを開く fopen()
$fileName = "tests.dat";
$data = "書き込みテスト";

$fp = fopen($fileName, "a");
// モード a:追記 w:上書き r:読み取り

// 2. ファイルにデータを書き込む fwrite()
if (fwrite($fp, $data) === false)
{
	echo "書き込みができませんでした。";
	exit;
}
echo "書き込みが成功しました!";

// 3. ファイルを閉じる fclose()
fclose($fp);

?>
