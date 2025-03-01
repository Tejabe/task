<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <h2>Insert User Data</h2>
    <form action="./insert.php" method="post">
        <input type="text" name="name" placeholder="Enter Name" required><br><br>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" name="password" placeholder="Enter Password" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>