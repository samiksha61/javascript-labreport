
const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

console.log("Even numbers in the array:");

numbers.forEach(function(number) {
    if (number % 2 === 0) {
        console.log(number);
    }
});
