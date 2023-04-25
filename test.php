<?php
//bai4
function findProduct($listProduct,$nameProduct){
    // echo "nameProduct:".$nameProduct;
    for($i=0; $i<count($listProduct);$i++){
        // echo "i=".$i . "\n";
        // echo "listProduct=". $listProduct[$i];
        if($listProduct[$i]['name']==$nameProduct){
            // echo "listProduct=". $listProduct[$i];
            return $i;
        } 
    } 
}
$listProduct = array(['name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1],
['name'=>'RAM','price'=>50,'quality'=>2,'categoryID'=>2],
['name'=>'HDD','price'=>70,'quality'=>1,'categoryID'=>2],
['name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1]);


$result = findProduct($listProduct,"HDD");
echo $result;

//Bài 4
echo'<br/>';
function linearSearch($listproduct, $nameProduct) {
    foreach ($listproduct as $product) {
        if ($product['name'] == $nameProduct) {
            return $product;
        }
    }
    return null;
}
$listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
  );
$result = linearSearch($listproduct, "CPU");

echo $result['name'];

//Bài 5
echo'<br/>';
function Search($listproduct, $categoryID) {
    $result = array();
    foreach ($listproduct as $product) {
        if ($product['categoryID'] == $categoryID) {
            $result[] = $product;
        }
    }
    return $result;
}
$listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
  );
$result = Search($listproduct, 1);
foreach($result as $product ){
    echo $product['name'];
}

//Bài 6
echo'<br/>';
function Price($listproduct, $price) {
    $result = array();
    foreach ($listproduct as $product) {
        if ($product['price'] <= $price) {
            $result[] = $product['name'];
        }
    }
    return $result;
}
$listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
  );
$result = Price($listproduct, 80);
echo "".implode(",",$result);

//Bài 11
echo'<br/>';
function sortByPrice($listProduct){
    $n =count($listProduct);
  for($i=0; $i<$n-1;$i++){
    for($j=0;$j <$n-$i-1;$j++){
        if ($listProduct[$j]['price'] > $listProduct[$j + 1]['price'])
      {
         $temp = $listProduct[$j];
         $listProduct[$j] = $listProduct[$j + 1];
         $listProduct[$j+1] = $temp;
      }
    }
  }return $listProduct;
}
$listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
  );

  $result = sortByPrice($listproduct);
foreach($result as $product ){
    echo $product['name'];
}
//Bài 12
echo'<br/>';
function ByPrice($listProduct){
    $n =count($listProduct);
  for($i=0; $i<$n-1;$i++){
    for($j=0;$j <$n-$i-1;$j++){
        if ($listProduct[$j]['price'] < $listProduct[$j + 1]['price'])
      {
         $temp = $listProduct[$j];
         $listProduct[$j] = $listProduct[$j + 1];
         $listProduct[$j+1] = $temp;
      }
    }
  }return $listProduct;
}
$listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
  );

  $result = ByPrice($listproduct);
foreach($result as $product ){
    echo $product['name'];
}
