/**
 * @param {number[]} gain
 * @return {number}
 */
var largestAltitude = function(gain) {
    let alt = [0]
    
    gain.forEach((gain, i) => {
        alt.push(alt[i] + gain)
    })
    
    return Math.max(...alt)
};