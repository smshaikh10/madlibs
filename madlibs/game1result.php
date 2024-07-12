<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Silly Person</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    $nameOfAPerson=$_POST['nameOfAPerson'];
    $verb=$_POST['verb'];
    $pieceOfClothing=$_POST['pieceOfClothing'];
    ?>
    <h1 class="heading">The Silly Person</h1>
    <p class="content pink">Once upon a time, there was a silly <?php echo $nameOfAPerson;?> who loved to <?php echo $verb;?> while wearing a <?php echo $pieceOfClothing;?> on his/her head.</p>
</body>
</html>