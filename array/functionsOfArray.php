<?php
$array=[["ankita",22,8.23,true],
["riya",32,8.00,false],
];
//echo count($array);//Count total array elements
//echo sizeof($array);//

//using associative array
$emp= [
   "emp1"=> [1,"ram","manager",50000],//index 0
   "emp2"=> [2,"amit","manager",50000],//inedex 1
    "emp3"=>[3,"mohan","manager",50000],//index 2
];
// Total employees count
echo "Total Employees: " . count($emp) . "<br>";

// Count elements inside emp3
echo "Elements in emp3: " . count($emp["emp3"]) . "<br>";

// Printing Values
foreach ($emp as $empkey => $details) {
    echo $empkey . ": ";
    foreach ($details as $value) {
        echo $value . " ";
    }
    echo "<br>";
}
//In array : It is used to check if a value exists inside an array.
$fruits = ["apple", "mango", "banana"];

if (in_array("mango", $fruits)) {
    echo "Mango found!";
} else {
    echo "Mango not found!";
}


// in_array()

// array_search()

// array_keys()

// array_key_exists()

$colors = ["red", "green", "blue"];
$position = array_search("green", $colors);

echo "Green is at index: ".$position."<br>";

$student = ["name"=>"Ram", "age"=>20];

if (array_key_exists("name", $student)) {
    echo "Key Found! <br>";
}
$student = ["name"=>"Ram", "age"=>20, "class"=>"BCA"];
$keys = array_keys($student);

print_r($keys);
echo "<br>";

//Push = Add values to END
$fruits = ["apple", "banana"];
array_push($fruits, "mango", "orange");
print_r($fruits);
echo "<br>";
// Pop = Remove last value
$fruits = ["apple", "banana", "mango"];
array_pop($fruits);
print_r($fruits);
echo "<br>";
//Shift = Remove first value
$fruits = ["apple", "banana", "mango"];
array_shift($fruits);
print_r($fruits);
echo "<br>";
//Unshift = Add value to START
$fruits = ["banana", "mango"];
array_unshift($fruits, "apple");
print_r($fruits);


?>