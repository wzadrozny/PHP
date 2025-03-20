<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        table, td {
            border-collapse: collapse;
            border: 1px solid lightgray;
        }
        td {
           padding: 5px;
        }
    </style> 
</head>
<body>
    <form> 
        <table>
        <caption>Terminy</caption>
        <?php
            for($i = 1; $i<=50; $i++) {
                ?>
                    <tr>
                        <td><label for=<?="$i"?>><?="Termin $i"?></label></td>
                        <td><input type="date" id=<?="$i"?>></td>
                    </tr>
                <?php
            }
        ?>

        <tr>
            <td colspan="2"><input type="submit" value="Zatwierdź"></td>
        </tr>

        </table>
    </form>
</body>
</html>