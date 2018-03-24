<?php
 
 class Students
{
    // объявление свойства
    public $name = '';

    function __construct($name, $status)
    {
        $this->name = $name;
        $this->status = $status;
        $this->getName();
	$this->getStatus();
    }

    // объявление метода
    public function getName() 
    {
		echo 'user name ' . $this->name . '<br>';
    }

    public function getStatus() 
    {
        //echo 'user status ' . $this->status . '<br><br><br>';
        if ($this->status) 
        {
        	echo 'user status : присутствует<br><br><br>';
        }
        else
        {
        	echo 'user status : отсутствует<br><br><br>';	
        }
    }

    public function setName($name)
       {
        $this->name = $name;
       }
}


$petr = new Students('Петров',true);


$sidr = new Students('Сидоров',false);

$sheva = new Students('Шевченоко', true);