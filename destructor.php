<?php

class Person
{
    public $name;
    public $project;
    public $age;
    public $contact;

    function __construct($name, $project, $age, $contact)
    {
        $this->name = $name;
        $this->project = $project;
        $this->age = $age;
        $this->contact = $contact;
    }
    function __destruct()
    {
        echo "<h2>My name is $this->name</h2>";
        echo "<h2>I am $this->age years old</h2>";
        echo "<h2>I am working on $this->project</h2>";
        echo "<h2>My contact is $this->contact</h2>";
    }
}
$drc = new Person("Darachhat", "PHP", 19, "darachhat012@gmail.com");
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
    <h2>About Me</h2>
</body>
</html>
