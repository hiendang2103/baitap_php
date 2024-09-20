<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    function chuvihcn() {
        return (5 + 6) * 2;
    }

    echo "<p class='chuvi'>Chu vi Hình Chữ Nhật là: <span class='red'>" . chuvihcn() . "</span></p>";

    function dthcn ($cd,$cr) {
        $dt = $cr * $cd;
        return $dt;
    }
    $chieu_dai = 5;
    $chieu_rong = 10;
    echo "<p class='chuvi'>Diện Tích Hình Chữ Nhật là: <span class='red'>" . dthcn($chieu_dai, $chieu_rong) . "</span></p>";
    ?>
</body>
</html>
