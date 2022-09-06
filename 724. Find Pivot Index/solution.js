/**
 * @param {number[]} nums
 * @return {number}
 */
var pivotIndex = function(nums) {
    let retval = -1
    
    nums.forEach((num, i) => {
        if (sum(nums.slice(0, i)) === sum(nums.slice(i + 1, nums.length))) {
            if (retval === -1) {
                retval = i
            }
        }
    })
    
    return retval
};

function sum(arr) {
    return arr.reduce((a, b) => a + b, 0)
}