<?php


class Solution {
#first solution I used two nested loops (bruteforce Method)
function containsDuplicateBruteForce($nums){
    $n = count($nums);
    for($i = 0;$i < $n ;$i++){
        for($j =$i+1 ;$j < $n; $j++){
            if($nums[$i] == $nums[$j]){
                return true;
            }
        }
    }
    return false;
}
#second solution, I used the isset method to check a value if it already exists in the values array
function containsDuplicate($nums) {
       $array = [];
       foreach($nums as $num){
           if(isset($array[$num])) return true;
           $array[$num] =1;
       }
       return false;
       
   }
   }

$object = new Solution();
$object->containsDuplicate([1,2,3,4,5,1]);
?>