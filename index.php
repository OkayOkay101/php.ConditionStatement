<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Github</title>
</head>
<body>
    <h1>การใช้คำสั่ง if</h1>
    <?php
        echo "<h2>คำสั่ง if</h2> <br>";
        $x = 5;
        $y = 8;
        echo "\$x = $x <br>";
        echo "\$y = $y <br>";
        if($x<$y){
            echo "x น้อยกว่า y";
        }
        else{
            echo "y น้อยกว่า x";
        }
        echo "<br>----------------------------------------<br>";
        
        echo "<h2> Short hand if</h2>";
        $score = 55;
        if($score>=50) echo "สอบผ่าน";
        echo "<br>";
        // Corrected ternary operator syntax
        $result = $score>=50 ? "ได้เกรด p" : "ได้เกรด f";
        echo "<br>";
        echo "ผลการเรียนของคุณ: " . $result;
        echo "<br>";
        echo "--------------------------------";
    ?>
</body>
</html>
