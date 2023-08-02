
<?php

echo "dear class <br>" , "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
printer took a galley of type and scrambled it to make a type <br>";

print "print keyword" . "second statment <br>";


//data type
$str = "hello world"; // string
echo "<br>";
$age = 20; // integer

$percent = 26.4; // float
$percent = floatval("26.4"); // float

$bool = true; // booleon

//array

$arr = array("sadia", "sana","filza","shazil"); //1st method
echo "<pre>";
print_r ($str);
echo "</pre>";






echo "<br>";
echo var_dump($str) ."<br>";
echo var_dump($age) ."<br>";
echo var_dump($percent) ."<br>";
echo var_dump($bool) ."<br>";

$num = [1,2,3,4,5,6,7,8,9,10]; //2nd method
for($i = 0; $i < 10; $i++){
  echo "$num[$i] <br>";
}
echo "<pre>";
print_r ($num);
echo "</pre>";

$Str;  // 3rd method
$Str[0] = "saima";
$Str[1] = 20;
$Str[2] = "55.43%";


$num = 0;
do{
  echo($num);
  $num++;
}
while($num <= 10);

echo "<pre>";
print_r ($Str);
echo "</pre>";

// predefine function

echo strlen($str) . "<br>";                                   
echo strrev($str) . "<br>";
echo strpos($str, "e"). "<br>";
echo str_replace("saima","suhaib","saima shazil");


  // assosative array

  $marks = [
    "math" => 90,
    "cs" => 100,
    "english" => "60"
  ];
 
foreach($marks as $k => $v){
  echo "<li>$k = $v . </li>";
}

  echo "<pre>";
print_r ($marks);
echo "</pre>";


// multidemisnol indexed array

 $sub = [
    ["phy", "eng", "cs", "urdu"],
    ["zology", "com", "acc", "math"],
    ["bio", "botany", "psycology", "physiology"]
 ];

 echo "<pre>";
print_r ($sub);
echo "</pre>";

foreach($sub as $data){
 // echo "<pre>";
//print_r ($sub);
//echo "</pre>";
foreach($data as $val){
  echo "$val <br>";
}
}

echo "<br>";

// multidemesinol assosative array

 $class = [
   "goodstd" => ["std1" => "suhaib", "std2" => "shazil", "std3" => "saima"],
   "weekstd" => ["std1" => "sana", "std2" => "faiza", "std3" => "shazia"],
   "model" => ["std1" => "ahmed", "std2" => "raima", "std3" => "ansha"]
 ];
 echo "<pre>";
print_r ($class);
echo "</pre>";

foreach($class as $k => $v){
  echo "<b> $k </b>  <br>";
  foreach($v as $key => $val){
    echo "$val <br>";
  }
}
?>