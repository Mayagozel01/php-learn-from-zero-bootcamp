<?php
class User
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

class Employee extends User
{
    public function changeName($name)
    {
        if (strlen($name) > 0) {
            $this->setName($name);
        }
    }
}
$employee = new Employee();
$employee->setName("Bob");
echo $employee->getName();
echo PHP_EOL;

?>