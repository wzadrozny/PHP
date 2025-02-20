<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
           font-family: Verdana; 
           font-size: large;
           border-collapse: collapse;
           border: 1px solid black;
        }

        th, td {
            border: 1px dashed black;
            padding: 5px;
        }
    </style>

</head>
<body>
    <form method="post">
        <table>
            <caption>Terminy</caption>

            <?php
                if (!array_key_exists("terminy", $_POST)) {
                    $_POST["terminy"] = [];
                }

                for ($i = 1; $i <= 5; $i++) {
                    $termin_id = "termin".$i;
                    $termin_title = "Termin ".$i;
                    
                    $date_set = isset($_POST[$termin_id]);
                    $checkbox_set = in_array($termin_id, $_POST["terminy"]);

                    $checked = $date_set && $checkbox_set? "checked": "";
                ?>

                <tr>
                    <td> 
                        <label for=<?=$termin_id?>><?=$termin_title?></label>
                    </td>
                    <td> 
                        <input <?=$checked?> type="checkbox" id=<?=$termin_id?> name="terminy[]" value=<?=$termin_id?>>
                    </td>
                    <td> 
                        <input type="month" name=<?=$termin_id?>>
                    </td>
                </tr>

                <?php
                }
            ?>

            <td colspan="3"> 
                <input type="submit" value="Zapisz">
            </td>
        </table>
    </form>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        }
    ?>
</body>
</html>