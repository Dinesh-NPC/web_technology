let jsonString = '{"name": "Dinesh", "age": 19, "city": "Coimbatore"}';
let jsObject = JSON.parse(jsonString);
console.log("JavaScript Object:", jsObject);
let newJsonString = JSON.stringify(jsObject);
console.log("JSON String:", newJsonString);