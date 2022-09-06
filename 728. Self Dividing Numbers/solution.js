/**
 * @param {number} left
 * @param {number} right
 * @return {number[]}
 */
var selfDividingNumbers = function(left, right) {
    let retval = []
    
    for (i = left; i <= right; i++) {
        nums = i.toString().split('')
        
        if (nums.includes(0)) continue
        
        let can = true
        
        nums.forEach(num => {
            if (i % num != 0) can = false
        })
        
        if (can) retval.push(i)
    }
    
    return retval
};