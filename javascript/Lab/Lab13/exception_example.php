<?php
//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Please enter a number 1 or below.");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(2);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}
//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

try{
    $amount = 100;
    $total = $amount / 0; // This will cause a warning for division by zero
    echo "Total: {$total}";
} catch (DivisionByZeroError $e){
    echo "Error: {$e->getMessage()}";
}
echo "<br>This is exception handling example.";

// multiple exceptions
try{
$shif =1;
 $number = 8;
 $result =  $number >> $shif;
 echo $result; //// 1000 >> 01000 = 4

$shif =-1;
 $number = 8;
 $result =  $number >> $shif;
 ////result is ArithmeticError

 $amount = 100;
    $total = $amount / 0; // This will cause a warning for division by zero
    echo "Total: {$total}";
} catch(ArithmeticError $e){
    echo "Arithmetic Error: {$e->getMessage()} <br>";
} catch (DivisionByZeroError $e){
    echo "Division By Zero Error: {$e->getMessage()} <br>";
} catch (Error $e){
    echo "General Error: {$e->getMessage()} <br>";
}
?>