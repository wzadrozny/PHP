<h1>Działy</h1>

<?php
    $con = mysqli_connect("localhost","zadrozny","haslo123!","zadrozny");


    if ($con) {
        $result = mysqli_query($con, "SELECT * FROM dzialy;");

        if (mysqli_num_rows($result) > 0) {
            $first_row = mysqli_fetch_assoc($result);
            for ($first_row as $key => $value) {
                ?>
                    
                <?php
            }

            while($row = mysqli_fetch_assoc($result)) {
                
            }
        }

        

        mysqli_close($con);
    }
?>