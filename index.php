<?php

//  class Car {
//     public function color()
//     {
//         echo "black";
//     }

//     public function model()
//     {
//         echo "BY00T";
//     }

//     public function engine()
//     {
//         echo "1000cc";
//     }

//     public function wheel()
//     {
//         echo "4 wheel";
//     }

//     public function body()
//     {
//         echo "miduom";
//     }
//  }


// $car = new Car();
// $car->engine()


class Calculator {

    public function sum($number1, $number2)
    {
        $x = $number1;
        $y = $number2;

        $result = $x+$y;
        return $result;
        
    }

    public function sub($number1, $number2)
    {
        $x = $number1;
        $y = $number2;

        $result = $x-$y;
        return $result;
    }

     public function multiplication($number1, $number2)
    {
        $x = $number1;
        $y = $number2;

        $result = $x*$y;
        return $result;
    }

     public function division($number1, $number2)
    {
        $x = $number1;
        $y = $number2;

        $result = $x/$y;
        return $result;
    }
    
}

$calculator = new calculator();

$summation = $calculator->sum(3015, 4480);
 echo "The result is = $summation <br>";

 $summatiom2 = $calculator->sub(5824, 4581);

 echo "The result is = $summatiom2 <br>";

 $subtion = $calculator->sub(458, 362);
 echo "The result is = $subtion <br>";

 $subtionn = $calculator->sub(938, 562);
 echo "The result is = $subtionn <br>";

 $multi = $calculator->multiplication(458, 24);
 echo "The result is = $multi <br>";

 $division = $calculator->division(358, 6);
 echo "The result is = $division <br>";


?>