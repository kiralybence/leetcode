/**
 * @param {number[]} heights
 * @return {number}
 */
var heightChecker = function(heights) {
    let sorted = []
    // fill it manually, because otherwise it'd have same reference
    // and sort() would sort the original array as well
    heights.forEach(height => {
        sorted.push(height)
    })
    sorted = sorted.sort((a, b) => a - b)
    
    let wrong = 0
    
    for (let i = 0; i < heights.length; i++) {
        // console.log(heights[i], sorted[i])
        if (heights[i] != sorted[i]) ++wrong
    }
    
    return wrong
};