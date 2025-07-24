<?php
//GET = Show data in URL, less secure, small data.
if(isset($_GET['submit']))
{
    $name =$_GET['name'];
    $course = $_GET['course'];
    $gender = $_GET['gender'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $phone = $_GET['phone'];

    echo "<h2>Registration Successful!</h2>";
    echo "Name: $name <br>";
    echo "Course: $course <br>";
    echo "Gender: $gender <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";
    echo "Phone Number: $phone <br>";
} else {
    echo "Form not submitted correctly!";
}


?>