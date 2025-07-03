<?php
//
//class Welcome{
//    public static function message(){
//        echo "Welcome to PHP";
//    }
//}
//
//class Greeting{
//    public static function message(){
//        echo "Hello";
//    }
//
//    public function __construct()
//    {
//        self::message();
//    }
//}
//
//
//Welcome::message();
//new Greeting();
//?>
<?php
//
//class A{
//    public static function message(){
//        echo "Hello";
//    }
//}
//
//class B {
//    public  function message()
//    {
//     A::message();
//    }
//}
//
//$obj = new B();
//$obj->message();
//?>

<?php

class domian{
    protected static function getDomain()
    {
        return "www.example.com";
    }
}

class w3domain extends domian{
    public $domain;
    public function __construct()
    {
        $this->domain = parent::getDomain();
    }
}

$do = new w3domain();
echo $do->domain;

?>

