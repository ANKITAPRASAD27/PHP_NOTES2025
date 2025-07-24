<?php
//print the marksheet multidiamensional array using associative array.
$marks=["Ram"=>["hindi"=>87,"english"=>76,"math"=>70],
        "Tom"=>["hindi"=>70,"english"=>66,"math"=>90],
        "Suman"=>["hindi"=>79,"english"=>99,"math"=>60],
];
// echo "<pre>";
// print_r($marks);
// echo "</pre>";
echo "<table border='2px' cellpadding ='5px' cell spacing ='6px'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Hindi</th>";
echo "<th>English</th>";
echo "<th>Math</th>";
echo "</tr>";

foreach ($marks as $name =>$subjects)
{
    echo "<tr>";
    echo "<td>".$name."</td>"; // print name
   
    // Now print subject marks
    foreach ($subjects as $subject => $score) {
        echo "<td>".$score."</td>";
    }
    echo "<br>";
    echo "</tr>";
}
echo"</table>";
?>