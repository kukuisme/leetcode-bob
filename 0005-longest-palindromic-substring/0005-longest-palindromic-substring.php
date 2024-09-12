class Solution {
    function longestPalindrome($s) {
        $T = "^#".implode("#", str_split($s))."#$";
        $n = strlen($T);
        $P = array_fill(0, $n, 0);
        $C = $R = 0;
        
        for ($i = 1; $i < $n-1; $i++) {
            $P[$i] = ($R > $i) ? min($R - $i, $P[2*$C - $i]) : 0;
            while ($T[$i + 1 + $P[$i]] == $T[$i - 1 - $P[$i]])
                $P[$i]++;
            
            if ($i + $P[$i] > $R) {
                $C = $i;
                $R = $i + $P[$i];
            }
        }
        
        $max_len = max($P);
        $center_index = array_search($max_len, $P);
        return substr($s, ($center_index - $max_len) / 2, $max_len);
    }
}