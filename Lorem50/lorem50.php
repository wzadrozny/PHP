<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p.lorem {
            font-style: italic;
            color: red;
        }

        fieldset {
            border: solid black 2px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>lorem50</legend>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                ?>
                <p>Oto wpisany tekst:</p>
                <p class='lorem'> <?=$_POST["text"]?> </p>
                <?php
            } else {
                ?>

                <form method="post">
                    <textarea cols="50" rows="5" name="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident unde ducimus molestias voluptatem atque? Accusantium iusto repudiandae veritatis voluptatem quibusdam ut soluta quam, laudantium, aliquam dolorem similique error. In et vitae, asperiores illum deleniti reprehenderit cum sit! Dicta fugiat iste sunt ad corrupti? Accusantium itaque ipsam corrupti, inventore molestiae at.</textarea>
                    <input type="submit" value="Wyślij">
                </form>

                <?php
            }
        ?>


       
        

        

    </fieldset>
</body>
</html>