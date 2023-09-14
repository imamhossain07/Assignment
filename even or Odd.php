<!-- Task 4: Even or Odd Checker -->

<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
</head>
<body>
    <h2>Even Odd Checker</h2>
    <form method="post" action="">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $number = $_POST["number"];

            if ($number % 2 == 0) {
                echo "{$number} is an even number.";
            } else {
                echo "{$number} is an odd number.";
            }
        }
    ?>
</body>
</html>