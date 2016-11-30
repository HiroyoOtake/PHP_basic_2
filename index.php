<?php

// (1) 円の面積を求める関数 getCircleArea() を定義せよ
// ※ 円の面積 = 半径 * 半径 * 円周率(≒ 3.14)

function getCircleArea ($radius)
{
	// return $radius * $radius * 3.14;
	echo $radius * $radius * 3.14;
}

// (2) getCircleArea()を用いて、半径が5の円の面積を求め、画面に結果を表示せよ。

// echo getCircleArea(5);
getCircleArea(5);

?>
