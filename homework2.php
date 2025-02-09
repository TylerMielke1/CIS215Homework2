<?php
    date_default_timezone_set('EST');

    CurrentHour = date('H');

    if ($CurrentHour <= 10) {
        $Hello = "Good Morning. Its bright and early.";
    } elseif ($CurrentHour <= 16) {
        $Hello = "Good afternoon. Its about to get darker.";


?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>   

    <body>
        <h1><h1>
    </body>
</html>