class Solution {
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $INT_MIN = -pow(2, 31);       // -2147483648
        $INT_MAX = pow(2, 31) - 1;    // 2147483647

        $sign = $x < 0 ? -1 : 1;
        $x = abs($x);

        $rev = 0;
        while ($x > 0) {
            $rev = $rev * 10 + $x % 10;
            $x = intdiv($x, 10);
        }

        $rev *= $sign;

        if ($rev < $INT_MIN || $rev > $INT_MAX) {
            return 0;
        }

        return $rev;
    }
}
