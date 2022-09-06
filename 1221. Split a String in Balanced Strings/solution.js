/**
 * @param {string} s
 * @return {number}
 */
var balancedStringSplit = function(s) {
    let parts = 0
    let r = 0
    let l = 0
    
    s.split('').forEach(char => {
        if (char == 'R') ++r
        else if (char == 'L') ++l
        
        if (r == l) {
            ++parts
            r = 0
            l = 0
        }
    })
    
    return parts
};