<?php
    date_default_timezone_set('America/New_York');

    $CurrentHour = date('H');

    if ($CurrentHour <= 10) {
        $Hello = "Good Morning. Its bright and early.";
    } elseif ($CurrentHour <= 16) {
        $Hello = "Good Afternoon. Its about to get darker.";
    } else {
        $Hello = "Good Night. Its time to go to sleep. ";
    }
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>   

    <body>
        <h1><?php echo $Hello ?></h1>
    </body>
</html>