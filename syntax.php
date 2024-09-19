<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo "world!" // prints 'world!'?></h1>
    <div><?="This is example text."?></div>
    <div>
        <?php
        print("Message1"); // prints 'Message1'
        echo "<br>"; // goes next line
        print("Message2"); // prints 'Message2'
        /*
            multi
            line
            comment
        */
        
        ?>
    </div>
</body>
</html>