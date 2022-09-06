/**
 * @param {string} s
 * @return {boolean}
 */
var halvesAreAlike = function(s) {
    s = s.toLowerCase()
    
    const firstHalf = s.substring(0, s.length/2)
    const secondHalf = s.substring(s.length/2, s.length)
    
    const firstCount = (firstHalf.match(/[aeiou]/gi) || []).length
    const secondCount = (secondHalf.match(/[aeiou]/gi) || []).length
    
    // console.log(firstHalf)
    // console.log(secondHalf)
    // console.log(firstCount)
    // console.log(secondCount)
    
    return firstCount == secondCount
};