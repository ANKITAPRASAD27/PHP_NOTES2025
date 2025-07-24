<?php
$emp= [
    [1,"ram","manager",50000],//index 0
    [2,"amit","manager",50000],//inedex 1
    [3,"mohan","manager",50000],//index 2
];
// echo $emp[1][1];//for singal value
// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// for($i=0;$i<=2;$i++)
// {
//     for($j=0;$j<=3;$j++)
//     {
//         echo $emp[$i][$j]." ";
//     }
//     echo "<br>";
// }


//table creation
echo "<table border='2px' cellpadding ='5px' cell spacing ='6px'>";
echo "<tr>";
echo "<th>Emp Id</th>";
echo "<th>Emp Name</th>";
echo "<th>Post</th>";
echo "<th>Salary</th>";
echo "</tr>";
foreach ($emp as $value1)
{
    echo "<tr>";
    foreach ($value1 as $value2)
    {
        echo "<td>".$value2."</td>";
       
    }
    echo "<br>";
    echo "</tr>";
}
?>


