<h1>Приватные свойства в ООП в PHP</h1>
<p>Свойства объекта, которые можно прочитывать и записывать извне, называются публичными. Существуют также приватные
    свойства, которые будут доступны только внутри класса.</p>
<p>Имена приватных свойств нужно объявлять с модификатором доступа private.</p>
<?php
class Employee
{
    private $name;
    private $salary;
    private $age;
    public function __construct($name, $salary, $age)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setSalary($salary)
    {
        $this->salary = $this->addSign($salary);
    }
    public function setAge($age)
    {
        if (($age > 0) && ($age < 120))
            return $this->age = $age;
        else {
            return print_r('error', PHP_EOL);
        }
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function getAge()
    {

        return $this->age;
    }


    private function addSign($num)
    {
        return $num . '$';
    }

}

$employee = new Employee("john", 3000, 30);
$employee->setName("eric");
$employee->setSalary(4000);
$employee->setAge(35);
echo PHP_EOL;
print_r($employee->getName());
echo PHP_EOL;
print_r($employee->getSalary());
echo PHP_EOL;
print_r($employee->getAge());
echo PHP_EOL;

print_r("hello");
?>