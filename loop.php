<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำสั่ง loop ใน php</title>
</head>
<body>
    <h1>การใช้ loop</h1>
    <?php
        echo "<h2>while loop</h2>";
        echo "<br>";
        $x = 1;
        while ($x <= 5) {
            echo "รอบที่ $x <br>";
            $x++;
        }
        $i = 1;
        while ($i <= 40) {echo "-"; $i++;}
        echo "<br>";

    ?>
</body>
</html>