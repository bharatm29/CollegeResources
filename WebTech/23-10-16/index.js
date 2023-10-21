// document.write("value of sin(3) is: " + "&nbsp" + Math.abs(-90) + "<br>")
// document.write("value " + "&nbsp" + Math.ceil(90.20932) + "<br>")
// document.write("value " + "&nbsp" + Math.floor(90.20932) + "<br>")
// document.write("value " + "&nbsp" + Math.pow(2, 5) + "<br>")
// document.write("value " + "&nbsp" + Math.random() + "<br>")
// document.write("value " + "&nbsp" + isNaN(123) + "<br>")
// document.write("value " + "&nbsp" + isNaN("what?") + "<br>")
// document.write("value " + "&nbsp" + Number.parseInt("123", 10) + "<br>")
// document.write("value " + "&nbsp" + Number.parseInt(10, 10) + "<br>")
// document.write("value " + "&nbsp" + Number.parseFloat("1.2938", 10) + "<br>")

//Problem statement
//1. write a program to display error message for numeric and string field

const val1 = prompt("Enter a number");
if(isNaN(val1) || val1.length === 0){
    alert("You entered an empty or a non numeric field");
}
else{
    document.write("Your input is: ", Math.abs(val1), "<br>");
}

const val2 = prompt("Enter name");
if(!isNaN(val2) || val1.length === 0){
    alert("You entered an empty or a numeric field");
}
else{
    document.write("Your input is: ", val2);
}

//2. 
