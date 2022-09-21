<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulär</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>creat account her</h1>
    <a href="../index.php">Go back</a>
    <div class="wrapper">
        <form action="upload-new-account.php" method="POST" enctype="multipart/form-data">
            <label for="creatusername">User name</label>
            <input type="text" name="creatusername">
           <label for="creatpassword">Password</label>
           <input type="password" name="creatpassword">
           <input name="submit" type="submit" value="Submit">
        </form>
    </div>
</body>
</html>