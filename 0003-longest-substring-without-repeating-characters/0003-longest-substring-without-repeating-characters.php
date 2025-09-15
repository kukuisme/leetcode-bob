class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $n =strlen($s);
        $start = 0;
        $maxLen = 0;
        $seen=[];
        $longest="";
        
        for($end= 0 ; $end < $n ; $end++){
            $char = $s[$end];

            if(isset($seen[$char]) && $seen[$char] >= $start){
                $start = $seen[$char] + 1;
            }

            $seen[$char] = $end;
            $curLen = $end - $start + 1 ;

            if($curLen > $maxLen){
                $maxLen = $curLen;
                $longest = substr($s,$start,$curLen);
            }
        }
        $num = strlen($longest);
        return $num;
    }
}