<?php
include "nav.php";
?>


<?php

// Classes in PHP

class Person
{

    public $name;

    public $age;

    public function __construct($name, $age)
    {

        $this->name = $name;

        $this->age = $age;

    }

    public function greet()
    {

        return "Hello, my name is " . $this->name;

    }

}

$person = new Person("John", 30);

echo $person->greet();

echo "<br>" . "👉 Энкапсуляция — это когда:"

    . "<br>внутреннее состояние спрятано"

    . "<br>снаружи есть контролируемый доступ"

    . "<br>никто не может сломать объект напрямую"
    . "«Я не знаю, как это работает внутри —
я знаю, как этим пользоваться.»";
echo "<h1>👉 Инкапсуляция — это ограничение доступа к данным и методам объекта.</h1>";

include "home.php";
class Employee
{
    public $name;
    public $age;
    public $salary;
    public function __construct()
    {
        echo '++';
    }
    public function show()
    {
        var_dump($this);
        return $this->name;
    }
    public function showName()
    {
        return $this->name;
    }
    public function showSalary()
    {
        return $this->salary;
    }
    public function multiplySalary()
    {
        return $this->salary * 1.1;
    }
}
new Employee();
echo "<br>";

$employee = new Employee;
echo "<br>";

$employee->name = 'john';
echo "<br>";

echo "<br>";
$employee->age = 25;
echo "<br>";

echo "<br>";
$employee->salary = 50000;
$employee2 = new Employee;
$employee2->name = 'eric';
$employee2->age = 26;
$employee2->salary = 2000;

var_dump($employee);
echo "<br>";
var_dump($employee->salary + $employee2->salary);
echo "<br>";
var_dump($employee->age + $employee2->age);
echo "<br>";
echo $employee->show();
echo "<br>";
print_r($employee->showName());
echo "<br>";
print_r("it is salary " . $employee->showSalary());
echo "<br>";
echo "<hr>";
print_R($employee->multiplySalary());
echo "<br>";
echo "<hr>";
class Student
{
    public $name;
    public $surname;
    public function turnUpper($str)
    {
        return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
    }
    public function getInitials()
    {
        return $this->turnUpper($this->name)[0] . $this->turnUpper($this->surname)[0];
    }
}
$student = new Student;
$student->name = "student";
$student->surname = "Last";
echo $student->getInitials();
echo "<br>";
print_r(PHP_EOL);
require_once "User.php";
$user = new User;
$user->setName("Alice")->setSurn("Smith");
echo "<br>" . $user->getName();
print_r(PHP_EOL);
echo "<br>" . $user->getSurn();
require_once "Employee.php";
$employee = new Employee;
$employee->setName('Maya')->setAge('26')->setSalary(1000);
$employee->getName()->getAge()->getSalary();
?>