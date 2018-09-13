<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo "Conditional statement and more operators" ?></title>
</head>
<body>

  <?php

    // $posts = 7;
    // $name = 'Chris';

    // echo "$name has $posts posts</br>";

    // $number1 = 10;
    // $number1 = 20;

    // echo $number1</br>;

    // define("NAME", "Chris");
    // echo NAME</br>;

    // $number = 1;
    // $number--;
    // $number--;
    // echo $number;

    // $shapes = array();
    // $shapes[0] = "square";
    // $shapes[1] = "circle";
    // $shapes[2] = "triangle";
    // echo $shapes[1];

      // $shapes = array("square", "circle", "triangle");
      // $lastShape = array_pop($shapes);
      // echo $lastShape;

        // $numbers = array(1, 56, 43, 67);
        // echo min($numbers);

      // function myFunction() {
      //   $user = "Chris";
      //   $posts = 5;
      //   echo "$user has $posts posts.";
      // }

      // myFunction();

      // function multiplyNumbers($a, $b) {
      //   echo $a * $b;
      // }

      // multiplyNumbers(12, 2);

        // $loggedIn = true;
        // $user = "Chris";

        //   if($loggedIn) {
        //     echo "Welcome back, " . $user;
        //   }

        // $number = 10;

        // if($number === 10) {
        //   echo "Statement is true";
        // }

        // $number = 8;

        // if($number < 10) {
        //   echo "Number is less than 10";
        // } elseif($number == 10) {
        //     echo "Number is 10";
        // } else {
        //   echo "number is not less or equal to 10";
        // }

        // $number1 = 2;
        // $number2 = 10;

        // if($number1 == 5 || $number2 ==10) {
        //   echo "Statement is true";
        // }

        // $favouriteFood = "pasta";

        // switch ($favouriteFood) {
        //   case "Curry":
        //     echo "Hello Curry";
        //     break;
        //   case "Chinese":
        //     echo "I'm still hungry";
        //     break;
        //   case "Pizza":
        //     echo "Pizza...nom.nom.nom.";
        //     break;

        //   default:
        //     echo "I don't know";
        // }

        // $number = 1;
        //   while($number < 10) {
        //     echo "Number $number is less than 10<br>";
        //     $number++;
        //   }

        // $number = 1;
        // do {
        //   echo "$number<br>";
        //   $number++;
        // }
        // while($number < 10)

        // for($number = 0; $number <= 5; $number++) {
        //   echo "Number $number<br>";
        // }

        $shapes = array("square", "circle", "triangle");
          foreach ($shapes as $value) {
            echo "$value<br>";
          }

  ?>

</body>
</html>