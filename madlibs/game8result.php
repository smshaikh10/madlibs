<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Appointment</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $name=$_POST['name'];
    $partOfTheBody=$_POST['partOfTheBody'];
    $typeOfFluid=$_POST['typeOfFluid'];
    ?>
    <h1 class="heading">The Appointment</h1>
    <p class="content lime"><?php echo $name;?> is sick with the <?php echo $partOfTheBody;?> flu. Drink more <?php echo $typeOfFluid;?> and take medicine as needed.</p>
</body>
</html>