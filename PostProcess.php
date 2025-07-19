<?php
// POST = Hide data, more secure, big data (like login forms).
if(isset($_POST['submit']))
{
    $name =$_POST['name'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

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
