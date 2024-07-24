<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD Application</title>
</head>
<body>
    <h2>Insert Data</h2>
    <form action="insert.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Phone:</label>
        <input type="text" name="phone" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
