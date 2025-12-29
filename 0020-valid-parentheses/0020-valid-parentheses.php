class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $map =[
            '}' => '{',
            ']' => '[',
            ')' => '(',
        ];
        $len = strlen($s);

        for($i = 0 ; $i < $len ; $i++){
            $char = $s[$i];
            if(isset($map[$char])){
                $topElement = empty($stack) ? '#' : array_pop($stack);

                if($topElement != $map[$char]){
                    return false;
                }
            }else{
                    $stack [] =$char;
                }  

        }
        return empty($stack);
    }
}