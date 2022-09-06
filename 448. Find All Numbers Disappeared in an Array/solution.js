/**
 * @param {number[]} nums
 * @return {number[]}
 */
var findDisappearedNumbers = function(nums) {
    let missing = []
    
    for (let i = 1; i <= nums.length; i++) {
        if (!nums.includes(i)) missing.push(i)
    }
    
    return missing
};