<?php
class Employee
{
    private $name;
    private $salary;
    private $age;


    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setAge($age)
    {
        if (($age > 0) && ($age < 120))
            $this->age = $age;
        else {
            return print_r('error', PHP_EOL);
        }
        return $this;

    }
    public function setSalary($salary)
    {
        $this->salary = $this->addSign($salary);
        return $this;
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
?>