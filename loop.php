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

        echo "<h2>do while loop</h2>";
        $y = 1;
        do {
            echo "do...while รอบที่ $y <br>";
            $y++;
        } while ($y <= 5);
        echo "-----------------<br>";
        echo "for loop<br>";
        for ($i=1; $i <= 10; $i++) { 
            echo "For รอบที่ $1<br>";
        }
        echo "-----------------------------------------<br>";

        
// Number of rows
$rows = 5;

// Loop through each row
for ($i = 1; $i <= $rows; $i++) {
    // Print stars in each row
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    // Move to the next line after printing stars for each row
    echo "<br>";
}

echo "<br>";

echo "for each looP<br>";

$pet = array("แมว", "สุนัข", "นกแก้ว", "ปลาทอง", "หมูเด้ง");

foreach ($pet as $value) {
    echo "ฉันชอบ " . $value . "<br>";
}

echo "---------------<br>";

echo "foreach loop แบบ key=>value<br>";

$food = array(
    "หมวย" => "ส้มตำ",
    "หมวย1" => "ส้มตำ1",
    "หมวย2" => "ส้มตำ2",
    "หมวย3" => "ส้มตำ3"
);

foreach ($food as $student => $value) {
    echo "ชื่อ $student ชอบกิน $value<br>";
}

    ?>

</body>
</html>