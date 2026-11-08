<?php
$text = "I Like cats";
echo strlen($text);
echo"<br>";
$sentence = "My name is Nazmin";
echo str_word_count($sentence);
echo"<br>";
$new = str_replace("cats","dog", $text);
echo"<br>";
var_dump(10);
var_dump($new);
 
echo strtoupper($new);
echo"<br>";
echo strtolower($sentence);
echo"<br>";
$colors = ["Red","92","Green"];
echo $colors[1];
echo"<br>";
var_dump($colors);
echo"<br>";
$person = [
    "first_name"=>"Asif",
    "last_name"=>"Khan",
    "age"=>21
];
var_dump($person);
echo"<br>";
echo $person["last_name"];
echo"<br>";
$contacts = [
    ["A",1],
    ["B",2],
    ["C",3]
];
echo $contacts[1][0];
echo"<br>";


//Loop
$i=1;
while ($i<=10){
    echo $i." ";
    $i++;
}
echo"<br>";
for ($i=1;$i<=10;$i++){
    echo $i." ";
}
echo"<br>";
echo sizeof ($colors);
echo"<br>";
for ($i=0;$i<sizeof($colors);$i++){
    echo $colors [$i]. " ";
}
echo"<br>";

$i = 0;

while ($i < sizeof($colors)) {
    echo $colors[$i] . " ";
    $i++;
}
echo"<br>";
foreach ($colors as $x){
    echo $x;
}
echo"<br>";
echo round(4.3);
echo"<br>";
echo ceil(4.3);
echo"<br>";

echo floor(4.3);
echo"<br>";
echo min(10,45,2,34);
echo"<br>";
echo max(10,45,3,34);
echo"<br>";

function addNumbers($a,$b){
    return $a+$b;
}
$sum = addNumbers(5,10);
echo $sum;
?>

<!-- {super global veribale in php with example (bangla),}{session & cookies ar modde parthokko} -->