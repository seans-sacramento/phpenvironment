<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Throwing an Exception</title>
    <?php include('../includes/styles.php'); ?>
</head>
<body>
    <h1>Handling Thrown Exceptions</h1>
    <a href = "/">Home </a>
    <div>
        <?php
         try {
            $date = new DateTime('Invalid date');
            echo $date->format("Y-md-d");
         } catch (Exception $ex) {
            echo "An error occured " . $ex->getMessage();
         }
        ?>
    </div>
</body>
</html>