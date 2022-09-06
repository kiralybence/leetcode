/**
 * @param {number[]} nums
 * @return {number}
 */
var findMaxConsecutiveOnes = function(nums) {
    let ret = [0];
    
    nums.forEach((num, i) => {
        ret.push(num == 1 ? ret.pop() + 1 : 0)
    })
    
    return Math.max(...ret)
};