/**
 * @param {number[]} salary
 * @return {number}
 */
var average = function(salary) {
    let min = Math.min.apply(null, salary);
    let max = Math.max.apply(null, salary);
    
    salary = salary.filter(val => val !== min && val !== max);
    
    return salary.reduce((a, b) => a + b) / salary.length;
};