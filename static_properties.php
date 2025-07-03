<?php

class Welcome{
    public static $message = "Welcome to PHP";
}
echo Welcome::$message;
?>

<?php

class pi{
    public static $value = 3.14;
}


echo pi::$value;
?>

<?php

class pi2{
    protected static $value = 3.14;
    public function statisPi()
    {
        return self::$value;
    }
}

class x extends pi{
    public function xPi()
    {
        return parent::$value;
    }
}



$pi = new pi2();
echo $pi->statisPi();

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xPi();

?>


