<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Intruder Teacher</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $pluralNoun=$_POST["pluralNoun"];
    $verb=$_POST['verb'];
    $pieceOfClothing=$_POST["adjective"];
    ?>
    <h1 class="heading">The Unlikely Trio</h1>
    <p class="content f00ff0"><?php echo $pluralNoun;?> are <?php echo $verb;?> at the school but the teacher is <?php echo $pieceOfClothing;?> and doesn't want us to do that.</p>
</body>
</html>