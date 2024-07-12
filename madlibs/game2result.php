<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Unlikely Trio</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $adjective=$_POST["adjective"];
    $color=$_POST["color"];
    $animal=$_POST["animal"];
    ?>
    <h1 class="heading">The Unlikely Trio</h1>
    <p class="content yellow">One day, I saw a <?php echo $adjective;?> <?php echo $color;?> <?php echo $animal;?> walking down the street wearing a top hat. It was quite the sight to see!</p>
</body>
</html>