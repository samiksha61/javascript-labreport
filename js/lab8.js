
const stringsArray = ['apple', 'banana', 'orange', 'grape'];
console.log("Original array of strings:");
console.log(stringsArray);
const removedElement = stringsArray.shift();
console.log("\nArray after removing the first element:");
console.log(stringsArray);
const newString = 'kiwi';
stringsArray.unshift(newString);
console.log("\nArray after adding a new string to the beginning:");
console.log(stringsArray);
console.log("\nDetails of the removed element:");
console.log(removedElement);
