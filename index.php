<?php
// Object Oriented Programming
// Create Object that contain data and function
// Class is templete for object Example Car
// Object is an instance of class Example BMW, GTR
// In a class, variables are called properties and functions are called methods!


Class Car{
    public $model;
    public $color;
    public $price;
    public function getInfo(){
        echo "Model: $this->model<br>";
        echo "Color: $this->color<br>";
        echo "Price: ".$this->price."<br>";
    }

    public function setInfo($model, $color, $price){
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

   public function getModel(){
        return $this->model;
   }

   public function getColor()
   {
        return $this->color;
   }
   public function getPrice()
   {
        return $this->price;

   }
}

$car_1 = new Car();
$car_1->setInfo("BMW", "Reed", 1000000);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>
</head>
<body>
    <div>
        <h2>Car Information</h2>
        <p>Brand: <?php echo $car_1->getModel()?></p>
        <?php $car_1->getInfo();?>

    </div>
</body>
</html>
