<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertpractice.php" method="POST">
    <input type="text" name="fname" placeholder="enter your first name here"><br>
        <input type="text" name="lname" placeholder="enter your last name here"><br>
        <input type="email" name="email" placeholder="enter your email here"><br>
        <input type="text" name="mobnum" placeholder="enter your contact number here"><br>
        <input type="password" name="password" placeholder="Enter your email password"><br>

        <input type="radio" name="gender" value="Male" placeholder="Male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="Female" placeholder="Female">
        <label for="female">Female</label><br>

        <input type="checkbox" name="info">
        <label for="valid">Valid Information</label><br>
        <input type="checkbox" name="info">
        <label for="Invalid">Invalid Information</label><br>

        <label for="birthday">Birthday:</label>
        <input type="date" name="birthday"><br>

        <input type="search" name="search" placeholder="Search Here"><br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>