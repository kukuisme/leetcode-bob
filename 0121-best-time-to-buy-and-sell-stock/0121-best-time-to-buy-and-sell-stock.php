class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $max = 0;
        $min = PHP_INT_MAX;
        foreach($prices as $price){
            if($price < $min){
                $min = $price;
                continue;
            }else if($price-$min>$max){
                $max = $price -$min ;
            }
        }
        return $max;
    }
}