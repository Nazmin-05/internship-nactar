<?php

// 1. Addition (যোগ)
$num1 = 20;
$num2 = 10;

$result = $num1 + $num2;
echo "Addition = " . $result . "<br>";


// 2. Subtraction (বিয়োগ)
$result = $num1 - $num2;
echo "Subtraction = " . $result . "<br>";


// 3. Multiplication (গুণ)
$result = $num1 * $num2;
echo "Multiplication = " . $result . "<br>";


// 4. Division (ভাগ)
$result = $num1 / $num2;
echo "Division = " . $result . "<br>";


// 5. Modulus (ভাগশেষ)
$result = $num1 % 3;
echo "Modulus = " . $result . "<br>";


// 6. Exponentiation (ঘাত)
$result = 2 ** 3;
echo "Exponentiation = " . $result . "<br>";


// 7. Mathematical Equation
$a = 10;
$b = 5;
$c = 8;
$d = 3;

$y = ($a + $b) * ($c - $d);
echo "Equation Result = " . $y . "<br>";


// 8. Square Equation (বর্গ)
$a = 5;
$b = 3;

$x = ($a ** 2) + ($b ** 2);
echo "Square Result = " . $x . "<br>";


// 9. Area of Rectangle (আয়তক্ষেত্রের ক্ষেত্রফল)
$length = 10;
$width = 5;

$area = $length * $width;
echo "Rectangle Area = " . $area . "<br>";


// 10. Average (গড়)
$a = 80;
$b = 70;
$c = 90;

$average = ($a + $b + $c) / 3;
echo "Average = " . $average . "<br>";


// 11. Square Root (বর্গমূল)
$result = sqrt(25);
echo "Square Root = " . $result . "<br>";


// 12. Power Function (ঘাত)
$result = pow(2, 3);
echo "Power = " . $result . "<br>";


// 13. Absolute Value (পরম মান)
$result = abs(-10);
echo "Absolute Value = " . $result . "<br>";


// 14. Round Function
$result = round(5.6);
echo "Round = " . $result . "<br>";


// 15. Ceiling Function
$result = ceil(5.2);
echo "Ceil = " . $result . "<br>";


// 16. Floor Function
$result = floor(5.8);
echo "Floor = " . $result . "<br>";


// 17. Maximum Value
$result = max(10, 20, 30);
echo "Maximum = " . $result . "<br>";


// 18. Minimum Value
$result = min(10, 20, 30);
echo "Minimum = " . $result . "<br>";


// //triangle area

// $vumi = 12;
// $ucchota = 5;
// $area=0.5* $vumi * $ucchota;

// echo $area;
// echo "<br>";
// $a=3;
// $b=5;
// $result = $a*$a=2*$a*$b+$b*$b;
// echo $result;

$base = 10;
$height = 5;

$area = 0.5 * $base * $height;

echo "Triangle Base: " . $base . "<br>";
echo "Triangle Height: " . $height . "<br>";
echo "Triangle Area: " . $area;

 echo "<br>";
$num = 11;

if ($num % 2 == 0) {
    echo "Even Number";
}
else {
    echo "Odd Number";
}
echo"<br>";
$x=40;
$y=40;
 if($x>$y){
    echo $x. "is grater than" .$y;
 }
 elseif($y>$x){
    echo $y. "is greater than" .$x;
 }
 else{
    echo"Both are Equal";
 }

echo "<br>";

$age = 6;

if($age <=10){
    echo"You are a child";
}
elseif($age <=20){
    echo"You are a teenage";
}
elseif($age <=25){
    echo"You are young";
}
else
    {
        echo"you are old";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $bangla =8;
    $english = 5;
    $mathematices = 4;

    $average = ($bangla + $english + $mathematices)/3;
    if($average >= 80 && $average <=100){
        echo"Grade: A+";
    }
    elseif($average >= 70 && $average <80){
        echo"Grade: A";

    }
    elseif($average >= 60 && $average < 70){
    echo "Grade: A-";
}
elseif($average >= 50 && $average < 60){
    echo "Grade: B";
}
elseif($average >= 40 && $average < 50){
    echo "Grade: C";
}
elseif($average >= 33 && $average < 40){
    echo "Grade: D";
}

else{
    echo "Grade: F";
}
?>