<?php
include "nav.php";

$users = [
    [
        "name" => "Arslan",
        "age" => 25,
        "phone" => "123-456-7890"
    ],
    [
        "name" => "Aisha",
        "age" => 28,
        "phone" => "098-765-4321"
    ],
    [
        "name" => "Kamil",
        "age" => 22,
        "phone" => "555-555-5555"
    ]
];
class Controller
{
    public int $id;
    public $arr;

    public function get($arr): array
    {

        return $arr;
    }
    public function show($id): array
    {
        return $this->arr[$id];
    }
}
class UserController extends Controller
{
    public function getPhoneNumber(): string
    {
        return $this->arr[$this->id]['phone'];
    }

}




require_once "Employee.php";
echo PHP_EOL;
$employee = new Employee;
$employee->setName('Maya')->setAge(26)->setSalary(1000);
print_r($employee->getName());
echo PHP_EOL;
print_r($employee->getSalary());
echo PHP_EOL;
print_r($employee->getAge());
echo PHP_EOL;

