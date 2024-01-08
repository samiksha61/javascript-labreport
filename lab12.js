const arr = ["samiksha", "indira", "sarada", "reeya", "Gopal"];
console.log(arr);

let s = arr.filter((e) => {
    return e.startsWith('A');
});
console.log(s);