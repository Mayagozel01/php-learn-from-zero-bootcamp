<?php
require_once "User.php";
class Student extends User
{
    private $year;
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getYear()
    {
        return $this->year;
    }

}
$student = new Student;
$student->setName('jonh');
$name = $student->getName();
echo PHP_EOL;
echo $name;
$student->setYear(1);
echo PHP_EOL;
echo $student->getYear() . ' year';

?>