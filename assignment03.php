<?php
$name = "Kana";
if ($name = "Kana") {
 echo "私はKanaです";
} else {
 echo "Kanaではありません";
}


$total = 1;
echo $total;

for ($i = 1; $i <= 10000; $i++) {
   $total += $i; 
}
echo $total; 

$animals = array("banana","strawberry", "grapes", "orange", "apple");
foreach($animals as $animal) {
    echo "要素は" . $animal;
    echo "\n";
}



$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}
