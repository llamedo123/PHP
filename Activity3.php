<!-- Write a function called countVowels that takes a string as input and return the count of vowels 
(a, e, i, o, u) in the string. -->

<?php
    function countVowels($number)
    {

        $count = 0;
        $vowels = ['a','e','i','o','u'];
        $number = strtolower($number);

        for($i = 0; $i < strlen($number); $i++)
        {
            if(in_array($number[$i], $vowels))
            {
                $count++;
            }
        }
        return $count++;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $countVowels = $_POST['vowels'];
        $result = countVowels($countVowels);
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
        <label for="vowels">Input your Text:</label>
        <input type="text" name="vowels" id="vowels">

        <button type="submit">Determined</button>
    </form>
    <?php if(isset($result)):?>
        <div class="vowels"><br><br>
            <?php echo $result; ?> VOWELS
        </div>
    <?php endif; ?>
</body>
</html>