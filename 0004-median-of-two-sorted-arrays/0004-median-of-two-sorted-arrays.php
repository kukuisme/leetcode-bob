class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $newarray =array_merge($nums1,$nums2);
        sort($newarray);
        if(count($newarray)%2!=0){
            return $newarray[count($newarray)/2];
        }else{
            return  ($newarray[count($newarray)/2]+$newarray[(count($newarray)/2)-1])/2;
            
        }
    }
}