class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x<0 || $x%10==0 && $x !=0){
            return false;
        }
        $backNumber=0;
        while($x>$backNumber){
            $backNumber=$backNumber*10+$x%10;
            $x =intval(floor($x/10));
        }
        return $x==$backNumber || $x==intval(floor($backNumber /10));
    }
}