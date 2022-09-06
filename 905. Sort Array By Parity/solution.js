/**
 * @param {number[]} A
 * @return {number[]}
 */
var sortArrayByParity = function(A) {
    let shifted = 0
    
    for (let i = 0; i < A.length; i++) {
        if (A[i] % 2 != 0 && i < A.length - shifted) {
            A.push(A[i])
            A.splice(i, 1)
            --i
            ++shifted
        }
    }
    
    return A
};