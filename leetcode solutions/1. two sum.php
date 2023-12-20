<?php

// Input: nums = [2,7,11,15], target = 9
// Output: [0,1]
// Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

$nums = array(2,7,11,15);
$target = 9;

//function twoSum($nums, $target) {
//    $indexArray = array([]);
//    for($i = 0; $i < count($nums); $i++){
//
//    }
//
//}

$indexArray = array();
foreach($nums as $index=> $num){
    $complement = $target - $num;
    echo "\n$complement";
}



