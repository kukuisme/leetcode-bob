class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $max = 0;
        $min = $prices[0];
        for ($i=1 ; $i< count($prices) ; $i++){
            if($prices[$i] - $min > $max) $max = $prices[$i] - $min;
            if($prices[$i]  < $min )$min = $prices[$i]; 
        }
        return $max;

    }
}