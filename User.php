<?php
class User
{
    private $name;
    private $surn;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setSurn($surn)
    {
        $this->surn = $surn;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurn()
    {
        return $this->surn;
    }

}
?>