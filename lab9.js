
const originalArray = ['apple', 'banana', 'orange', 'grape'];
const capitalizedArray = originalArray.map(function(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
});
console.log("Original array of strings:");
console.log(originalArray);

console.log("\nNew array with capitalized strings:");
console.log(capitalizedArray);
