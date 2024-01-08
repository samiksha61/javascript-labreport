const arr = [
    {name : "Hari", age : "18"},
    {name : "Ram", age : "21"},
    {name : "Shyam", age : "23"}
]
console.log(arr);
arr.map((
    {['name']:_, ...rest}) =>{
     console.log(rest);   
    })