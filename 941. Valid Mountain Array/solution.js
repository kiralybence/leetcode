/**
 * @param {number[]} arr
 * @return {boolean}
 */
var validMountainArray = function(arr) {
    if (arr.length < 3) return false
    
    let isInc
    let isDec
    
    if (arr[0] < arr[1]) {
        isInc = true
        isDec = false
    } else {
        return false
    }
    
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == arr[i+1]) return false
        
        if (arr[i] > arr[i+1]) {
            isInc = false
            isDec = true
            continue
        }
        
        if (arr[i] < arr[i+1] && isDec) return false
    }
    
    return isDec
};