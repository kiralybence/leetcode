/**
 * @param {number[][]} mat
 * @return {number}
 */
var diagonalSum = function(mat) {
    let sum = []
    const last = mat.length - 1
    
    mat.forEach((row, i) => {
        sum.push(row[i])
        
        if (i != last - i) {
            sum.push(row[last - i])
        }
    })
    
    return sum.reduce((a, b) => a + b)
};