<?php
$hewan = ["kucing", "kuda", "kelinci", "kangguru", "koala", "keledai"];
echo $hewan[0] . "<br>";
echo $hewan[5] . "<br>";

foreach ($hewan as $key => $value) {
    echo $value . "<br>";
}

$hewan[2] = "Kukang";
echo $hewan[2];
?>