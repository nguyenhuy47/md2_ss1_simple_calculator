<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .class1{
            border: 1px;
            margin: 0px;
            padding: 10px;

        }
        .input{
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
<form method="post" action="result.php">
    <div class="class1">
        <h1>Simple Calculator</h1>
        <label>First operand:</label>
        <input class="input" name="firstNumber" type="text" size="30" placeholder="first number"><br>
        <label>Operator:</label>
        <select name="operator">
            <option value="+">addition</option>
            <option value="-">subtraction</option>
            <option value="*">multi</option>
            <option value="/">divition</option>
        </select><br>
        <label>Second operand:</label>
        <input class="input" name="secondNumber" type="text" size="30" placeholder="second number" ><br>
        <input class="input" type="submit" size="30" value="Calculation" ><br>
    </div>
</body>
</html>


