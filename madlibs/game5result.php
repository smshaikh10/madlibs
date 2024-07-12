<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Occupational Hazard</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $profession=$_POST['profession'];
    $job=$_POST['job'];
    $year=$_POST['year'];
    ?>
    <h1 class="heading">The Unlikely Trio</h1>
    <p class="content red">In my life I always wanted to be a <?php echo $profession;?> but I ended up being a <?php echo $job;?>, I wish I could go to the year <?php echo $year;?> so that things would be different.</p>
</body>
</html>