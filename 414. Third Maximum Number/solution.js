/**
 * @param {number[]} nums
 * @return {number}
 */
var thirdMax = function(nums) {
    nums = nums.sort((a, b) => a - b)
    nums = [...new Set(nums)] // unique
    
    if (nums.length < 3) {
        return nums[nums.length - 1]
    } else {
        return nums[nums.length - 3]
    }
};