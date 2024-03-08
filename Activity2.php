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
        $input = $_POST['array'];
        $array = explode(",", $input);
        $array = array_map("trim", $array);
        $array = array_map("intval", $array);
        $result = sumArray($array);
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
    <form action="" method="post">
    <label for="sumArray">Input Your Array Numbers:</label>
    <input type="text" name="array" id="array">

    <button type="submit">Calculate All</button>
    </form>
 
    <?php if(isset($result)):?>
        <div class="array"><p>
            This Array
            <?php echo $input; ?>
            has a total of:
            <?php echo $result; ?>
    </p></div>
    <?php endif; ?>
</body>
</html>