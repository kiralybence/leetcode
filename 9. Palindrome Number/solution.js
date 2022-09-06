/**
 * @param {number} x
 * @return {boolean}
 */
var isPalindrome = function(x) {
    x = x.toString();
    
    firstHalf = x.slice(0, x.length / 2);
    secondHalf = x.slice(x.length / 2 + (x.length % 2 === 0 ? 0 : 1), x.length);
    
    return firstHalf === secondHalf.split("").reverse().join("");
};