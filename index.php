<?php 
$paragraph = "Quando morirò dirò caspita!" ;
$badword = $_GET["badword"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> 
        <?php echo $paragraph; ?>
    </div>
    <span>Lunghezza: <?php echo strlen($paragraph); ?></span>

    <hr>

    <div>
        <?php echo str_replace($badword, '*******', $paragraph); ?>
    </div>

    <span>Lunghezza: <?php echo strlen($paragraph); ?></span>

    <!-- url: ?badword=caspita -->

</body>
</html>