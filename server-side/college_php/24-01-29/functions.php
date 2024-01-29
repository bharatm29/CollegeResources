<html>
<head>
    <title>hi:)</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" value="help please" />
        <input type="submit" name="btn" value="click me" />
    </form>
    <br>
    <form method="get">
        <input type="text" name="name" value="help please" />
        <input type="submit" name="btn" value="click me" />
    </form>
</body>
</html>

<?php
//Function -> delcaration, definition, calling
//There are two types of function :- User defined function and in-built(system defined functions) function
//Advantages of functions:- Code reusability, less redundant code, easy to understand because of scopes. Modularising

//Here we are combining both delcaration and definition combined.
function callMe($n){
    echo "Function called with arg: ".$n."<br>";
}

callMe(10); //function call

if ($_POST) {
    echo $_POST["name"];
}

//POST is preferred than GET because the payload goes into the body of the request rather than the url.
if ($_GET) {
    echo $_GET["name"];
}
?>
