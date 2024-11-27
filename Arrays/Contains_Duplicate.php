<?php


class Solution {

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