<?php
// 課題１
function double($i){
    return $i * 2;
}

echo double(5)."\n";
echo double(8)."\n";


// 課題２
function f($a, $b){
    return $a + $b;
}

echo f(1, 2)."\n";
echo f(15,0)."\n";


// 課題３
function by($arr){
    $i_by = 1;
    foreach ($arr as $i){
        $i_by *= $i;
    } 
    return  $i_by;
}

$arr = array(1, 3, 5, 7, 9);
echo by($arr)."\n";
$arr = array(1, 3, 5);
echo by($arr)."\n";


// 課題４
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if ($a > $max_number){
     $max_number = $a;
 }}
 return $max_number;
 }
 
$arr = array(1, 3, 11);
echo max_array($arr)."\n";
$arr = array(1, 3, 22, 5);
echo max_array($arr)."\n";


// 課題５
// strip_tags
$str = "<h1>strip_tags</h1>"."<p>タグの除去</p>";
echo strip_tags($str) ."\n";

// array_push
$arr = array(1, 3, 5);
array_push($arr, 7, 9);
print_r($arr);

// array_merge
$array1 = array(1, 2, 3, "animal" => "dog");
$array2 = array(3, 4, 5, "animal" => "cat");
$result = array_merge($array1, $array2);

print_r($result);

// time, mktime
echo time()."\n";

date_default_timezone_set('UTC');
echo mktime(1, 2, 3, 4, 5, 2019)."\n";

// date
echo date("Y/m/d H:i:s")."\n";

?>



