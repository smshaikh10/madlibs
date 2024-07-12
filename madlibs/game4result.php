<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Celebrity</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $celebritysName=$_POST["celebritysName"];
    $bodyPart=$_POST["bodyPart"];
    $adjective=$_POST["adjective"];
    ?>
    <h1 class="heading">The Unlikely Trio</h1>
    <p class="content aqua">I really want to meet <?php echo $celebritysName;?> in my life once. Sometimes I feel like I just want to eat his <?php echo $bodyPart;?> because it looks so <?php echo $adjective;?>.
</html>