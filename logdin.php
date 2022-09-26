<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="file-css.css">
</head>
<body>
    <div class="wrapper">
        <form action="file-upload.php" method="POST" enctype="multipart/form-data">
            <label for="file" class ="label-file">Välj file</label>
            <input type="file" name="file" class = "ghost">
            <input type="submit" value="submit file" name="submit">
           
        </form>
    </div>
</body>
</html>