/**
 * @param {number[]} nums
 * @return {void} Do not return anything, modify nums in-place instead.
 */
var moveZeroes = function(nums) {
    let shifted = 0
    
    for (let i = 0; i < nums.length; i++) {
        if (nums[i] == 0 && i < nums.length - shifted) {
            nums.splice(i, 1)
            nums.push(0)
            --i
            ++shifted
        }
    }
};