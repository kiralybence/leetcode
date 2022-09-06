/**
 * @param {number[]} nums
 * @return {number}
 */
var dominantIndex = function(nums) {
    let max = Math.max(...nums)
    
    return nums.some(num => num !== max && max < num * 2)
        ? -1
        : nums.indexOf(max);
};