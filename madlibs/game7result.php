<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Song</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $songName=$_POST['songName'];
    $feeling=$_POST['feeling'];
    $food=$_POST['food'];
    ?>
    <h1 class="heading">The Song</h1>
    <p class="content violet">If one song could explain my life it'd be the song <?php echo $songName;?>. Most of the time I feel <?php echo $feeling;?> and eating <?php echo $food;?> makes me feel worse.</p>
</body>
</html>