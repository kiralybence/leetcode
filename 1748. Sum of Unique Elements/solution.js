/**
 * @param {number[]} nums
 * @return {number}
 */
var sumOfUnique = function(nums) {
    return nums.map(num => nums.filter(x => x == num).length > 1 ? null : num).reduce((a, b) => a + b)
};