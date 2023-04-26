<?php
//bai4
function findProduct($listProduct,$nameProduct){
    // echo "nameProduct:".$nameProduct;
    for($i=0; $i<count($listProduct);$i++){
        // echo "i=".$i . "\n";
        // echo "listProduct=". $listProduct[$i];
        if($listProduct[$i]['name']==$nameProduct){
            // echo "listProduct=". $listProduct[$i];
            return $listProduct[$i]['name'];
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
    $max =0;
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
echo'<br/>';
echo'Bai12: ';

function sortByName($listProduct){
    $len = count($listProduct);
    for ($i = 1; $i < $len; $i++) {
      $key = $listProduct[$i];
      $j = $i - 1;
      while ($j >= 0 && strlen($listProduct[$j]['price']) < strlen($key['price'])) {
        $listProduct[$j + 1] = $listProduct[$j];
        $j--;
      }
      $listProduct[$j + 1] = $key;
    }
    return $listProduct;
    }

$listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
  );

  $result = sortByName($listproduct);
foreach($result as $product ){
    echo $product['name'].'&nbsp';
}
//Bài 13
echo'<br/>';
echo'Bai13: ';


$listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
array('name'=>'Keyboard','price'=>30,'quality'=>8,'categoryID'=>4),
array('name'=>'Mouse','price'=>25,'quality'=>50,'categoryID'=>4),
  );




//bai 15, 16 min max

echo'<br/>';
// function minProduct($listProduct){
  
//   $min =key($listProduct);
//   // echo 'key'.$listProduct;
//   foreach($listProduct as $product){
//     // echo 'key'.$product;
//     if($product['quality'] < $min)
//     // echo 'key'.$product;
//     $min = $product;
//   }
//   return $min;
// }
// $listproduct = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
// array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
// array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
// array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
//   );
// // echo min(array_keys($listProduct));

// // $arr2=array_search($listProduct , min($listProduct ));
// // echo $arr2;
// echo $listProduct[array_search(min($product),$listProduct)];

$array = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
  );

foreach ($array as $key => $value) {
  $result[$key] = $value['quality'];

}
$min = min($result);
$max = max($result);

echo " So min la :".$min."<br/>";
echo "So max la :".$max."<br/>";

echo'<br/>';

// function minProduct($array){
//   $n = count($array);
//   $max = 0;
  
//   foreach ($array as $value){
//   for ($i =0;$i<$n;$i++){
//     // echo $i;
//     if($max < $value[$i]['quality']){
//       // echo $ma
//       $max = $value[$i];
//       // echo $max;
//     }
//   }return $max;
// }

// }
// $array = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
// array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
// array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
// array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
//   );

//  echo(minProduct($value));

 function minProduct($array){
  $minProduct=array();
  $minPrice=array();
  foreach($array as $k){
    if($k['price']<$minPrice){
      $minProduct=$k;
      $minPrice = $k['price'];
    }
  }
  return $minProduct;
 }
 $array = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
  );
  $result = minProduct($array);
    echo $result['name'];
  
//Bai 16
echo'<br/>';

function maxProduct($array){
  $maxProduct=0;
  $maxPrice=0;
  foreach($array as $k){
    if($k['price']>$maxPrice){
      $maxProduct=$k;
      $maxPrice = $k['price'];
    }
  }return $maxProduct;
 }
 $array = array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>800,'quality'=>3,'categoryID'=>1),
  );
  $result = maxProduct($array);
    echo $result['name'];
    echo'<br/>';

    
    //Bai 13
    function sortByCategoryName($listProduct, $listCategory) {
      // Tạo một mảng trống để lưu danh sách sản phẩm theo danh mục
      $productByCategory = array();
      // Duyệt qua danh sách sản phẩm và phân loại sản phẩm vào từng danh mục tương ứng
      foreach ($listProduct as $product) {
        $categoryName = $listCategory[$product['categoryID']]['id'];

        if (!isset($productByCategory[$categoryName])) {
          $productByCategory[$categoryName] = array();
        }
        $productByCategory[$categoryName][] = $product;
      }
      // Sắp xếp các danh sách sản phẩm trong mảng $productByCategory theo thứ tự ABC
      foreach ($productByCategory as $categoryName => $productList) {
        $productByCategory[$categoryName] = insertionSort($productList, 'name');
      }
      // Duyệt qua danh sách danh mục và gộp các danh sách sản phẩm lại thành một danh sách duy nhất
      $sortedProductList = array();
      foreach ($listCategory as $category) {
        $categoryName = $category['id'];
        if (isset($productByCategory[$categoryName])) {
          $sortedProductList = array_merge($sortedProductList, $productByCategory[$categoryName]);
        }
      }
      return $sortedProductList;
    }
    
    function insertionSort($arr, $key) {
      $len = count($arr);
      for ($i = 1; $i < $len; $i++) {
        $keyItem = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && strcmp($arr[$j][$key], $keyItem[$key]) > 0) {
          $arr[$j + 1] = $arr[$j];
          $j--;
        }
        $arr[$j + 1] = $keyItem;
      }
      return $arr;
    }

    
