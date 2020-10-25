<?php

// hello;
// phpinfo();

echo "<h1>Hello World</h1>";
echo "<div>Hello World</div>";

$a = 5;

// string interpolation
echo "<div> I have $a thing</div>";
echo '<div> I have $a thing</div>';

// value types

// number
// integer
$b = 15;
// float
$b = 0.576;

$b = 10;

// string
$name = "Yerguy";
$name = 'Hamilton';

// boolean
$isOn = true;

// function, class, object

// math

// order of operation
// pemdas
echo 5 + 4 * 2;
echo (5 + 4) * 2;

// concatenation
echo "<div>b + a = " . "c</div>";
echo "<div>$b + $a = " . ($b+$a) . "</div>";


?>

<hr>
<div>This is my name</div>
<div>

<?php

$firstname = 'Yuti';
$lastname = 'Lu';
$fullname = "$firstname $lastname";

echo $fullname;

?>

</div>

<hr>

<?php

// superglobal

// ?name=Joey
echo "<div><a href='?name=Joey'>Joey</a></div>";
echo "<div><a href='?name=Frank'>Frank</a></div>";
echo "<div>May name is {$_GET['name']}</div>";


echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=button'>BUTTON</a></div>";
echo "<{$_GET['type']}>May name is {$_GET['name']}</{$_GET['type']}>";

?>

<hr>

<?php

// Arrays
$colors = array("red","green","blue");
$colors = ["red","green","blue"];

echo $colors[1];

echo "
   <br>$colors[0]
   <br>$colors[1]
   <br>$colors[2]
";

echo count($colors);

?>

<div>
   This text is green
</div>

<?php

// Associative Array
$colorsAssociative = [
   "red" => "#f00",
   "green" => "#0f0",
   "blue" => "#00f"
];

echo $colorsAssociative['red'];

?>

<hr>

<?php

// Arrays
$colors = array("red","green","blue");
$colors = ["red","green","blue"];

echo $colors[1];

echo "
   <br>$colors[0]
   <br>$colors[1]
   <br>$colors[2]
";

echo count($colors);

?>

<div style="color:<?= $colors[1] ?>">
   This text is green
</div>

<?php

// Associative Array
$colorsAssociative = [
   "red" => "#f00",
   "green" => "#0f0",
   "blue" => "#00f"
];

echo $colorsAssociative['red'];

?>

<hr>

<?php

// Casting
$c = "$a";
$d = $c*1;

$colorsObject = (object)$colorsAssociative;

// echo $colorsObject;


echo "<hr>";

// Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssociative['red']."<br>";
echo $colorsAssociative[$colors[0]]."<br>";

// Object Property Notation
echo $colorsObject->red."<br>";
echo $colorsObject->{$colors[0]}."<br>";

?>

<hr>

<?php

print_r($colors);
echo "<hr>";
print_r($colorsAssociative);
echo "<hr>";
echo "<pre>",print_r($colorsObject),"</pre>";


// CUSTOM FUNCTIONS
function print_p($d) {
   echo "<pre>",print_r($d),"</pre>";
}

print_p($_GET);
print_p($colors);








