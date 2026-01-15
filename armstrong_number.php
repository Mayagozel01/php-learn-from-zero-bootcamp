<?php
include "nav.php";
?>
<h2>Exercise Armstrong Numbers</h2>

<form method="post">
    <h4>input any number</h4>
    <input type="number" name="num" id="num">
    <h4>click here to know is Armstrong number or nor</h4>
    <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST['num']);
    $originalNum = $num;
    $num2 = $num;
    $k = 0;
    $sum = 0;
    do {
        $num = intdiv($num, 10);
        $k++;
    } while ($num > 0);
    while ($num2 > 0) {
        $rem = $num2 % 10;
        $sum += pow($rem, $k);
        $num2 = intdiv($num2, 10);
    }
    if ($sum == $originalNum) {
        echo "<h3>$originalNum is an Armstrong number.</h3>";
    } else {
        echo "<h3>$originalNum is not an Armstrong number.</h3>";
    }
}
include "home.php";
?>