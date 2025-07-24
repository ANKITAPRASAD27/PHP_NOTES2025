<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling Using Post Method</title>
</head>
<body>

    <h2>Student Registration Form</h2>
    <form action="GetProcess.php" method="GET">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Select Course:</label>
        <select name="course" required>
            <option value="">--Select Course--</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="BSc">BSc</option>
            <option value="BA">BA</option>
        </select><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <label>Phone Number:</label>
        <input type="number" name="phone" required><br><br>

        <input type="submit" value="Register" name="submit">
    </form>
    
</body>
</html>


