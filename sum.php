<?php
// 1から100までを順番に表示する関数
function times ($max) {
    return $max * 2;
    
}
echo times (2) . "\n";

function add ($a, $b) {
    return $a + $b;
}
echo add (2, 4) . "\n";

function mul($arr) {
  $result = 1;
  foreach($arr as $val) {
    $result *= $val;
  }
  return $result;
}
echo mul(array(1, 3, 5, 7, 9)) . "\n";

 
 
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
   if ($max_number < $a){
       $max_number = $a;
   }
 }

 return $max_number;
 }
  $arr = array(1, 3, 4, 10);
 echo max_array($arr) . "\n";

 
 $str = "<h1>strip_tags関数</h1>"
 . "<p>techboost</p>";
 echo strip_tags($str)."\n";
 
 $fruits = array("grapes", "orange", "banana");
 array_push($fruits, "tomato", "avocado");
 print_r($fruits);
 
 $array1 = [1,2,3];
 $array2 = [10,20,30];
 $array3 = [100, 200,300];
 $array = array_merge($array1, $array2, $array3);
 print_r($array);
 
 $time = mktime(10,10,10);
 var_dump(date("Y年m月d日h時i分s秒", $time));
 print("<br/>");
 
 date_default_timezone_set("Asia/Tokyo");
 echo date("Y/m/d H:i:s") . "\n";