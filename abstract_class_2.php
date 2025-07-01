<?php

abstract class ParentClass{
    abstract protected function prefixName($name);
}

class Child extends ParentClass {
    public function prefixName($name)
    {
        if( $name == "Darachhat" ){
            $prefix = "Mr.";
        }elseif ($name == "Meylik"){
            $prefix = "Ms.";
        }else{
            $prefix = "";
        }
        return $prefix . " " . $name;
    }
}

$class = new Child();
echo $class->prefixName("Darachhat");
echo "<br>";
echo $class->prefixName("Meylik");

?>
