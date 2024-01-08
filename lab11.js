const arr = ["samiksha", "sandhya", "bikisha", "Reeya"]
console.log(arr);
arr.sort((a, b) => a.localeCompare(b, {numeric : true}));
    console.log(arr);