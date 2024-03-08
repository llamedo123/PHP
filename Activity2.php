<!-- Write a function called sumArray that takes an array of integers as input and returns
the sum of all the numbers in the array. (Without Using Built-in Function) -->

<?php
    function sumArray($number)
    {
        $sum = 0;

        foreach($number as $array)
        {
            $sum += $array;
        }
        return $sum;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="sumArray">Input Your Array Numbers:</label>
    <input type="text" name="array" id="array">

    <button type="submit">Calculate All</button>
</body>
</html>