<?php
class Dog{
    public $name = "KAZ";
    public function bark(){
        echo "BAW\n";
    }
}

$a = new Dog();
$a ->bark();
echo $a->name."\n";
?>
