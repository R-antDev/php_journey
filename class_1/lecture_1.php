<?php
// echo "I am Emon";
// echo "<br>";
// $txt = "Football";
// var_dump($txt);
// echo"<br>";
// echo "I love ". $txt . "!";
// local variable
// echo "<br>";
// function myLocalVar(){
//     $localVar = "This is a local variable";
//     echo $localVar;
// }
// myLocalVar();
//global variable
// echo "<br>";
// $globalVar = "This is a global variable";
// function myGlobalVar(){
//     global $globalVar;
//     echo $globalVar;
// }
// myGlobalVar();
// Task 1
// $a = 30;
// $b = 20;

// //variable type
// var_dump( $a);
// echo "<br>";

// $a = $a + $b;
// $b = $a - $b;
// $a = $a - $b;

// echo "New A =".$a;
// echo "<br>";
// echo "New B =".$b;

// Task 2
// echo "<br>";
// $sum = $a + $b;
// echo "Sum = ".$sum;
// echo "<br>";

// array
// $myboolean = true;
// var_dump($myboolean);
// echo "<br>";
// $data = array("Tiger", "Lion", "Elephant");
// var_dump($data);
// echo "<br>";

//printing array
// echo implode(',', $data);
// echo '<br>';
// print_r( $data );

// concat
// echo '<br>';
// $firstName = "Hasan";
// $lastName = "Emon";
// concatenation

// echo $firstName. " " .$lastName;
// echo "<br>";
// $result = true;
// conditional

// if($result){
//     echo "You are passed";
// }else{
//     echo "You are failed";
// }
// ternary conditional

// echo "<br>";
// $age = 20;
// $status = ($age >= 10) ?"Adult":"Minor";
// echo "You are " . $status;
// echo "<br>";
// task 3

// $num1 = 20;
// $num2 = 30;

// $maxNum = ($num1 > $num2) ? $num1 : $num2;
// echo "Maximum is: ".$maxNum;
// conditional if else

// echo "<br>";

// $value = 20;

// if ($value < 10) {
//         echo "Value is less than- 10";
// } else if ($value <= 20) {
//         echo "Value is less than- 20";
// } else {
//         echo "Value is greater than- 20";
// };

// echo "<br>";

// task 4
// echo "<br>";
//$curTemp = 21;

// if ($curTemp > 25) {
//         echo "It's a warm day.";
// } else {
//         echo "It's a cool day.";
// };
// with ternary
//echo ($curTemp > 25) ? "<h1> It's a warm day.</h1>" : "<h1> It's a cool day.</h1>";

//nested if
//$score = 85;
//
//if($score >= 90){
//    echo "A";
//}elseif ($score >= 80){
//    echo "B";
//    if ($score >= 85){
//        echo  "+";
//    }
//}else {
//    echo "C";
//}
// switch case

//$day = "thursday";
//
//switch ($day){
//    case "sunday";
//        echo "It's a beginning of the week";
//    break;
//    case "thursday";
//        echo "It's the end of the week!";
//    break;
//    default:
//        echo "It's a regular day.";
//}
//
//$grade = "L";
//switch ($grade){
//    case 'A';
//    case 'B';
//    case 'C';
//    case 'D';
//    echo 'Pass';
//    break;
//    case 'E';
//    case 'F';
//    echo 'Fail';
//    break;
//    default:
//        echo 'Invalid Grade';
//}

// task 5

//$num = 1;
//switch (true){
//    case $num > 0:
//        echo 'Positive';
//        break;
//    case $num == 0:
//        echo 'Zero';
//        break;
//    default:
//        echo 'Negative';
//}

// task 6
//echo "<br>";
//
//$age = 59;
//if ($age <= 12 && $age >= 0){
//    echo "Child";
//}elseif ($age >= 13 && $age <= 19){
//    echo "Teenager";
//}elseif ($age >= 20 && $age <= 59){
//    echo "Adult";
//}else{
//    echo "Senior";
//}

// for loop
//echo "for loop ---- ";
//echo "<br>";
//for ($i = 2; $i < 11; $i+=2){
//    echo $i. "<br>";
//}

// while loop
//echo "while loop ---- ";
//echo "<br>";
//
//$counter = 0;
//
//while ($counter < 11){
//    echo $counter."<br>";
//    $counter ++;
//}
// do while loop
//
//echo "do while loop ---- ";
//
//echo "<br>";
//$i = 0;
//do{
//    echo $i."<br>";
//    $i++;
//}while($i < 11);
//
//echo "for each loop with keys ---- ";
//echo "<br>";
//
//$data = array(100, 200 ,300 ,400 ,500 ,600 ,700 ,800 ,900);
//$dataStr = array('dhaka', 'mymensingh', 'chittagong', 'munshigong');
//
//foreach ($dataStr as $index=> $value){
//    echo $index + 1 .'.'. $value."<br>";
//}
//
//echo "<br>";
//foreach ($data as $key => $value){
//    echo ++$key.'.'.$value."<br>";
//}
// task 7
//for ($i = 1; $i <= 20; $i++){
//    echo $i.'<br>';
//}
// task 8
for ($i = 10; $i >= 1; $i--){
    echo $i.'<br>';
}






















