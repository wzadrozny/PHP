<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 {
            text-align: center;
            border-style: dotted;
            border-color: pink;
            border-width: 4px;
        }
    </style>

</head>
<body>
    <?php
        $miesiac = rand(1, 15);
    ?>

    <h1>Miesiac <?=$miesiac?></h1>
    
    <h3>
        <?php
        $kwartal =  ($miesiac-1) / 3;
        switch (floor($kwartal) + 1) {
            case 1:
                echo "I kwartal";                    
                break;
            case 2:
                echo "II kwartal";
                break;
            case 3:
                echo "III kwartal";
                break;
            case 4:
                echo "IV kwartal";
                break;
            default:
                echo "Bledny numer miesiaca";
                break;            
        } 
        ?>
    </h3>
</body>
</html>