class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $a=str_split($s);
        $b=[];
        $max=0;
        foreach($a as $key=>$d){
            if(in_array($d,$b)){
                $ord_key = array_search($d,$b)+1;
                array_splice($b,0,$ord_key);
                array_push($b,$d);
                $max = max($max,count($b));
              
            }else{
                array_push($b,$d);
                $max = max($max,count($b)); 
            }
        }
       return $max;
    }
}