<?php
//index array
//method 1: $array=array(“ankita”,”prasad”);
//method 2: $array= ["ankita",24,8.83,true];
//method 3: $array[0]=“red”;

//$array = array("ankita",24,8.83,true);
$array= ["ankita",24,8.83,true];
echo "<pre>";
print_r($array);
echo "</pre>";
echo $array[2];//for singal value print

//for multiple value
// $i=0;
// echo "<ul>";
// while($i<=3)   and for loop 
// {
//     // echo "<pre>";
//     // echo $array[$i];
//     // //print_r($i);//index number
//     // echo "</pre>";
//     echo "<li>";
//     echo $array[$i];
//     echo "</li>";
//     $i++;
// }
// echo "</ul>";

?>