$listProduct= array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
// array('name'=>'Keyboard','price'=>30,'quality'=>8,'categoryID'=>4),
// array('name'=>'Mouse','price'=>25,'quality'=>50,'categoryID'=>4),
  );
    $listCategory = array(
      array('id'=>'1','Comuter'),
      array('id'=>'2','Memory'),
      array('id'=>'3','Card'),
      array('id'=>'4','Acsesory'),
    );
    $sortedProductList = sortByCategoryName($listProduct, $listCategory);
foreach ($sortedProductList as $product) {
  echo $product['name'] . ' - ' . $listCategory[$product['categoryID']]['id'] . '<br>';
    }

//Bài 14
function mapProductByCategory($listProduct,$listCategory){
  $categoryMap =array();
  foreach($listCategory as $category){
    $categoryMap[$category['id']]=$category['name'];
  }
  $result =array();
  foreach($listProduct as $product){
    $categoryID = $product['categoryID'];
    $categoryName = $categoryMap[$categoryID];
    $result[$categoryName][] = $product;
  }
  return $result;
}
$listProduct= array(array('name'=>'CPU','price'=>750,'quality'=>10,'categoryID'=>1),
array('name'=>'HDD','price'=>50,'quality'=>2,'categoryID'=>2),
array('name'=>'RAM','price'=>70,'quality'=>1,'categoryID'=>2),
array('name'=>'Main','price'=>400,'quality'=>3,'categoryID'=>1),
array('name'=>'Keyboard','price'=>30,'quality'=>8,'categoryID'=>4),
array('name'=>'Mouse','price'=>25,'quality'=>50,'categoryID'=>4),
  );
    $listCategory = array(
      array('id'=>'1','name'=>'Comuter'),
      array('id'=>'2','name'=>'Memory'),
      array('id'=>'3','name'=>'Card'),
      array('id'=>'4','name'=>'Acsesory'),
    );
  $result = mapProductByCategory($listProduct,$listCategory);
  foreach($result as $categoryName => $products){
    echo "<h1>$categoryName</h1>";
    echo"<ul>";
    foreach($products as $product){
      echo"<li>{$product['name']}";
    }
  echo"</ul>";
  }
  echo"</br>";
  //bai21
  function calSalary($salary, $n) {
    // if ($n == 1) {
    //   return $salary;
    // } else {
    //   $prevSalary = calSalary($salary, $n - 1);
    //   $newSalary = $prevSalary * 1.1;
    //   return $newSalary;
    // }

   
      $newSalary = $salary;
      for ($i = 1; $i < $n; $i++) {
        $newSalary = $newSalary * 1.1;
      }
      return $newSalary;
   
  }
  $result = calSalary(1000,5);
  echo $result;

//bai22
echo"</br>";
function calMonth($money,$rate){
  // $month =0;
  
  // if ($money >= 2 * $money) {
  //   return $month;
  // } else {
  //   $interest = $money * ($rate / 100);
  //   $newMoney = $money + $interest;
  //   $month++;
  //   return calMonth($newMoney, $rate, $month);
  // }

 
    $months = 5;
    while ($money < 2 * $money) {
      $interest = $money * ($rate / 100);
      $money += $interest;
      $months++;
    }
    return $months;
  }

$result = calMonth(500,10);
echo $result;

//

// function tim_min($array){
//   $total = count($array);

//   $min = 0;
//   for($i = 0; $i>$total;$i++){
//     if ($array[$min]['price'] > $array[$i]['price']){
//       $min = $i;
//   }
//   }return $min;
// }
// echo(tim_min($array));