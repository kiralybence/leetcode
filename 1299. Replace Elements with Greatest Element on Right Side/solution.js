/**
 * @param {number[]} arr
 * @return {number[]}
 */
var replaceElements = function(arr) {
    for (let i = 0; i < arr.length; i++) {
        // if its the last one
        if (i == arr.length - 1) {
            arr[i] = -1
            break
        } else {
            arr[i] = arr[i+1]
        }
        
        for (let j = i + 1; j < arr.length; j++) {
            if (arr[j] > arr[i]) arr[i] = arr[j]
        }
    }
    
    return arr
};