<?php

// implode() explode()
$fruits = array('りんご' , 'みかん' , 'いちご');

$data = implode("#", $fruits);
// var_dump($data); //string(29)"りんご#みかん#いちご"
$test = explode('#', $data);
// var_dump($test); //array(3) { [0]=> string(9) "りんご" [1]=> string(9) "みかん" [2]=> string(9) "いちご"  }

//list()
list($first, $second, $third) = explode("#", $data);
// echo $first;

//data()
// Y年 m月 d日 H時 i分 s秒
echo date('Y-m-d H:i:s');

?>
