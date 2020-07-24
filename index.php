<?php

class abc{
    private $name;

    private function setName($fname){
        return $this->name = $fname;
    }

    public function __call($method,$args){
        return 'This is private method '.$method;
    }
}

$obj = new abc;
echo $obj->setName('hello');

?>
