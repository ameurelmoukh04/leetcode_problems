<?php


class Solution
{
    #first solution I used two nested loops (bruteforce Method)
    function containsDuplicateBruteForce($nums)
    {
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($nums[$i] == $nums[$j]) {
                    return true;
                }
            }
        }
        return false;
    }
    #second solution, I used the isset method to check a value if it already exists in a new values array That I created
    function containsDuplicate($nums)
    {
        $array = [];
        foreach ($nums as $num) {
            if (isset($array[$num]))
                return true;
            $array[$num] = 1;
        }
        return false;
    }

    #alnd the last approach is I used a hashMap (assosiative array) that contains the numbers as keys with the repetitve count as values and when the counter is greater than 0 so the function will return true
    function containsDuplicateHash($nums){
        $hash = [];
        $n = count($nums);

        for ($i=0; $i < $n ; $i++) { 
            if(isset($hash[$nums[$i]])){
                $hash[$nums[$i]]+= 1;
            }else{

                $hash[$nums[$i]] = 0;
            }
        }
        
        foreach($hash as $key => $value){
            if($value > 0){
                return true;
            }
        }
        return false;
    }
}

$object = new Solution();
$object->containsDuplicateHash([1, 2, 3, 4, 5, 1,2,2]);
?>