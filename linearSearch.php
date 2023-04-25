<?php

function findProduct($listProduct,$nameProduct){
    $n = sizeof($listProduct);
    for($i=0; $i<$n;$i++){
        if($listProduct[$i]==$nameProduct){
            return $i;
        } return -1;
    }
}
$listProduct = array(['name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1],
['name'=>'RAM','price'=>50,'quality'=>2,'categoryID'=>2],
['name'=>'HDD','price'=>70,'quality'=>1,'categoryID'=>2],
['name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1]);


echo findProduct($listProduct,'CPU');

//
$arr = array("CPU",750,10,1);
function findx($arr ,$nameProduct){
    for($i=0; $i<count($arr);$i++){
        if($arr[$i]==$nameProduct)
            return $i;
        
    }
}
$result =  findx($arr,10);
echo $result;


echo '<br/>';
function bubble_sort($listProduct) {
    $size = count($listProduct)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($listProduct[$k] < $listProduct[$j]) {
                // Swap elements at indices: $j, $k
                list($listProduct[$j], $listProduct[$k]) = array($listProduct[$k], $listProduct[$j]);
            }
        }
    }
    return $listProduct;
}
$result =  bubble_sort($listProduct);
echo $result;


echo '<br/>';

function linearSearch($listproduct, $nameProduct) {
    foreach ($listproduct as $product) {
        if ($product['name'] == $nameProduct) {
            return $product;
        }
    }
    return null;
}
$listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
  );
$result = linearSearch($listproduct, "CPU");

echo $result;