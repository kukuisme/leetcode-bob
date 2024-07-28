class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) { 
        $left = 0; // 左指針
        $right = count($height) - 1; // 右指針
        $maxArea = 0; // 最大面積

    while ($left < $right) {
        // 計算當前指針處的高度和寬度
        $width = $right - $left;
        $minHeight = min($height[$left], $height[$right]);
        $currentArea = $width * $minHeight;
        
        // 更新最大面積
        $maxArea = max($maxArea, $currentArea);

        // 移動指針
        if ($height[$left] < $height[$right]) {
            $left++;
        } else {
            $right--;
        }
    }

    return $maxArea;

    }
}
