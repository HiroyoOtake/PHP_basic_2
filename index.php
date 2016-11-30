<?php

// 関数をつくる
// 三角形の面積 = 底辺 * 高さ / 2

function getTriangleArea ($base, $height)
{
	return $base * $height / 2 ;
}

// echo getTriangleArea(4, 5);

function hello($to = '誰かさん')
{
	echo 'hello' . $to;
}

hello('田中さん');
hello();

?>
