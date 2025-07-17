<!DOCTYPE html>
<html>
<head>
    <title>Date</title>
    <style>
        h1 {
            text-align: center;
        }
        time {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Today's date is
        <time>
            <?php
            $today = date("d-m-Y");
            echo $today;
            ?>
        </time>
    </h1>
</body>
</html>
