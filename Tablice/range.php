<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function ptab($tab, $title) {
            echo $title."<br>";
            foreach($tab as $n) {
                echo $n.", ";
            }
            echo "<br><br>";
        }


        $parzyste = range(0, 12, 2);
        $dziesiatki = range(-10, 100, 10);
        $polowki = range(-5.5, 5.5, 0.5);
        $litery_od_em = range('m', 'u', 1);
        $litery_wstecz = range('X', 'E', -1);

        ptab($parzyste, "parzyste");
        ptab($dziesiatki, "dziesiatki");
        ptab($polowki, "polowki");
        ptab($litery_od_em, "litery od em");
        ptab($litery_wstecz, "litery wstecz");

    ?>
</body>
</html>