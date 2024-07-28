class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map=[];
        foreach($nums as $key=>$num){
            $new_number = $target-$num;
            if(isset($map[$new_number])){
                return [$map[$new_number],$key];
            }
            $map[$nums[$key]]=$key;
        }
    }
}