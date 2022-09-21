<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulär</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1>Sign in</h1>
        <form action="check-account.php" method="POST" enctype="multipart/form-data">
            <label for="username">User name</label>
            <input type="text" name="username">
           <label for="password">Password</label>
           <input type="password" name="password">
           <input name="submit" type="submit" value="Submit">
           <a href="./creat-account/creat-loggin.php" class ="creat-account-link">Sign up?</a>
        </form>
    </div>
</body>
</html>