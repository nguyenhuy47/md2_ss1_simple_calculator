<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .class1 {
            border: 1px;
            margin: 0px;
            padding: 10px;

        }

        .input {
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST["firstNumber"];
    $operator = $_POST["operator"];
    $second = $_POST["secondNumber"];
}
?>

<?php

switch ($operator) {
    case "+":
        $result = $first + $second;
        break;
    case "-":
        $result = $first - $second;
        break;
    case "*":
        $result = $first * $second;
        break;
    case "/":
        $result = $first / $second;
        break;
}
?>

<form>
    <div class="class1">
        <h1>Result</h1>
        <label>Equal:</label>
        <?php echo $result; ?><br>
    </div>
</form>
</body>
</html>


