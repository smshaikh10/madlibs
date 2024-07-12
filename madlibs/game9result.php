<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Middle</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $verb=$_POST['verb'];
    $place=$_POST['place'];
    $mood=$_POST['mood'];
    ?>
    <h1 class="heading">The Middle</h1>
    <p class="content teal">I like to <?php echo $verb;?> in the middle of the road in the morning before I go to <?php echo $place;?>. It makes me feel <?php echo $mood;?>.</p>
</body>
</html>