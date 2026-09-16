<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiem Tra N</title>
</head>
<body>
<?php
$N = rand(-100, 100);
echo "N = $N <br><br>";
if ($N > 0) {
    echo "Cac uoc so cua $N la: ";
    for ($i = 1; $i <= $N; $i++) {
        if ($N % $i == 0) {
            echo "$i ";
        }
    }
    echo "<br><br>";
    function laSoNguyenTo($n) {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    if (laSoNguyenTo($N)) {
        echo "$N la so nguyen to<br>";
    } else {
        echo "$N khong phai la so nguyen to<br>";
    }
    $tong = 0;
    for ($i = 2; $i < $N; $i++) {
        if (laSoNguyenTo($i)) {
            $tong += $i;
        }
    }
    echo "Tong cac so nguyen to nho hon $N la: $tong<br><br>";
    $can = sqrt($N);
    if ($can == floor($can)) {
        echo "$N la so chinh phuong";
    } else {
        echo "$N khong phai la so chinh phuong";
    }
} else {
    echo "N khong phai la so duong nen khong thuc hien cac yeu cau con lai.";
}
?>
</body>
</html>
