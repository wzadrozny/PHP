<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px dotted black;
            padding: 3px;
        }
    </style>

</head>
<body>
    <pre>
    <?php
        $filmy = [
            "Skazani na Shawshank" => "dramat",
            "Nietykalni" => "biograficzny",
            "Władca Pierścieni: Powrót króla" => "fantasy",
            "Pulp Fiction" => "gangsterski",
            "Siedem" => "kryminał",
            "Podziemny krąg" => "thriller",
            "Django" => "western",
            "Król Lew" => "animacja",
            "Avengers: Wojna bez granic" => "akcja",
            "Dobry, zły i brzydki" => "western"
        ];

        print_r($filmy);
    ?>
    </pre>

    <?php
        $sort_types = [
            "asort" => "Sortowanie rosnąco według wartości [asort]", 
            "ksort" => "Sortowanie rosnąco według kluczy [ksort]", 
            "arsort" => "Sortowanie malejąco według wartości [arsort]", 
            "krsort" => "Sortowanie malejąco według kluczy [krsort]"
        ];

        foreach ($sort_types as $sort_type => $cap) {
            echo "<table><caption>$cap</caption>";
            echo "<tr><th>Klucze</th><th>Wartości</th></tr>";
            switch($sort_type) {
                case "asort":
                    asort($filmy);
                    break;
                case "ksort":
                    ksort($filmy);
                    break;
                case "arsort":
                    arsort($filmy);
                    break;
                case "krsort":
                    krsort($filmy);
                    break;
                default:
                    echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
                    break;
            }

            foreach($filmy as $k => $v) {
                echo "<tr><td>$k</td><td>$v</td></tr>";
            }

            echo "</table><br>";
        }
    ?>
</body>
</html>