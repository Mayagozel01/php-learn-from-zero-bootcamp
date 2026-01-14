<h1>Leap year exercise with solution</h1>
<p>what is leap_year ?</p>
<p>A leap year is a year that is divisible by 4, but not by 100, unless it is also divisible by 400.</p>
<?php
function isLeapYear($year)
{
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}
echo "<h3>input year:</h3>";
echo "<form method='post'>
        <input type='number' name='year' required>
        <input type='submit' value='Check Leap Year'>
      </form>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = intval($_POST['year']);
    if (isLeapYear($year)) {
        echo "<p>$year is a leap year.</p>";
    } else {
        echo "<p>$year is not a leap year.</p>";
    }
}
?>