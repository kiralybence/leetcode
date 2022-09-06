/**
 * @param {string} sentence
 * @param {string} searchWord
 * @return {number}
 */
var isPrefixOfWord = function(sentence, searchWord) {
    let retval = -1
    
    sentence.split(' ').forEach((word, i) => {
        let chars = word.split('')
        let XD = ''
        
        chars.forEach(char => {
            XD += char
            
            if (XD == searchWord) {
                if (retval == -1) {
                    retval = i + 1
                }
            }
        })
    })
    
    return retval
};
