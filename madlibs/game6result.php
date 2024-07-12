<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Mystery</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $adjective=$_POST['adjective'];
    $animal=$_POST['animal'];
    $bodyPart=$_POST['bodyPart'];
    ?>
    <h1 class="heading">The Mystery</h1>
    <p class="content yellowgreen">My best friend is <?php echo $adjective;?> and resembles <?php echo $animal;?> in way he/she does things. Also his/her favourite thing about himself/herself is his/her <?php echo $bodyPart;?>.</p>
</body>
</html>