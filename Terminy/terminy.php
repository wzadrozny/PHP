<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #fff7d1;
            padding: 100px;
            font-family: "Sigmar", serif;
            font-weight: 400;
            font-style: normal;

            font-family: "Montserrat", serif;
            font-optical-sizing: auto;
        }

        table {
            background-color: #ffecc8;
            border-collapse: collapse;
        }

        td {
            border: solid gray;
            padding: 10px;
        }

        input {
            background-color: #ffd89b;
            border-color: #ffb0b0;
        }

        input[type="checkbox"] {
            background-color: #ffd89b;
            border-color: #ffb0b0;
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

                $save_file = false;

                for ($i = 1; $i <= 5; $i++) {
                    $termin_id = "termin".$i;
                    $termin_title = "Termin ".$i;
                    
                    $date_set = isset($_POST[$termin_id]) && $_POST[$termin_id] !== "";
                    $checkbox_set = in_array($termin_id, $_POST["terminy"]);
                    $row_set = $date_set && $checkbox_set;

                    $save_file = $save_file || $row_set;
                ?>

                <tr>
                    <td> 
                        <label for=<?=$termin_id?>><?=$termin_title?></label>
                    </td>
                    <td> 
                        <input <?=$row_set? "checked": ""?> type="checkbox" id=<?=$termin_id?> name="terminy[]" value=<?=$termin_id?>>
                    </td>
                    <td> 
                        <input type="month" name=<?=$termin_id?> <?=$row_set? "value=".$_POST[$termin_id] : ""?>>
                    </td>
                </tr>

                <?php
                }
            ?>

            <td colspan="3"> 
                <input type="submit" value="Zapisz">
            </td>
        </table>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $save_file) {
            echo "Dane zostały zapisane do pliku dane.txt";
            $fileHandle = fopen("dane.txt", 'a');
            $text = date("Y-m-d H:i:s").":\n".print_r($_POST, true);
            fwrite($fileHandle, $text);
            fclose($fileHandle);
        }
        ?>
    </form>
</body>
</html>
