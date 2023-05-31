<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
<h3>Form</h3>
<form action="save.php" method="post">
    <label for="full_name">Full Name:</label>
    <input type="text" id="full_name" name="full_name" required>
    <br>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label>Gender:</label>
    <label for="male">Male</label>
    <input type="radio" id="male" name="gender" value="Male" required>

    <label for="female">Female</label>
    <input type="radio" id="female" name="gender" value="Female" required>
    <br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
