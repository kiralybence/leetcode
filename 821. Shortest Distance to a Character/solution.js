/**
 * @param {string} s
 * @param {character} c
 * @return {number[]}
 */
var shortestToChar = function(s, c) {
    let positions = []
    let chars = s.split('')
    let ret = []
    
    chars.forEach((char, i) => {
        if (char == c) positions.push(i)
    })
    
    chars.forEach((char, i) => {
        for (let j = 0; j < positions.length; j++) {
            if (i < positions[j]) {
                ret.push(positions[j] - i)
                break
            }
            
            if (i == positions[j]) {
                ret.push(0)
                break
            }
            
            if (positions[j] < i && i < positions[j+1]) {
                let prev = i - positions[j]
                let next = positions[j+1] - i
                
                ret.push(Math.min(prev, next))
                break
            }
            
            if (positions[j] < i && !positions[j+1]) {
                ret.push(i - positions[j])
                break
            }
        }
    })
    
    return ret
};