<?php
$age=array("Bill"=>10,"joe"=>20,"peter"=>40);
//echo $age["joe"];
//2nd way 
// $age=array("Bill"=>10,"joe"=>20,"peter"=>40);
// echo "<pre>";
// print_r($age);
// echo "</pre>";
// var_dump($age);//type check 
// $age["bill"]=30;// change value
// echo $age["bill"];

foreach ($age as $key=>$value)
{
    echo $key ."=".$value ."<br>";
}
?>