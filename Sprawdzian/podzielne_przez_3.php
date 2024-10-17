<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
    <?php
        $nums = range(-9, 9, 1);
        foreach($nums as $n) {
            if ($n % 3 == 0) {
                echo "<span style='color: limegreen;'>$n</span>";
            } else {
                echo $n;
            }
            
            if ($n != 9) {
                echo "|";
            }
        }
    ?>
    </h2>
</body>
</html>