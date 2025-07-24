<?php
//The foreach loop is used in PHP -
//to loop through arrays (both indexed and associative).

$array =array(10,20,30);
foreach ($array as $key)
{
    echo $key;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach loop</title>
</head>
<body>
    <ul>
<?php
$fruits = ["Apple", "Mango", "Banana"];
foreach($fruits as $fruit){
    echo "<li>$fruit</li>";
}
?>
</ul>

</body>
</html>