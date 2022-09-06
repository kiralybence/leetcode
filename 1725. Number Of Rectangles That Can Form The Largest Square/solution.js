/**
 * @param {number[][]} rectangles
 * @return {number}
 */
var countGoodRectangles = function(rectangles) {
    rectangles = rectangles.map(len => Math.min(len[0], len[1]))
    
    const max = Math.max(...rectangles)
    
    return rectangles.filter(len => len == max).length
};