<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy</title>
</head>
<body>
    <form action="authentication.php" method="post">
        <input type="text" name="id" placeholder="id" required autofocus>
        <br>
        <input type="password" name="pass" id="pass" placeholder="pass" required>
        <button type="button" onclick="document.getElementById('pass').type='password'">hide</button>
        <button type="button" onclick="document.getElementById('pass').type='text'">show</button>
        <br>
        <input type="submit">
        <br>
    </form>
</body>
</html>