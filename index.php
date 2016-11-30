<?php

// 現在時刻によってあいさつを変える関数 greet() を作成せよ
// (i)   現在時刻が6時以降  - 12時より前 -> おはようございます
// (ii)  現在時刻が12時以降 - 18時より前 -> こんにちは
// (iii) 現在時刻が18時以降 -  6時より前 -> こんばんは

$hour = date('H');

function great($hour,$to = '名無し' )
{
	echo '現在時刻は' . $hour . '時ですね。' . $to . 'さん';
	if ($hour >= 6 && $hour < 12)
	{
		echo 'おはようございます';
	}
	elseif ($hour >= 12 && $hour < 18)
	{
		echo 'こんにちは';
	}
	else 
	{
		echo 'こんばんは';
	}
}

great($hour, '田中');


?>
