<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
        }

        .left {
            width: 25%;
            background-color: #75B9BE;
        }

        .right {
            width: 75%;
            background-color: #A8CCC9;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }

        a {
            width: 100%;
            display: block;
            padding: 10px;
            text-align: center;
            background-color: #C7D66D;
            margin-bottom: 10px;
            text-decoration: none;
            color: black;
        }

        a:hover {
             box-shadow: 0 0 3px #515151;
        }

        h1 {
            background-color: #B3D6C6;
            width: 100%;
            padding: 10px;
            text-align: center;
            margin: 0;
        }

        .active {
            background-color: #B3D6C6;
        }
    </style>
</head>
<body>
    <div class="row">        
        <nav class = "left column">

            <?php 
                $page = "glowna";
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }
            
            ?>
            <a href="index.php?page=glowna" class="<?=$page == 'glowna'? 'active' : ''?>">Strona Główna</a>
            <a href="index.php?page=czytelnicy" class="<?=$page == 'czytelnicy'? 'active' : ''?>">Tabela czytelnicy</a>
            <a href="index.php?page=dzialy" class="<?=$page == 'dzialy'? 'active' : ''?>">Tabela działy</a>
            <a href="index.php?page=ksiazki" class="<?=$page == 'ksiazki'? 'active' : ''?>">Tabela książki</a>
            <a href="index.php?page=pracownicy" class="<?=$page == 'pracownicy'? 'active' : ''?>">Tabela pracownicy</a>
            <a href="index.php?page=stanowiska" class="<?=$page == 'stanowiska'? 'active' : ''?>">Tabela stanowiska</a>
            <a href="index.php?page=wypozyczenia" class="<?=$page == 'wypozyczenia'? 'active' : ''?>">Tabela wypożyczenia</a>
        </nav>
        <main class = "right column">
            <?php
                if (isset($_GET['page'])) {
                    if (file_exists('pages/' . $_GET['page'] . '.php')) {
                        include 'pages/' . $_GET['page'] . '.php';
                    } else {
                        echo '<h1>Nie znaleziono żądanej strony</h1>';
                    }
                } else {
                    include 'pages/glowna.php';
                }
            
            ?>
        </main>
    </div>

</body>
</html>