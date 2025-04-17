<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pola Angka</title>
</head>
<body>
    <?php

        $counter = 1;

        for ($i=1; $i <= 5; $i++) { 
            for ($j=1; $j <= 5; $j++) {
                echo "$i ";
            }
            echo "<br>";
        }
        echo "<br>";

        for ($i=1; $i <= 5; $i++) { 
            for ($j=1; $j <= 5; $j++) {
                echo "$j ";
            }
            echo "<br>";
        }
        echo "<br>";

        for ($i=5; $i >= 1; $i--) { 
            for ($j=1; $j <= 5; $j++) {
                echo "$i ";
            }
            echo "<br>";
        }
        echo "<br>";

        for ($i=1; $i <= 5; $i++) { 
            for ($j=5; $j >= 1; $j--) {
                echo "$j ";
            }
            echo "<br>";
        }
        echo "<br>";

        for ($i=1; $i <= 5; $i++) { 
            for ($j=1; $j <= 5; $j++) {
                echo "$counter ";
                $counter++;
            }
            echo "<br>";
        }
        echo "<br>";
        $counter = 1;

        for ($i=1; $i <= 5; $i++) { 
            for ($j=1; $j <= 5; $j++) {
                echo "$counter ";
                $counter += 2;
            }
            echo "<br>";
        }
        echo "<br>";
        $counter = 2;

        for ($i=1; $i <= 5; $i++) { 
            for ($j=1; $j <= 5; $j++) {
                echo "$counter ";
                $counter += 2;
            }
            echo "<br>";
        }
        echo "<br>";

        for ($i=1; $i <= 5; $i++) {
            $counter = $i; 
            for ($j=1; $j <= 5; $j++) {
                echo "$counter ";
                $counter += $i;
            }
            echo "<br>";
        }
        echo "<br>";
        
    ?>


</body>
</html>