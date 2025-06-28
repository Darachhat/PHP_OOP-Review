// constructor saves us from calling the set_name() method which reduces the amount of code
<?php
class Ite {
    public $shift;
    public $student;

    public function __construct($shift, $student)
    {
        $this->shift = $shift;
        $this->student = $student;

    }
    public function getInfo(){
        echo "Shift: $this->shift<br>";
        echo "All Student: $this->student<br>";
    }
}

$a2 = new Ite("Atfernoon", 42);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>ITE</h2>
        <?php $a2->getInfo(); ?>
    </div>
</body>
</html>
